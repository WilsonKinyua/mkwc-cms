@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <h4 class="text-center mb-5 mt-3">The Animal Orphanage </h4>
            <div class="row">
                <div class="col-md-4">
                    <p>Located within the Mount Kenya Wildlife Conservancy, the Animal Orphanage is a unique facility to
                        give
                        orphaned, injured, neglected, abused, or frightened wild animals a second chance. The Orphanage
                        provides
                        shelter and professional care with the aim of releasing these animals back into the wild where they
                        belong.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/1.jpeg') }}" width="100%" alt="">
                </div>
                <div class="col-md-4">
                    <p>
                        We solely sustain the operations of the Animal Orphanage by charging an entrance fee and sales from
                        the gift
                        shop. The entry fees are as follows:
                    <ul class="text-white p-3" style="background-color: #510f13;">
                        {{-- <li> Citizens – Ksh 1,000</li>
                        <li>Residents – Ksh 1,500</li>
                        <li>Non-Residents – Ksh 2,000</li>
                        <li>Children (6-12years) – 50% of the adult rate</li> --}}
                        <li>E.A. Citizens – KES 1,000</li>
                        <li>Residents – KES 2.000</li>
                        <li>Non-Residents – KES 3,000</li>
                        <li>Children (6-12years) – 50% of the adult rate</li>
                    </ul>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/2.jpeg') }}" width="100%" alt="">
                </div>
                <div class="col-md-4">
                    <p>The Animal Orphanage is open daily from 10:00 am to 5:00 pm, where our experienced guides will give
                        you a
                        tour of the facility as you make new animal friends. </p>
                    <p>Other activities within the Conservancy include; Horse Riding, bike riding and Mountain Bongo
                        Tracking. For
                        bookings and inquiries, kindly contact us.

                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/3.jpeg') }}" width="100%" alt="">
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/4.jpeg') }}" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
