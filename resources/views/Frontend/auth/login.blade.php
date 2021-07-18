



@extends('Frontend.public.app')
@section('main-content')
<section class="page-title-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>ورود</h2>
            </div>
        </div>
    </div>

    <div class="shape1"><img src="{{asset('Frontend/assets/img/shape1.png') }}" alt="img"></div>
    <div class="shape2"><img src="{{asset('Frontend/assets/img/shape2.png') }}" alt="img"></div>
    <div class="shape3"><img src="{{asset('Frontend/assets/img/shape3.png') }}" alt="img"></div>
    <div class="shape6"><img src="{{asset('Frontend/assets/img/shape6.png') }}" alt="img"></div>
    <div class="shape8 rotateme"><img src="{{asset('Frontend/assets/img/shape8.svg') }}" alt="shape"></div>
    <div class="shape9"><img src="{{asset('Frontend/assets/img/shape9.svg') }}" alt="shape"></div>

    <!-- Bubble Animte -->
    <div class="bubble-animate">
        <div class="circle small square1"></div>
        <div class="circle small square2"></div>
        <div class="circle small square3"></div>
        <div class="circle small square4"></div>
        <div class="circle small square5"></div>
        <div class="circle medium square1"></div>
        <div class="circle medium square2"></div>
        <div class="circle medium square3"></div>
        <div class="circle medium square4"></div>
        <div class="circle medium square5"></div>
        <div class="circle large square1"></div>
        <div class="circle large square2"></div>
        <div class="circle large square3"></div>
        <div class="circle large square4"></div>
    </div>
</section>
<!-- End Page Title Area -->

<!-- Start Login Area -->
<section class="login-area ptb-100">
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="login-image">
                    <img src="{{asset('Frontend/img/marketing.png') }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="login-form">
                    <h3>خوش آمدید!</h3>
                    <p>لطفا وارد حساب کاربری خود شوید.</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('password') is-invalid @enderror" name="email" placeholder="ایمیل">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="رمز عبور">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="checkme">مرا به خاطر بسپار!</label>
                                </div>
                            </div>

                            <div class="col-lg-6 text-right">
                            @if (Route::has('password.request'))
                                <p class="forgot-password"><a href="{{ route('password.request') }}">فراموشی رمز عبور؟</a></p>
                            @endif
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">هم اکنون وارد شوید!</button>
                                <br>
                                <span>کاربر جدید هستید؟ <a href="{{ route('register') }}">ثبت نام کن!</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection