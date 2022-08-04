@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.inTheNew.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.in-the-news.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheNew.fields.id') }}
                        </th>
                        <td>
                            {{ $inTheNew->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheNew.fields.title') }}
                        </th>
                        <td>
                            {{ $inTheNew->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheNew.fields.caption') }}
                        </th>
                        <td>
                            {!! $inTheNew->caption !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheNew.fields.date_location') }}
                        </th>
                        <td>
                            {{ $inTheNew->date_location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheNew.fields.photo') }}
                        </th>
                        <td>
                            @if($inTheNew->photo)
                                <a href="{{ $inTheNew->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $inTheNew->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheNew.fields.description') }}
                        </th>
                        <td>
                            {!! $inTheNew->description !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.in-the-news.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection