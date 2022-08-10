@extends('layouts.public')
@section('styles')
    <style>
        .page-link {
            padding-top: 10px !important;
        }

        .news_section .card {
            border-radius: 3px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;
            border: none;
        }

        .news-image img {
            border-radius: 3px 3px 0 0;
            height: 300px;
            object-fit: cover;
            width: 100%;
        }

        .quote-image img {
            border-radius: 10px;
            height: 400px;
            object-fit: contain;
            width: 100%;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
        }

        a {
            text-decoration: none;
        }

        .news-category {
            color: #8e3113;
        }

        .news-info {
            padding: 18px 20px 20px 20px;
            border-radius: 3px;
            height: 130px;
        }

        .news-title a {
            font-size: 18px;
            color: #000;
            line-height: 20px;
        }

        @media only screen and (max-width: 768px) {
            .news-image img {
                height: auto;
            }
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
                    <div class="row mb-5">
                        @forelse ($quotes as $quote)
                            <div class="col-md-6 mb-4">
                                <div class="quote-image">
                                    @if ($quote->image)
                                        <img src="{{ $quote->image->getUrl() }}">
                                    @endif
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12 text-center">
                                <h4 class="text-danger">No available Quotes!</h4>
                            </div>
                        @endforelse
                    </div>
                </div>
                @include('partials.newsroom-sidebar')
            </div>
        </div>
    </div>
@endsection
