@extends('layouts.public')

@section('content')
    <div class="inner-header" style="background-image: url('{{ asset('img/top-header.jpeg') }}');">
        <div class="top-header-gallery">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>Gallery</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container gallery-section">
        <div class="row">
            @foreach ($galCategory as $galleryCategory)
                <div class="col-md-4 col-xs-12">
                    <a href="{{ route('gallery.category', $galleryCategory->slug) }}">
                        <div class="card">
                            @if ($galleryCategory->image)
                                <img src="{{ $galleryCategory->image->getUrl() }}" class="card-img-top"
                                    alt="{{ $galleryCategory->title ?? '' }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $galleryCategory->title ?? '' }}</h5>
                                <a href="{{ route('gallery.category', $galleryCategory->slug) }}"
                                    class="btn btn-outline-primary btn-lg">View Gallery</a>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
