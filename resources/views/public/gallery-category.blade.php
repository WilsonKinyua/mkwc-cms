@extends('layouts.public')

@section('content')
    @if ($galleryCategory->image)
        <div class="inner-header" style="background-image: url('{{ $galleryCategory->image->getUrl() }}');">
    @endif
    <div class="top-header-gallery">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>{{ $galleryCategory->title ?? '' }}</h2>
            </div>
        </div>
    </div>
    </div>
    <div class="container gallery-list">
        <div class="row">
            @if (!empty($gallery->images))
                @foreach ($gallery->images as $key => $media)
                    <div class="col-md-4 col-xs-12">
                        <a href="{{ $media->getUrl() }}" data-lightbox="gallerygallery-set" data-title="Mountain Bongo"
                            data-description="">
                            <img src="{{ $media->getUrl() }}" class="card-img-top" alt="Mountain Bongo">
                        </a>
                    </div>
                @endforeach
            @else
                <div class="col-md-12 col-xs-12 text-center p-4 mt-2 mb-2 text-danger">
                    <h4>No images found on the selected Gallery Category!</h4>
                </div>
            @endif
        </div>
    </div>
@endsection
