@extends('layouts.public')
@section('styles')
    <style>
        .news_description .card {
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;
            border: none;
        }

        .news-image img {
            border-radius: 5px 5px 0 0;
            height: 480px;
            width: 100%;
            object-fit: cover !important;
            object-position: center !important;
        }

        .news-info {
            padding: 10px;
        }

        a {
            text-decoration: none;
            color: #8e3113;
        }
    </style>
@endsection
@section('content')
    <div class="breadcrumb" style="margin-left: 70px; ">
        <div class="mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb-list list-unstyled d-flex">
                        <li class="breadcrumb-item"><a href="/"><i class="fa fa-home "></i> Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('press-release') }}">Prease Release</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row news_description" style="margin: 0px 60px 60px 60px;">
        <div class="col-md-12">
            <div class="card">
                <div class="news-image">
                    @if ($inTheNew->photo)
                        <img src="{{ $inTheNew->photo->getUrl() }}" alt="{{ $inTheNew->title ?? '' }}">
                    @endif
                </div>
                <div class="news-info">
                    <h6 class="news-title">
                        {{ $inTheNew->title ?? '' }}
                    </h6>
                    <h6 class="news-title">
                        <small><i>{!! $inTheNew->caption ?? '' !!}</i></small>
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3" style="padding-left: 10px;">
            <p>
                <strong>{{ $inTheNew->date_location ?? '' }}</strong>
            </p>
        </div>
        <div class="col-md-12 mt-3">
            {!! $inTheNew->description ?? '' !!}
        </div>
    </div>
@endsection
