@extends('layouts.main')

@section('content')
    <!-- Uni Banner Area Start -->
    <section class="uni-banner"> 
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Kegiatan Kami</h1>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li>Kegiatan</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- uni Banner Area End -->

    <!-- Events area start -->
    <section class="events pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="events-card">
                        <img src="{{asset('assets/images/events/e1.jpg')}}" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li>Conference</li>
                                <li>Oct 12, 2022</li>
                            </ul>
                            <h4><a href="event-details.html">Annual Conference 2022</a></h4>
                            <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At City Center, 27 Division Street, USA</a></p>
                            <a class="read-more-btn" href="event-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="events-card">
                        <img src="{{asset('assets/images/events/e2.jpg')}}" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li>Conference</li>
                                <li>Oct 13, 2022</li>
                            </ul>
                            <h4><a href="event-details.html">Negotiation In Government</a></h4>
                            <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At City Center, 27 Division Street, USA</a></p>
                            <a class="read-more-btn" href="event-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="events-card">
                        <img src="{{asset('assets/images/events/e3.jpg')}}" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li>Conference</li>
                                <li>Oct 14, 2022</li>
                            </ul>
                            <h4><a href="event-details.html">Annual Health Conference</a></h4>
                            <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At City Center, 27 Division Street, USA</a></p>
                            <a class="read-more-btn" href="event-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="events-card">
                        <img src="{{asset('assets/images/events/e4.jpg')}}" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li>Conference</li>
                                <li>Oct 15, 2022</li>
                            </ul>
                            <h4><a href="event-details.html">Commercial Governance</a></h4>
                            <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At City Center, 27 Division Street, USA</a></p>
                            <a class="read-more-btn" href="event-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="events-card">
                        <img src="{{asset('assets/images/events/e5.jpg')}}" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li>Conference</li>
                                <li>Oct 16, 2022</li>
                            </ul>
                            <h4><a href="event-details.html">Annual Fire Conference</a></h4>
                            <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At City Center, 27 Division Street, USA</a></p>
                            <a class="read-more-btn" href="event-details.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="events-card">
                        <img src="{{asset('assets/images/events/e6.jpg')}}" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li>Conference</li>
                                <li>Oct 17, 2022</li>
                            </ul>
                            <h4><a href="event-details.html">Commercial Business Plan</a></h4>
                            <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At City Center, 27 Division Street, USA</a></p>
                            <a class="read-more-btn" href="event-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paginations mt-30">
                <ul>
                    <li><a class="active" href="events.html">1</a></li>
                    <li><a href="events.html">2</a></li>
                    <li><a href="events.html">3</a></li>
                    <li><a href="events.html"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Events area end -->
@endsection