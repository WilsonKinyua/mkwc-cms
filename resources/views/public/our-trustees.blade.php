@extends('layouts.public')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
@endsection
@section('content')
    <div class="inner-header our-trustees"
        style="background-image: url('https://dcuedtrust.ie/wp-content/uploads/2017/09/our-trustees.jpg');">
        <div class="top-header-gallery">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>Our Trustees</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="trustees">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-white"><i class="fa fa-play"></i> Our Leadership Team</h1>
                </div>
            </div>
            <div class="row owl-carousel">
                <div class="col trustees-list">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="trustee-wrapper">
                                <img src="{{ asset('img/Nyawira Kariuki.jpg') }}" alt="Nyawira Kariuki ">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="trustee-content">
                                <h3>Nyawira Kariuki </h3>
                                <h5 class="main-color">Chairperson, Mount Kenya Wildlife Conservancy Board</h5>
                                <i class="fa fa-quote-left"></i>
                                <h6>
                                    Nyawira has been chair of the Mount Kenya Wildlife Conservancy's board since 2014. She
                                    oversees the delivery of all the Conservancy's core programs and fundraising
                                    efforts. As a member of the JCG executive team, Nyawira uses her corporate expertise to
                                    help the Conservancy achieve its strategic objectives.
                                </h6>
                                {{-- <a href="" class="btn btn-bio">Discover More <i class="fa fa-arrow-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col trustees-list">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="trustee-wrapper">
                                <img src="https://images.assetsdelivery.com/compings_v2/apoev/apoev1804/apoev180400024.jpg"
                                    alt="Jane McKeand">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="trustee-content">
                                <h3>Jane McKeand</h3>
                                <h5 class="main-color">Trustee, Mount Kenya Wildlife Conservancy Board</h5>
                                <i class="fa fa-quote-left"></i>
                                <h6>
                                    Jane is one of the founding members of Mount Kenya Wildlife Conservancy and has lived
                                    at the Conservancy since 1979. She has been a trustee since 2010.
                                    A keen photographer, and past Chairperson of the Kenya Horticultural Society, Jane also
                                    serves as a Trustee of the Nanyuki Cottage Hospital.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col trustees-list">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="trustee-wrapper">
                                <img src="https://images.assetsdelivery.com/compings_v2/apoev/apoev1804/apoev180400024.jpg"
                                    alt="Florian Schoeller">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="trustee-content">
                                <h3>Florian Schoeller</h3>
                                <h5 class="main-color">Trustee, Mount Kenya Wildlife Conservancy Board</h5>
                                <i class="fa fa-quote-left"></i>
                                <h6>
                                    A dedicated conservationist, Florian has been a trustee since, visiting Kenya and the
                                    Mount Kenya Wildlife Conservancy as often as he can. He is partner and CEO of the
                                    ratings agency Scope Group
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col trustees-list">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="trustee-wrapper">
                                <img src="{{ asset('img/Margaret Mbaka.jpg') }}" alt="Margaret Mbaka">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="trustee-content">
                                <h3>Margaret Mbaka</h3>
                                <h5 class="main-color">Trustee, Mount Kenya Wildlife Conservancy Board</h5>
                                <i class="fa fa-quote-left"></i>
                                <h6>
                                    Margaret is a passionate conservationist and has been on the Board of Trustees since
                                    October 2015. She is chair of JCG, an East African conglomerate and key funder of the
                                    Conservancy, joining initially as an HR consultant in 2000.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col trustees-list">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="trustee-wrapper">
                                <img src="{{ asset('img/Hellen Akell.jpeg') }}" alt="Hellen Akello">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="trustee-content">
                                <h3>Hellen Akello</h3>
                                <h5 class="main-color">Trustee, Mount Kenya Wildlife Conservancy Board</h5>
                                <i class="fa fa-quote-left"></i>
                                <h6>
                                    Hellen joined Mount Kenya Wildlife Conservancy as a trustee in February 2022.
                                    As a member of the JCG Executive Committee, she has over 27 years of experience in
                                    HR, working in a diverse range of sectors including, energy, infrastructure, services
                                    and industry.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col trustees-list">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="trustee-wrapper">
                                <img src="{{ asset('img/Philippe Cauviere_Photo.jpg') }}" alt="Philippe Cauviere">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="trustee-content">
                                <h3>Philippe Cauviere</h3>
                                <h5 class="main-color">Trustee, Mount Kenya Wildlife Conservancy Board</h5>
                                <i class="fa fa-quote-left"></i>
                                <h6>
                                    Philippe is CEO of Mount Kenya Wildlife Conservancy and was instrumental in the
                                    creation of the Mawingu Mountain Bongo Sanctuary. He was nominated as a Trustee of Mount
                                    Kenya Wildlife Conservancy in February
                                    2022. Philippe joined JCG in 2010, leading the purchase of Mount Kenya Wildlife
                                    Conservancy
                                    and Mount Kenya Safari Club, bringing both properties into the JCG family of
                                    businesses.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col trustees-list">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="trustee-wrapper">
                                <img src="{{ asset('img/Timothy Skudi.jpeg') }}" alt="Timothy Skudi">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="trustee-content">
                                <h3>Timothy Skudi</h3>
                                <h5 class="main-color">Trustee, Mount Kenya Wildlife Conservancy Board</h5>
                                <i class="fa fa-quote-left"></i>
                                <h6>
                                    Timothy Skudi is CEO of oil marketer Dalbit Affiliates. He joined the Mount Kenya
                                    Wildlife Conservancy as a trustee in 2022. Dalbit has been one of Mount Kenya Wildlife
                                    Conservancy’s lead benefactors since
                                    2013. The business has also supported the Government of Kenya’s efforts to combat
                                    climate change through forest and landscape restoration.
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col trustees-list">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="trustee-wrapper">
                                <img src="https://images.assetsdelivery.com/compings_v2/apoev/apoev1804/apoev180400024.jpg"
                                    alt="Ron Surratt">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="trustee-content">
                                <h3>Ron Surratt</h3>
                                <h5 class="main-color">Trustee, Mount Kenya Wildlife Conservancy Board – Joined in 2015</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col trustees-list">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="trustee-wrapper">
                                <img src="https://images.assetsdelivery.com/compings_v2/apoev/apoev1804/apoev180400024.jpg"
                                    alt="Oliver Barton">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="trustee-content">
                                <h3>Oliver Barton</h3>
                                <h5 class="main-color">Trustee, Mount Kenya Wildlife Conservancy Board – Joined in 2014
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                center: true,
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
        });
    </script>
@endsection
