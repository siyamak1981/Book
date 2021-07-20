
@extends('Frontend.public.app')
@section('main-content')


<section class="page-title-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>فراموشی رمز عبور</h2>
                    </div>
                </div>
            </div>
@include('Frontend.Partials._animate')
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
                    <h3>فراموشی رمز عبور</h3>
            
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>لطفا ایمیل خود را وارد نمایید</p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="ایمیل">
                                    @error('email')
                                <span class="invalid- text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">هم اکنون وارد شوید!</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection