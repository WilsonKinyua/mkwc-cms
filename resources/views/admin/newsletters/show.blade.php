@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.newsletter.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.newsletters.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.newsletter.fields.id') }}
                        </th>
                        <td>
                            {{ $newsletter->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsletter.fields.title') }}
                        </th>
                        <td>
                            {{ $newsletter->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsletter.fields.newsletter_image') }}
                        </th>
                        <td>
                            @if($newsletter->newsletter_image)
                                <a href="{{ $newsletter->newsletter_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $newsletter->newsletter_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsletter.fields.document_file') }}
                        </th>
                        <td>
                            @if($newsletter->document_file)
                                <a href="{{ $newsletter->document_file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.newsletters.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection