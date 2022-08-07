@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h4 class="mb-2 mt-4 title green">
                Our Purpose Statement
            </h4>
        </div>
    </div>
    <div class="row g-0 text-center mission-vision mt-3">
        <div class="col-lg-5 mb-4">
            <h5 class="mb-3 text-bold">Mission</h5>
            <p>To prevent extinction of wildlife species</p>
        </div>
        <div class="col-lg-7 mb-4">
            <h5 class="mb-3 text-bold">Vision</h5>
            <p>
                To conserve wildlife species in Kenya with a keen
                focus on the critically endangered Mountain Bongo by
                maintaining sustainable captive breeding herds for
                reintroduction into the wild, promoting species
                research and providing education opportunities for
                future generations on the value of conserving
                wildlife and their habitats
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h4 class="mb-3 mt-4 title green">
                Our Objectives
            </h4>
        </div>
    </div>
    <div class="news-section">
        <div class="row ">
            <div class="col-lg-4">
                <main>
                    <div class='normal '>
                        <div class='module'>
                            <div class='thumbnail'>
                                <img src="{{ asset('img/images01.png')}}">
                            </div>
                            <div class='content'>
                                <h1 class='title'>Mountain Bongo</h1>
                                <div class="description">
                                    To be the centre of excellence for breeding of
                                    the critically endangered Mountain Bongo (as per
                                    IUCN). Breed rare and endangered species of
                                    wildlife to restore wild populations with focus
                                    on the Mountain Bongo. Preventing extinction by
                                    breeding endangered species for release back to
                                    their ancestral homes in the wild. Our Bongo
                                    breeding programme continues with great success.
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div class="col-lg-4">
                <main>
                    <div class='normal '>
                        <div class='module'>
                            <div class='thumbnail'>
                                <img src="{{ asset('img/animal.jpeg')}}">
                            </div>
                            <div class='content'>
                                <h1 class='title'>Animal Orphanage</h1>
                                <div class="description">
                                    To care for animals with need at the Animal
                                    Orphanage, aiming at releasing them to the wild
                                    wherever possible. At the heart of MKWC is the
                                    Animal Orphanage, a facility that cares for the
                                    young, orphaned, abused, or injured animals that
                                    need care. This is done with view to putting
                                    them back in the wild.
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div class="col-lg-4">
                <main>
                    <div class='normal '>
                        <div class='module'>
                            <div class='thumbnail'>
                                <img src="{{ asset('img/education.jpeg')}}">
                            </div>
                            <div class='content'>
                                <h1 class='title'>Conservation Education</h1>
                                <div class="description">
                                    To provide conservation education to schools and
                                    organized groups. As MKWC stives to prevent
                                    extinction of wildlife species, its long-term
                                    goals must complement those of environmental
                                    conservation by instilling knowledge to the
                                    young budding conservationists and neighbouring
                                    communities.
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div class="col-lg-4">
                <main>
                    <div class='normal '>
                        <div class='module'>
                            <div class='thumbnail'>
                                <img src="{{ asset('img/conduct.jpeg')}}">
                            </div>
                            <div class='content'>
                                <h1 class='title'>Research</h1>
                                <div class="description">
                                    Conduct conservation related research. The
                                    research programme complements the other
                                    objectives by offering better understanding of
                                    our ecological systems and the most effective
                                    approaches to conservation.
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div class="col-lg-4">
                <main>
                    <div class='normal '>
                        <div class='module'>
                            <div class='thumbnail'>
                                <img src="{{ asset('img/care-small.jpeg')}}">
                            </div>
                            <div class='content'>
                                <h1 class='title'>Care for the small</h1>
                                <div class="description">
                                    Care for the small, free ranging wildlife
                                    population. There is a population of about 1,200
                                    animals compromising 26 different species
                                    ranging freely within the Conservancy. These
                                    serve our education program and a species gene
                                    pool.
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h4 class="mb-4 mt-2 title green">
                Our History/Legacy
            </h4>
        </div>
        <div class="col-md-12 mb-3">
            <p>
                <span class="green title">
                    Mount Kenya Wildlife Conservancy (MKWC)
                </span>
                is a non-profit trust dedicated to preserving the
                environment and the wildlife within. The Conservancy
                is located in Nanyuki, at the foot of the scenic
                Mount Kenya forest ecosystem, a UN World Heritage
                Site, and an important and rich biodiverse area. It
                is home to 28 different animal species, a population
                of roughly 1,200 different animals. The
                Conservancy&#39;s three main programmes include a
                breeding and rewilding project for the critically
                endangered Mountain Bongo antelope, an animal
                orphanage, and a conservation education programme.
            </p>
        </div>
        <div class="our-story col-md-12 mb-5">
            <ul>
                <li style="--accent-color:#546512">
                    <div class="date">1964</div>
                    <div class="descr">
                        <p>
                            Two young Americans, film actor William
                            (Bill) Holden and TV personality Don
                            Hunt, met in Kenya beginning a lifelong
                            friendship. The following year in 1965,
                            Bill and Don joined forces with Julian
                            Mckeand, a game warden, and Iris Holden,
                            a German born enthusiast of Africa and
                            art. As a group they followed a shared
                            passion to protect and conserve some of
                            Africa’s most beautiful wildlife.
                        </p>
                    </div>
                </li>
                <li style="--accent-color:#546512">
                    <div class="date">1965 - 1967</div>
                    <div class="descr">
                        <p>
                            The group of four found a pristine
                            1,216-acre farm at the foothills of
                            Mount Kenya that they bought off Jim and
                            Betty- Anne Nicholson, an elderly couple
                            looking to retire. It is here that Mt
                            Kenya Game Ranch was founded.
                        </p>
                    </div>
                </li>
                <li style="--accent-color:#546512">
                    <div class="date">Late 1960s</div>
                    <div class="descr">
                        <p>
                            As illegal poaching increased, so
                            followed the growing number of
                            motherless orphaned animals. The Mount
                            Kenya Game Range established a permanent
                            home for these animals, the Mount Kenya
                            Animal Orphanage.
                        </p>
                    </div>
                </li>
                <li style="--accent-color:#546512">
                    <div class="date">1970s</div>
                    <div class="descr">
                        <p>
                            In partnership with the Kenya Wildlife
                            Services and scientists from the US, the
                            Mount Kenya Game Ranch began to assist
                            in capturing wildlife for restocking
                            programmes ensuring the survival of
                            species despite illegal poaching. One of
                            these species was the Mountain Bongo.
                            The team planned and organized the
                            capture of a small group of Bongos which
                            were sent to zoos in America to ensure
                            the survival of the species in the event
                            it were to go extinct on Mount Kenya.
                        </p>
                    </div>
                </li>
                <li style="--accent-color:#546512">
                    <div class="date">1981</div>
                    <div class="descr">
                        <p>
                            With the sudden and tragic death of Bill
                            Holden, Iris and Don work hard to create
                            a unique and meaningful memorial.
                            Following Bill’s desire to empower young
                            Kenyans through education in
                            conservation, The William Holden
                            Wildlife Education Centre is
                            established.
                        </p>
                    </div>
                </li>
                <li style="--accent-color:#546512">
                    <div class="date">1982</div>
                    <div class="descr">
                        <p>
                            The Education Centre is built with
                            support from Actress Stefanie Powers and
                            people who valued Bill’s work. The
                            Education Centre hosts over 17,000 local
                            school children each year. With funding
                            from the United Nations Foundation
                            through the Mt. Kenya COMPACT
                            Initiative, and supported by the GEF
                            Small Grants Programme, the William
                            Holden Wildlife Foundation and Education
                            Centre developed and implemented a
                            comprehensive Bongo conservation and
                            awareness campaign focused on the
                            protection of the Mountain Bongo and its
                            habitat. The outreach program also
                            educates the communities on the
                            importance of Mount Kenya to
                            biodiversity, tourism, employment, water
                            availability, and as a World Heritage
                            Site.
                        </p>
                    </div>
                </li>
                <li style="--accent-color:#546512">
                    <div class="date">2004</div>
                    <div class="descr">
                        <p>
                            The Mount Kenya Wildlife Conservancy is
                            formed as a Kenyan non-profit trust,
                            with three pillars namely: The Animal
                            Orphanage, the Mountain Bongo breeding
                            and rewilding programme, and the
                            Conservation Education programme.
                        </p>
                    </div>
                </li>
                <li style="--accent-color:#546512">
                    <div class="date">2013</div>
                    <div class="descr">
                        <p>
                            The Mount Kenya Wildlife Conservancy is
                            acquired by our patron, Mr. Humphrey
                            Kariuki, who has had a lifelong passion
                            for wildlife and has a long history of
                            supporting conservation efforts in
                            Kenya. As the principal benefactor of
                            the Mount Kenya Wildlife Conservancy, he
                            is investing in the protection and
                            preservation of Africa’s diverse
                            wildlife.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection