@extends('layouts.public')
@section('styles')
    <style>
        .page-link {
            padding-top: 10px !important;
        }
    </style>
@endsection

@section('content')
    <div class="newsroom">
        <div class="inner-header">
            <div class="top-header-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Newsroom</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="text-fade">Press Releases and News Coverage</h2>
                    <hr>
                    @include('partials.newsroom-navbar')
                    <div class="row g-0 newslist" style="margin-top: 50px">
                        @foreach ($inTheMedia as $media)
                            <div class="col-md-12">
                                <h3><span class="main-color text-uppercase">{{ $media->media_house }} </span></h3>
                                <a target="_blank" href="{{ $media->media_url_link ?? '' }}">
                                    {{ $media->title ?? 'No title' }}
                                </a>
                                <h3 class="text-uppercase">{{ $media->date ?? '' }}</h3>
                            </div>
                        @endforeach
                        <div class="col-md-12">
                            {{ $inTheMedia->links() }}
                        </div>
                    </div>
                </div>
                @include('partials.newsroom-sidebar')
            </div>
        </div>
    </div>
@endsection
