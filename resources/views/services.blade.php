@extends('layouts.admin')

@section('content')
<section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Service Page Content Start ==-->
    <section id="service-page-wrapper" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-1"></div>
                        <div class="service-item-content">
                            <h3>RENTAL CAR</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicingedsedsis elited. Necessitatibus aliquid, architecto ullam esdefugiat quasi! Doloribus eaque quam soluta quae porro reprehenderit edsconsequuntur hic ducimus consequatur, dicta officia excepturi quos, quis voluptatum optio deserunt sit. Totam ab dolorum at, labore quisquamn earum, magni reiciendis officiis dolores nemo nostrum perspiciatis!</p>
                        </div>
                    </div>
                    <!-- Single Services End -->

                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-2 d-lg-none d-md-block"></div>
                        <div class="service-item-content">
                            <h3>LIFE INSURANCE</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicingedsedsis elited. Necessitatibus aliquid, architecto ullam esdefugiat quasi! Doloribus eaque quam soluta quae porro reprehenderit edsconsequuntur hic ducimus consequatur, dicta officia excepturi quos, quis voluptatum optio deserunt sit. Totam ab dolorum at, labore quisquamn earum, magni reiciendis officiis dolores nemo nostrum perspiciatis!</p>
                        </div>
                        <div class="service-item-thumb ser-thumb-bg-2 d-none d-lg-block d-md-none"></div>
                    </div>
                    <!-- Single Services End -->

                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-3"></div>
                        <div class="service-item-content">
                            <h3>TAXI SERVICE</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicingedsedsis elited. Necessitatibus aliquid, architecto ullam esdefugiat quasi! Doloribus eaque quam soluta quae porro reprehenderit edsconsequuntur hic ducimus consequatur, dicta officia excepturi quos, quis voluptatum optio deserunt sit. Totam ab dolorum at, labore quisquamn earum, magni reiciendis officiis dolores nemo nostrum perspiciatis!</p>
                        </div>
                    </div>
                    <!-- Single Services End -->

                    <!-- Single Services Start -->
                    <div class="single-service-item">
                        <div class="service-item-thumb ser-thumb-bg-4 d-lg-none d-md-block"></div>
                        <div class="service-item-content">
                            <h3>CALL DRIVER</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicingedsedsis elited. Necessitatibus aliquid, architecto ullam esdefugiat quasi! Doloribus eaque quam soluta quae porro reprehenderit edsconsequuntur hic ducimus consequatur, dicta officia excepturi quos, quis voluptatum optio deserunt sit. Totam ab dolorum at, labore quisquamn earum, magni reiciendis officiis dolores nemo nostrum perspiciatis!</p>
                        </div>
                        <div class="service-item-thumb ser-thumb-bg-2 d-none d-lg-block d-md-none"></div>
                    </div>
                    <!-- Single Services End -->
                </div>
            </div>
        </div>
    </section>
    <!--== Service Page Content End ==-->

    <!--== Partner Area Start ==-->
    
    <!--== Partner Area End ==-->

    <!--== Testimonials Area Start ==-->
    <section id="testimonial-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Testimonials</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12 m-auto">
                    <div class="testimonial-content">
                        <!--== Single Testimoial Start ==-->
                        <div class="single-testimonial">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis totam obcaecati impedit, at autem repellat vel magni architecto veritatis sed.</p>
                            <h3>Vongchong Smith</h3>
                            <div class="client-logo">
                                <img src="{{ asset('assets/img/client/client-pic-1.jpg') }}" alt="JSOFT">
                            </div>
                        </div>
                        <!--== Single Testimoial End ==-->

                        <!--== Single Testimoial Start ==-->
                        <div class="single-testimonial">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis totam obcaecati impedit, at autem repellat vel magni architecto veritatis sed.</p>
                            <h3>Amader Tuni</h3>
                            <div class="client-logo">
                                <img src="{{ asset('assets/img/client/client-pic-3.jpg') }}" alt="JSOFT">
                            </div>
                        </div>
                        <!--== Single Testimoial End ==-->

                        <!--== Single Testimoial Start ==-->
                        <div class="single-testimonial">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis totam obcaecati impedit, at autem repellat vel magni architecto veritatis sed.</p>
                            <h3>Atex Tuntuni Smith</h3>
                            <div class="client-logo">
                                <img src="{{ asset('assets/img/client/client-pic-2.jpg') }}" alt="JSOFT">
                            </div>
                        </div>
                        <!--== Single Testimoial End ==-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Testimonials Area End ==-->
    @endsection