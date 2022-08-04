@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.mkwcPartner.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.mkwc-partners.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.mkwcPartner.fields.id') }}
                        </th>
                        <td>
                            {{ $mkwcPartner->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mkwcPartner.fields.name') }}
                        </th>
                        <td>
                            {{ $mkwcPartner->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mkwcPartner.fields.category') }}
                        </th>
                        <td>
                            {{ $mkwcPartner->category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mkwcPartner.fields.website_url') }}
                        </th>
                        <td>
                            {{ $mkwcPartner->website_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.mkwcPartner.fields.logo') }}
                        </th>
                        <td>
                            @if($mkwcPartner->logo)
                                <a href="{{ $mkwcPartner->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $mkwcPartner->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.mkwc-partners.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection