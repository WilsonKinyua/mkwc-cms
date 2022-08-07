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
                    <div class="row newsroom-category mt-5">
                        <div class="col-md-2">
                            <a href="" class="active">
                                In the Media
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="">
                                MKWC In the news
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="">
                                Quotes
                            </a>
                        </div>
                        <div class="col-md-4">
                            <form>
                                <div class="row g-0">
                                    <div class="col-md-9">
                                        <input type="text" placeholder="Search">
                                    </div>
                                    <div class="col-md-3">
                                        <button class="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row g-0 newslist">
                        @foreach ($inTheMedia as $media)
                            <div class="col-md-12">
                                <h3>Article</h3>
                                <a target="_blank" href="{{ $media->media_url_link ?? '' }}">
                                    {{ $media->title ?? 'No title' }}
                                </a>
                                <h3>MARCH 10 2022</h3>
                            </div>
                        @endforeach
                        <div class="col-md-12">
                            {{ $inTheMedia->links() }}
                        </div>
                    </div>
                </div>
                <div class="col-md-4 newslist-right">
                    <h2 class="text-fade">Media Resources</h2>
                    <hr>
                    <ul>
                        <li>
                            <a href=""><i class="fa fa-angle-right"></i> MKWC 2019 Annual Report <i
                                    class="fas fa-download"></i></a>
                        </li>
                    </ul>
                    <h2 class="text-fade">Media Inquiries</h2>
                    <hr>
                    <div class="media-enquiries">
                        <h6>General Media Inquiries</h6>
                        <a href="mailto:">media@mountkenyawildlifeconservancy.org</a>
                        <p>John Doe</p>
                        <p>Media Specialist <br><a href="mailto:">johndoe@mountkenyawildlifeconservancy.org</a>
                        </p>
                    </div>
                    <div class="subscribe-form text-white">
                        <div class="bg-fade">
                            <div class="card">
                                <h4>Sign up for our Newsletter</h4>
                                <form action="#">
                                    <div class="mb-2">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                    <div class="mb-2">
                                        <input type="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <button class="btn-subscribe" type="submit">Sign Up Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
