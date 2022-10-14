@extends('layouts.public')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4 text-center">
                <h3>Get Involved</h3>
                <p>We have many ways you can get involved in supporting the conservation work at Mount Kenya Wildlife
                    Conservancy.
                </p>
            </div>
            <div class="col-md-12 text-center">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-donate-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-donate" type="button" role="tab" aria-controls="pills-donate"
                            aria-selected="false">How to
                            Donate</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Become a
                            Member</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Adopt an Animal</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Volunteer</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content pb-4" id="pills-tabContent">
            <div class="tab-pane show active fade form-donate" id="pills-donate" role="tabpanel"
                aria-labelledby="pills-donate-tab">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5 bg-sec-color text-white p-4">
                            <h4>Donate via Cheque/Bank Transfer</h4>
                            <p class="mt-5">
                                <b>CHEQUE</b><br>
                                Mount Kenya Wildlife Conservancy<br>
                                P.O Box 288–10400,<br>
                                Nanyuki, Kenya
                            </p>
                            <p class="mt-5"><b>BANK TRANSFER</b><br>
                                <b>Account Name:</b> Mount Kenya Wildlife Conservancy<br>
                                <b> Bank: </b>Barclays Bank<br>
                                <b>Swift Code: </b>BARCKENX<br>
                                <b>Bank Code:</b> 03; Branch Code: 190<br>
                                <b>Account No:</b> 0227651199<br>
                            </p>
                            <p class="mt-5"><b>MPESA</b><br>
                                <b>Till Number:</b> 837749
                            </p>
                        </div>
                        <div class="col-md-7">
                            <div class="p-3">
                                <h4 class="text-capitalize">Donate via Credit or Debit card transfer</h4>
                                <div class="cards-logos">
                                    <ul>
                                        <li><img src="{{ asset('img/visa.svg') }}" height="25px" alt=""></li>
                                        <li><img src="{{ asset('img/mastercard.svg') }}" height="25px" alt=""></li>
                                    </ul>
                                </div>
                                <form class="donate-form" id="donateForm">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p id="alert"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">First Name</label>
                                                <input type="text" class="form-control" id="firstName" name="firstName"
                                                    placeholder="John">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Last Name</label>
                                                <input type="text" class="form-control" id="lastName" name="lastName"
                                                    placeholder="Doe">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="johndoe@mail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" class="form-control" id="phoneNumber"
                                                    name="phoneNumber" placeholder="+233 614 831 293" min="10"
                                                    max="13">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="amount">Country</label>
                                                <input type="text" class="form-control" id="country" name="country"
                                                    placeholder="North America">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="amount">Amount</label>
                                                <input type="number" class="form-control" id="amount" name="amount"
                                                    placeholder="4000" min="1">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="cardNumber">Card Number</label>
                                                <input type="number" class="form-control" id="cardNumber"
                                                    name="cardNumber" placeholder="#### #### #### ####" minlength="16">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="expirationMonth">Expiration Month</label>
                                                <input type="number" class="form-control" id="expirationMonth"
                                                    name="expirationMonth" placeholder="MM" minlength="2"
                                                    maxlength="2">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="expirationYear">Expiration Year</label>
                                                <input type="number" class="form-control" id="expirationYear"
                                                    name="expirationYear" placeholder="YYYY" minlength="4"
                                                    maxlength="4">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary text-uppercase btn-lg"
                                                    id="donateBtn">Donate
                                                    now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-12 bg-color text-white p-4">
                        <h4>Become a Member</h4>
                        <p>All the animals in our care benefit from your adoption, and the fee helps pay for their care,
                            veterinary
                            expenses, nutritional needs, and wilderness adaptation training. Becoming a member also means we
                            will
                            honor you on our colorful wall of tiles at the Animal Orphanage. Simply become a friend of Mount
                            Kenya
                            Wildlife Conservancy to get your tile. We have different categories of membership: </p>
                        <ul>
                            <li class="mb-4"><b>Green Friend - $150</b><br>
                                You will be issued a certificate and a green tile bearing your name.
                            </li>
                            <li class="mb-4"><b>Golden Friend - $500</b><br>
                                You will be issued a certificate, the Conservancy's prestigious embroidered badge and a gold
                                title
                                bearing your name.
                            </li>
                            <li class="mb-4"><b>Platinum Friend</b><br>
                                You will be issued a certificate, the Conservancy's prestigious embroidered badge and a
                                platinum
                                tile
                                bearing your name.
                            </li>
                            <li class="mb-4"><b>Wildlife Guardian – $10,000</b><br>
                                You will be issued a certificate, the Conservancy's prestigious embroidered badge and an
                                ivory title
                                bearing your family or corporate name.
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-12 bg-sec-color text-white p-4">
                        <h4>Adopt an Animal</h4>
                        <p>All the animals in our care benefit from your adoption, and the fee helps pay for their care,
                            veterinary
                            expenses, nutritional needs, and wilderness adaptation training.
                        </p>
                        <p><b>With $100</b>
                        <ul>
                            <li>Adopt any orphaned animals for one year. </li>
                            <li>Receive an adoption certificate with the animal's photo.</li>
                        </ul>
                        </p>
                        <p><b>With $200</b>
                        <ul>
                            <li>Adopt any orphaned animals for one year.</li>
                            <li>Receive an adoption certificate with the animal's photo.</li>
                            <li>Receive periodic updates on your adopted animal's welfare.</li>

                        </ul>
                        </p>
                        <p>
                            <b>With $500</b>
                        <ul>
                            <li>Become a lifelong guardian of your chosen animal.
                            </li>
                            <li>You will give the animal a name of your choice.
                            </li>
                            <li>Receive a "Guardian Angel' certificate.</li>
                            <li>Receive periodic updates on your adopted animal's welfare.</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">
                    <div class="col-md-12 p-4">
                        <h4>Volunteer</h4>
                        <p>As Mount Kenya Wildlife Conservancy strives to prevent the extinction of wildlife species, its
                            long-term
                            goals must complement environmental conservation by instilling knowledge to young "budding
                            conservationists".
                        </p>
                        <p>The Conservancy allows interns to work alongside our experienced keepers at the Animal Orphanage
                            or out
                            in the field. Many of our volunteer interns move on to jobs in related fields after graduation,
                            and most
                            remain our life-long supporters. For more information, reach out to us
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    {{-- disable right click on browser or view page source --}}
    <script>
        // document.addEventListener('contextmenu', event => event.preventDefault());
        // document.onkeydown = function(e) {
        //     if (e.ctrlKey &&
        //         (e.keyCode === 67 ||
        //             e.keyCode === 86 ||
        //             e.keyCode === 85 ||
        //             e.keyCode === 117)) {
        //         alert('not allowed');
        //         return false;
        //     } else {
        //         return true;
        //     }
        // };

        var form = document.getElementById('donateForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // check if csrf token is set
            if (typeof window.Laravel !== 'undefined') {
                data.append('_token', window.Laravel.csrfToken);
            }

            var data = new FormData(form);
            var alert = document.getElementById('alert');
            var currentYear = new Date().getFullYear();

            // validate form
            var firstName = $("#firstName").val();
            var lastName = $('#lastName').val();
            var email = $('#email').val();
            var phoneNumber = $('#phoneNumber').val();
            var amount = $('#amount').val();
            var country = $('#country').val();
            var cardNumber = $('#cardNumber').val();
            var expirationMonth = $('#expirationMonth').val();
            var expirationYear = $('#expirationYear').val();

            if (firstName == '' || lastName == '' || email == '' || phoneNumber == '' || amount == '' || country ==
                '' || cardNumber == '' || expirationMonth == '' || expirationYear == '') {
                alert.innerHTML =
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">All fields are required to complete the transaction. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                return false;
            } else if (amount < 1) {
                alert.innerHTML =
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">Minimum amount to donate is $1. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                return false;
            } else if (cardNumber.length < 16) {
                alert.innerHTML =
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">Card number is invalid. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                return false;
            } else if (expirationMonth < 1 || expirationMonth > 12) {
                alert.innerHTML =
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">Expiration month is invalid. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                return false;
            } else if (expirationYear < currentYear || expirationYear > 2040) {
                alert.innerHTML =
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">Expiration year is invalid. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                return false;
            } else {
                alert.innerHTML = '';
            }

            // clean up data before sending to server
            data.append('firstName', firstName);
            data.append('lastName', lastName);
            data.append('email', email);
            data.append('phoneNumber', phoneNumber);
            data.append('amount', amount);
            data.append('country', country);
            data.append('cardNumber', cardNumber);
            data.append('expirationMonth', expirationMonth);
            data.append('expirationYear', expirationYear);

            // send data to server
            $.ajax({
                url: "https://cybersource-sandbox-node-client.onrender.com/api/pay/card",
                type: "POST",
                data: data,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#donateBtn').html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
                    );
                },
                success: function(response) {
                    if (response.status == 'success') {
                        alert.innerHTML =
                            '<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                            response.message +
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        form.reset();
                    } else {
                        alert.innerHTML =
                            '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                            response.text +
                            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    }
                },
                error: function(response) {
                    alert.innerHTML =
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">Something went wrong. Please try again later. You can refresh the browser and try again. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }
                // remove the spinning loader after getting response from server
            }).always(function() {
                $('#donateBtn').html('Donate Now');
            });

        });
    </script>
@endsection
