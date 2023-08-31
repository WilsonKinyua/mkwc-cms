@extends('layouts.public')
@section('content')
    <div class="newsroom">
        <div class="inner-header">
            <div class="top-header-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Videos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="text-fade">Videos</h2>
                    <hr>
                    @include('partials.newsroom-navbar')
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="card shadow-lg border-none">
                                <div class="card-body">
                                    <video style="width: 100%; height: 100%; object-fit: cover;" controls
                                        src="https://static.ntvkenya.co.ke/uploads/2023/07/Wild-talk-Bongo-2.mp4"></video>
                                    <h6 class="mt-3">
                                        Saving the Mountain Bongo on NTV Wild Talk with Smriti Vidyarthi
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('partials.newsroom-sidebar')
            </div>
        </div>
    </div>
@endsection
