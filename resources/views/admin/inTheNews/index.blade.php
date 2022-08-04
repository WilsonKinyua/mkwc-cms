@extends('layouts.admin')
@section('content')
@can('in_the_new_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.in-the-news.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.inTheNew.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.inTheNew.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-InTheNew">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.inTheNew.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.inTheNew.fields.date_location') }}
                        </th>
                        <th>
                            {{ trans('cruds.inTheNew.fields.photo') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inTheNews as $key => $inTheNew)
                        <tr data-entry-id="{{ $inTheNew->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $inTheNew->title ?? '' }}
                            </td>
                            <td>
                                {{ $inTheNew->date_location ?? '' }}
                            </td>
                            <td>
                                @if($inTheNew->photo)
                                    <a href="{{ $inTheNew->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $inTheNew->photo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('in_the_new_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.in-the-news.show', $inTheNew->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('in_the_new_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.in-the-news.edit', $inTheNew->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('in_the_new_delete')
                                    <form action="{{ route('admin.in-the-news.destroy', $inTheNew->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('in_the_new_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.in-the-news.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-InTheNew:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection