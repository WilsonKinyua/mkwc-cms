@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.inTheMedium.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.in-the-media.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.inTheMedium.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inTheMedium.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="media_house">{{ trans('cruds.inTheMedium.fields.media_house') }}</label>
                <input class="form-control {{ $errors->has('media_house') ? 'is-invalid' : '' }}" type="text" name="media_house" id="media_house" value="{{ old('media_house', '') }}">
                @if($errors->has('media_house'))
                    <div class="invalid-feedback">
                        {{ $errors->first('media_house') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inTheMedium.fields.media_house_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="category">{{ trans('cruds.inTheMedium.fields.category') }}</label>
                <input class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" type="text" name="category" id="category" value="{{ old('category', '') }}">
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inTheMedium.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="media_url_link">{{ trans('cruds.inTheMedium.fields.media_url_link') }}</label>
                <textarea class="form-control {{ $errors->has('media_url_link') ? 'is-invalid' : '' }}" name="media_url_link" id="media_url_link" required>{{ old('media_url_link') }}</textarea>
                @if($errors->has('media_url_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('media_url_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inTheMedium.fields.media_url_link_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date">{{ trans('cruds.inTheMedium.fields.date') }}</label>
                <input class="form-control {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date', '') }}">
                @if($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inTheMedium.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="image">{{ trans('cruds.inTheMedium.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.inTheMedium.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.imageDropzone = {
    url: '{{ route('admin.in-the-media.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image"]').remove()
      $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($inTheMedium) && $inTheMedium->image)
      var file = {!! json_encode($inTheMedium->image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection