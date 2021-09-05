@extends('Front.Master')

@section('title', 'Login')

@section('content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row" >
            <div class="col-12">
                @if(app()->getLocale() == 'ar')
                    <div class="bread-inner"  style="text-align:right;" >
                        <ul class="bread-list">
                            <li class="active">{{ __('home.login') }}<i class="ti-arrow-left"></i></li>
                            <li ><a href="{{route('index')}}">{{ __('home.Acceil') }}</a></li>
                        </ul>
                    </div> 
                @else       
                    <div class="bread-inner"  style="text-align:left;" >
                        <ul class="bread-list">
                            <li class="active">{{ __('home.login') }}<i class="ti-arrow-right"></i></li>
                            <li ><a href="{{route('index')}}">{{ __('home.Acceil') }}</a></li>
                        </ul>
                    </div>   
                @endif 
            </div>
        </div>
    </div>
</div>
<div class="product-area section"  >
    <div class="container">
        <div class="row" >
            <div class="col-2" ></div>
            <div class="col-10">
                <div class="product-info" >
                    <div class="tab-content" id="myTabContent">
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade show active" align="center" role="tabpanel">
                            <div class="tab-single">
                                <div class="row" >
                                    <div class="col-10">
                                        <!-- Start Contact -->
                                        <section id="contact-us" class="contact-us section">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="section-title">
                                                            <h2>{{ __('home.CONNECTEZ-VOUS À VOTRE COMPTE') }}</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="contact-head">

                                                        <div class="row" >
                                                            <div class="col-12">
                                                                <div class="form-main">
                                                                    <form method="POST" action="{{ route('login') }}">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.email adresse') }}<span>*</span></label>
                                                                                    <input id="email" type="email" style="border-radius: 0%;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                                                    @error('email')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.password') }}<span>*</span></label>
                                                                                    <input id="password" style="border-radius: 0%;" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" required autocomplete="current-password">
                                                                                    @error('password')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12">
                                                                                <div class="form-group">
                                                                                    <input class="form-check-input" style="border-radius: 0%;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                                    <label class="form-check-label" for="remember">
                                                                                        {{ __('home.remember') }}
                                                                                    </label>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12">
                                                                                <div class="form-group  row mb-0">
                                                                                    <button type="submit" class="btn">
                                                                                        {{ __('home.login') }}
                                                                                    </button>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                        </section>
                                        <!--/ End Contact -->
                                    </div>
                                    <div class="col-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








@endsection
