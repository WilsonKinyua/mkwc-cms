@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.quote.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.quotes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.id') }}
                        </th>
                        <td>
                            {{ $quote->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.quote.fields.image') }}
                        </th>
                        <td>
                            @if($quote->image)
                                <a href="{{ $quote->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $quote->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.quotes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection