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
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-donate-tab" data-bs-toggle="pill" data-bs-target="#pills-donate"
                            type="button" role="tab" aria-controls="pills-donate" aria-selected="false">How to
                            Donate</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content pb-4" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
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
                <div class="tab-pane fade" id="pills-donate" role="tabpanel" aria-labelledby="pills-donate-tab">
                    <div class="col-md-12 bg-info p-4">
                        <h4>How to Donate</h4>
                        <p>
                            <b>CHEQUE</b><br>
                            Mount Kenya Wildlife Conservancy<br>
                            P.O Box 288–10400,<br>
                            Nanyuki, Kenya
                        </p>
                        <p><b>BANK TRANSFER</b><br>
                            <b>Account Name:</b> Mount Kenya Wildlife Conservancy<br>
                            <b> Bank: </b>Barclays Bank<br>
                            <b>Swift Code: </b>BARCKENX<br>
                            <b>Bank Code:</b> 03; Branch Code: 190<br>
                            <b>Account No:</b> 0227651199<br>
                        </p>
                        <p><b>MPESA</b><br>
                            <b>Till Number:</b> 837749
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
