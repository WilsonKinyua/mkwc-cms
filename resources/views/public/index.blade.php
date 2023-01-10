@extends('layouts.public')

@section('content')
    <div class="slider-homepage">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
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
                            <i>
                                Restoring the critically endangered Mountain Bongo <br> through our breeding and rewilding
                                program
                            </i>
                        </p>
                        <p>
                            By successfully breeding and increasing the Mountain <br> Bongo population, we aim to both
                            release
                            these wonderful <br> animals to their natural home and raise awareness of the need <br> for
                            better
                            stewardship to protect other wildlife from <br> reaching such a critical state.
                        </p>
                        <a href="breeding-rewilding" class="btn-slider">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/new-slider-1.png" class="d-block w-100" alt="slider">
                    <div class="container carousel-caption d-none d-md-block">
                        <h3>Animal Orphanage</h3>
                        <p>
                            <i>
                                Protecting and caring for orphaned animals <br> and ensuring our wildlife and habitats never
                                <br>
                                again reach critically endangered states
                            </i>
                        </p>
                        <p>
                            We provide the care necessary for distressed animals <br> to live fully and enjoy a second
                            chance at
                            home in the wild <br> whilst raising awareness of the need for stewardship to avoid <br> further
                            endangering Africa’s wildlife and habitats.
                        </p>
                        <a href="animal-orphanage" class="btn-slider">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/new-slider-3.png" class="d-block w-100" alt="slider">
                    <div class="container carousel-caption d-none d-md-block">
                        <h3>Community Engagement, <br> Education and Research</h3>
                        <p>
                            <i>
                                Inspiring and empowering young people to take <br> up the cause of conservation through
                                conservation education
                            </i>
                        </p>
                        <p>
                            We are committed to providing education and inspiration to <br> the young people of our
                            community so
                            that they understand <br> the importance of preserving and protecting the wild <br> world around
                            us.
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
                            <i>
                                Restoring the critically endangered Mountain Bongo through our breeding and rewilding
                                program
                            </i>
                        </p>
                        <p>
                            By successfully breeding and increasing the Mountain Bongo population, we aim to both release
                            these wonderful animals to their natural home and raise awareness of the need for better
                            stewardship to protect other wildlife from reaching such a critical state.
                        </p>
                        <a href="breeding-rewilding" class="btn-slider">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/3.jpeg" class="d-block w-100" alt="slider">
                    <div class="container carousel-caption-small-device">
                        <h6>Animal Orphanage</h6>
                        <p>
                            <i>
                                Protecting and caring for orphaned animals and ensuring our wildlife and habitats never
                                again reach critically endangered states
                            </i>
                        </p>
                        <p>
                            We provide the care necessary for distressed animals to live fully and enjoy a second chance at
                            home in the wild whilst raising awareness of the need for stewardship to avoid further
                            endangering Africa’s wildlife and habitats.
                        </p>
                        <a href="animal-orphanage" class="btn-slider">Read More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/education.jpg" class="d-block w-100" alt="slider">
                    <div class="container carousel-caption-small-device">
                        <h6>Community Engagement, Education and Research</h6>
                        <p>
                            <i>
                                Inspiring and empowering young people to take up the cause of conservation through
                                conservation education
                            </i>
                        </p>
                        <p>
                            We are committed to providing education and inspiration to the young people of our community so
                            that they understand the importance of preserving and protecting the wild world around us.
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
                        At the Mount Kenya Wildlife Conservancy, we are making our contribution to the work being done by
                        the government and the private sector to restore, preserve and protect the region’s natural habitats
                        and wildlife. Everyday, the wildlife and ecosystems which make Africa so special are put at further
                        risk from human interference.
                    </p>
                    <p>
                        At the heart of our effort is the critically endangered Mountain Bongo whose population in the wild
                        has drastically declined to less than 100. No species should reach such a precarious state. The
                        conservancy has succeeded in breeding and rewilding these critically endangered animals, restoring
                        their habitat, and returning them to their natural home in the wild.
                    </p>
                    <p>
                        At our animal orphanage, everyone can visit and see first-hand the impact this kind of environmental
                        negligence has on many other different wildlife species. It is a live classroom, where animals that
                        have been injured, orphaned or displaced by habitat destruction are brought to be treated and
                        rehabilitated for release back to their natural homes.
                    </p>
                    <p>
                        The work would be rendered useless without our vital community conservation education program. By
                        reaching the young people directly via schools and organizations, and with partners in our
                        communities, we can inspire them to be future stewards of the planet, to protect it and reverse the
                        ills of past generations. Every day we see great hope in them.
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
