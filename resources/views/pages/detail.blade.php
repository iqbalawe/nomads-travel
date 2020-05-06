@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Penida</h1>
                        <p>Republic of Indonesia Raya</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="frontend/images/img_details.jpg" class="xzoom" id="xzoom-default"
                                    xoriginal="frontend/images/img_details.jpg" />
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="frontend/images/img_details.jpg">
                                    <img src="frontend/images/img_details.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/images/img_details.jpg" />
                                </a>
                                <a href="frontend/images/img_details.jpg">
                                    <img src="frontend/images/img_details.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/images/img_details.jpg" />
                                </a>
                                <a href="frontend/images/img_details.jpg">
                                    <img src="frontend/images/img_details.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/images/img_details.jpg" />
                                </a>
                                <a href="frontend/images/img_details.jpg">
                                    <img src="frontend/images/img_details.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/images/img_details.jpg" />
                                </a>
                                <a href="frontend/images/img_details.jpg">
                                    <img src="frontend/images/img_details.jpg" class="xzoom-gallery" width="128"
                                        xpreview="frontend/images/img_details.jpg" />
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>
                            Nusa Penida is an island (= nusa) part of the Republic of
                            Indonesia located in the southeast of Bali separated by the
                            Badung Strait. Near this island there are also other smaller
                            islands namely Nusa Ceningan and Nusa Lembongan. The waters of
                            the island of Nusa Penida are famous for their diving areas
                            including Crystal Bay, Manta Point, Batu Meling, Batu Lumbung,
                            Batu Abah, Toyapakeh and Malibu Point.
                        </p>
                        <p>
                            Near this island there are also other smaller islands namely
                            Nusa Ceningan and Nusa Lembongan. The waters of the island of
                            Nusa Penida are famous for their diving areas including
                            Crystal Bay, Manta Point, Batu Meling, Batu Lumbung, Batu
                            Abah.
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="frontend/images/ic_event.png" alt="" class="features-image" />
                                </div>
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Tari Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="frontend/images/ic_bahasa.png" alt="" class="features-image" />
                                </div>
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>Bahasa Indonesia</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="frontend/images/ic_foods.png" alt="" class="features-image" />
                                </div>
                                <div class="description">
                                    <h3>Foods</h3>
                                    <p>Local Foods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="frontend/images/member-1.png" class="member-image mr-1" />
                            <img src="frontend/images/member-2.png" class="member-image mr-1" />
                            <img src="frontend/images/member-3.png" class="member-image mr-1" />
                            <img src="frontend/images/member-4.png" class="member-image mr-1" />
                            <img src="frontend/images/member-5.png" class="member-image mr-1" />
                            <img src="frontend/images/more_member.png" class="member-image mr-1" />
                        </div>
                        <hr />
                        <h2>Trip Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">18 June, 2020</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">4D 3N</td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">Open Trip</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">$80,00 / Person</td>
                            </tr>
                        </table>
                    </div>

                    <div class="join-container">
                        <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function () {
    $(".xzoom, .xzoom-gallery").xzoom({
      zoomWidth: 500,
      title: false,
      tint: "#333",
      Xoffset: 15,
    });
  });
</script>
@endpush