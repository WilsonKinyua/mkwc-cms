@extends('layouts.public')

@section('content')
<div class="slider-homepage">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner large-screens pt-5">
            <div class="carousel-item active">
                <img src="img/new-slider.png" class="d-block w-100" alt="slider">
                <div class="container carousel-caption d-none d-md-block">
                    <h3>Mountain Bongo Breeding <br> & Rewilding Programme</h3>
                    <p>
                        The Mount Kenya Wildlife Conservancy in proud <br> partnership with KWS and KFS has been
                        leading
                        a <br> breeding and rewilding programme over the past 2 <br> decades to bring the
                        Mountain
                        Bongo back
                        <br> into the wild.
                    </p>
                    <a href="breeding-rewilding" class="btn-slider">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/new-slider-1.png" class="d-block w-100" alt="slider">
                <div class="container carousel-caption d-none d-md-block">
                    <h3>Animal Orphanage</h3>
                    <p>
                        The Animal Orphanage at the Mount Kenya Wildlife <br>Conservancy is a unique facility to
                        give
                        orphaned,<br>injured, neglected, abused, or frightened wild <br> animals a second
                        chance.
                        <br><br>
                    </p>
                    <a href="animal-orphanage" class="btn-slider">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/new-slider-3.png" class="d-block w-100" alt="slider">
                <div class="container carousel-caption d-none d-md-block">
                    <h3>Conservation Education</h3>
                    <p>
                        Mount Kenya Wildlife Conservancy has set up community <br> conservation education and
                        empowerment
                        programmes <br> to create awareness on the plight of Mountain Bongo and <br> sustainable
                        natural
                        resource management, motivating our <br> youth and the community to become future
                        conservationists.
                    </p>
                    <a href="conservation-education" class="btn-slider">Read More</a>
                </div>
            </div>
        </div>
        <div class="carousel-inner small-screens">
            <div class="carousel-item active">
                <img src="img/image01.png" class="d-block w-100" alt="slider">
                <div class=" carousel-caption-small-device">
                    <h6>Mountain Bongo Breeding & Rewilding Programme</h6>
                    <p>
                        The Mount Kenya Wildlife Conservancy in proud partnership with KWS and KFS has been
                        leading
                        a breeding and rewilding programme over the past 2 decades to bring the Mountain
                        Bongo back into the wild.
                    </p>
                    <a href="breeding-rewilding" class="btn-slider">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/3.jpeg" class="d-block w-100" alt="slider">
                <div class="container carousel-caption-small-device">
                    <h6>Animal Orphanage</h6>
                    <p>
                        The Animal Orphanage at the Mount Kenya Wildlife Conservancy is a unique facility to
                        give orphaned, injured, neglected, abused, or frightened wild animals a second chance.
                    </p>
                    <a href="animal-orphanage" class="btn-slider">Read More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/education.jpg" class="d-block w-100" alt="slider">
                <div class="container carousel-caption-small-device">
                    <h6>Conservation Education</h6>
                    <p>
                        Mount Kenya Wildlife Conservancy has set up community conservation education and
                        empowerment
                        programmes to create awareness on the plight of Mountain Bongo and sustainable....
                    </p>
                    <a href="conservation-education" class="btn-slider">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="stripe"></div>
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>About Mount Kenya Wildlife Conservancy</h3>
                <p>
                    Mount Kenya Wildlife Conservancy (MKWC) is a not for profit organization dedicated to the
                    Conservation of Wildlife in Kenya. It is nestled at the foot of Mount Kenya forest
                    ecosystem, a
                    world heritage site (by UNESCO) and an important biodiversity area. MKWC acts as a buffer to
                    neighbouring communities from wildlife, preventing conflict between humans and wildlife
                    through
                    crop destruction, poaching, and aggressive wild animals.
                </p>
                <p>
                    Mount Kenya Wildlife Conservancy (MKWC) was founded in 2004 by Don Hunt and Iris Hunt. It is
                    a
                    Kenyan registered nonprofit trust. Its main purpose was to take over the conservation
                    programs
                    run by the Mount Kenya Game Ranch.
                </p>
                <p>
                    Our vision is to conserve wildlife species in Kenya with a keen focus on the critically
                    endangered Mountain Bongo by maintaining sustainable captive breeding herds for
                    reintroduction
                    into the wild & promoting species research.
                </p>
            </div>
            <div class="col-md-6">
                <div class="img-wrapper-right ">
                    <img src="img/about-new.png" alt="About">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 text-center">
    <h5 class="mb-2 title green mt-2">
        Government Partners
    </h5>
    <div class="col-md-12 partner-image">
        <p>
            <a target="_blank" href="http://www.kws.go.ke/" title="Kenya Wildlife Services (KWS)">
                <img src="img/kenya-wildlife.png" alt="" />
            </a>
            <a target="_blank" href="http://www.kenyaforestservice.org/" title="Kenya Forest Services (KFS)">
                <img src="img/forest_services.png" alt="" />
            </a>
            <a target="_blank" href="https://www.tourism.go.ke/"
                title="Republic of Kenya, Ministry of Tourism &amp; Wildlife">
                <img src="img/tourisim.png" alt="" />
            </a>
        </p>
    </div>
    <h5 class="mb-2 title green mt-2">
        Corporate Partners
    </h5>
    <div class="col-md-12 partner-image">
        <p>
            <a href="https://www.dalbitpetroleum.com/" target="_blank" title="Dalbit Petroleum">
                <img src="https://dalbit-petroleum.wezaprosoft.com/images/logo.png" alt="" />
            </a>
            <a href="https://www.januscontinental.com/" target="_blank" title="Janus Continental Group">
                <img src="https://www.januscontinental.com/assets/img/logo3.png?v=299376e6e5" alt="" />
            </a>
        </p>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        (function($) {
            $(document).ready(function() {
                if ($(window).width() < 991) {
                    $('.large-screens').remove();
                }
            })
        })(jQuery);
    </script>
@endsection
