@extends('layouts.public')
@section('content')
    <div class="contact-top-row">
        <div class="container my-5">
            <div class="row text-white">
                <div class="col-md-6 mb-3">
                    <div class="bg-brown">
                        <div class="contact-item">
                            <div class="row d-flex align-items-center">
                                <div class="col-2 text-center">
                                    <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                                </div>
                                <div class="col-10">
                                    <div class="contact-content">
                                        <h5>SEND A MESSAGE</h5>
                                        <p>info@mountkenyawildlifeconservancy.org</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="bg-brown">
                        <div class="contact-item">
                            <div class="row d-flex align-items-center">
                                <div class="col-2 text-center">
                                    <span class="contact-icon"><i class="fa fa-mobile"></i></span>
                                </div>
                                <div class="col-10">
                                    <div class="contact-content">
                                        <h5>CALL US</h5>
                                        <p>+254 20 233 0097</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mb-5">
            <div class="row mb-5">
                <div class="col-lg-8 m-auto">
                    <row class="row mb-3">
                        <div class="col-12">
                            <h2 class="mt-3">LEAVE A MESSAGE</h2>
                            <h4 class="styled_font green">Feel Free To Contact Us</h4>
                            <small class="form-text text-muted">All Fields marked with * are required.</small>
                        </div>
                    </row>
                    <div>
                        <form method="POST" action="{{ route('contact.create') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($errors->count() > 0)
                                        <div class="alert alert-danger">
                                            <ul class="list-unstyled">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session('success'))
                                        <div class="row mb-2">
                                            <div class="col-lg-12">
                                                <div class="alert alert-success" role="alert">{{ session('success') }}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Name*"
                                        minlength="3" value="{{ old('name', '') }}" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Email address*" email minlength="4"
                                            value="{{ old('email', '') }}" />
                                        <small class="form-text text-muted">We'll never share your email with anyone
                                            else.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="subject" class="form-control" placeholder="Subject*"
                                    minlength="3" value="{{ old('subject', '') }}" />
                            </div>
                            <div class="form-group mb-4">
                                <textarea name="message" class="form-control" rows="5" placeholder="Enter your message here*">{{ old('message', '') }}</textarea>
                                {{-- <div class="g-recaptcha" data-sitekey="6LcovA8cAAAAAEiQnrvgu-50e6oNbiI3dKu7ap1y"></div> --}}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-info text-white">Send
                                    Message <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 bg-brown text-white">
                    <div class="contact_map">
                        <h2> <i class="fa fa-map-marker-alt"></i> Mount Kenya Wildlife Conservancy </h3>
                    </div>
                    <div class="the_contact_map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4246.438584977351!2d37.126925296998564!3d-0.03648972084220562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1787f640d5a5ab3b%3A0xd96696552e156016!2sHotel%20Fairmont%20Mount%20Kenya%20Safari%20Club!5e0!3m2!1sen!2ske!4v1607513349099!5m2!1sen!2ske"
                            width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="the_contact_more_info">
                        <p class="styled_font">
                            Distance is approximately 201 km from Nairobi-Thika Super Highway (3 h 30 min) From Thika Super
                            Highway join to Nanyuki-Nyeri highway then Proceed approximately 70km to Nanyuki town. On
                            arrival to Nanyuki town turn right where there is golf petrol station and drive 10kms to the
                            hotel.
                        </p>
                        <p class="styled_font">
                            Complimentary parking available
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
