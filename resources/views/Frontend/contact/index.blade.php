@extends('Frontend.public.app')

@section('main-content')



<!-- Start Page Title Area -->
<section class="page-title-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>تماس با ما</h2>
            </div>
        </div>
    </div>

    @include('Frontend.Partials._animate')
</section>
<!-- End Page Title Area -->

<!-- Start Contact Info Area -->
<section class="contact-info-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="icofont-email"></i>
                    </div>
                    <h3>ایمیل اینجا</h3>
                    <p><a href="#">admin@php-code.com</a></p>
                    <p><a href="#">info@php-code.com</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="icofont-google-map"></i>
                    </div>
                    <h3>کانال های ارتباطی</h3>
                    <p><a href="#">کانال کتابخوانی</a></p>
                    <p><a href="#">کانال من بچه شیعه هستم</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="icofont-phone"></i>
                    </div>
                    <h3>اینجا تماس بگیرید</h3>
                    <p><a href="#">0918-8603016</a></p>
                    <p><a href="#">0918-8603016</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Area -->

<!-- Map -->
<div id="map">


</div>

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>با ما در تماس باشید</h2>
            <div class="bar"></div>
            <p> ما خوشحال خواهیم شد که به شما کمک کنیم!</p>
        </div>

        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <img src="{{ asset('Frontend/img/marketing.png') }}" alt="image">
            </div>
            <div class="col-lg-6 col-md-12">
                @include('includes.messages')
                <form id="#" method="post" action="contact-us">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" placeholder="نام">
                             
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name"  placeholder="نام خانوادگی">
                
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email"  placeholder="پست الکترونیک">

                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                                <input type="number" class="form-control" name="phone_number" placeholder="تلفن">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>موضوع</label>

                                <div class="select-box">
                                    <select class="form-control" name="subject">
                                        <option value="1">مسابقات</option>
                                        <option value="2">کتاب ها</option>
                                        <option value="3">جوایز</option>
                                        <option value="4">همه موارد</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30"
                                 rows="5"  placeholder="پیام شما"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-primary">ارسال پیام</button>
                         
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section("FooterSection")

        <!-- Map API JS FILES -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApghCIIx9MpQhA768sKXxvR_Okg0SF2k4&amp;callback=initMap"></script>
        <!-- Crake JS FILE -->
        <script src="{{ asset('Frontend/js/crake-map.js') }}"></script>
@endsection