@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.inTheMedium.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.in-the-media.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheMedium.fields.id') }}
                        </th>
                        <td>
                            {{ $inTheMedium->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheMedium.fields.title') }}
                        </th>
                        <td>
                            {{ $inTheMedium->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheMedium.fields.media_house') }}
                        </th>
                        <td>
                            {{ $inTheMedium->media_house }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheMedium.fields.category') }}
                        </th>
                        <td>
                            {{ $inTheMedium->category }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheMedium.fields.media_url_link') }}
                        </th>
                        <td>
                            {{ $inTheMedium->media_url_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheMedium.fields.date') }}
                        </th>
                        <td>
                            {{ $inTheMedium->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.inTheMedium.fields.image') }}
                        </th>
                        <td>
                            @if($inTheMedium->image)
                                <a href="{{ $inTheMedium->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $inTheMedium->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.in-the-media.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection