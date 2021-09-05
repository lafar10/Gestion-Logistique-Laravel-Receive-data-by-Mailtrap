@extends('Front.Master')

@section('title', 'Register')

@section('content')


<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(app()->getLocale() == 'ar')
                    <div class="bread-inner"  style="text-align:right;" >
                        <ul class="bread-list">
                            <li class="active">{{ __('home.register') }}<i class="ti-arrow-left"></i></li>
                            <li ><a href="{{route('index')}}">{{ __('home.Acceil') }}</a></li>
                        </ul>
                    </div> 
                @else       
                    <div class="bread-inner"  style="text-align:left;" >
                        <ul class="bread-list">
                            <li class="active">{{ __('home.register') }}<i class="ti-arrow-right"></i></li>
                            <li ><a href="{{route('index')}}">{{ __('home.Acceil') }}</a></li>
                        </ul>
                    </div>   
                @endif 
            </div>
        </div>
    </div>
</div>



<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>{{ __('home.N client') }}</h2>
                </div>
            </div>
        </div>
        <div class="row" @if(app()->getLocale() == 'ar')
                                    style="text-align:right;"
                        @else
                                    style="text-align:left;"
                        @endif >
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">{{ __('home.register ici') }}</a></li>
                        </ul>
                        <!--/ End Tab Nav -->
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Start Contact -->
                                        <section id="contact-us" class="contact-us section">
                                            <div class="container">
                                                    <div class="contact-head">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-12">
                                                                <div class="form-main">
                                                                    <form method="POST" action="{{ route('register') }}">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.nom') }}<span>*</span></label>
                                                                                    <input name="name" type="text" class="form-control" placeholder="{{ __('home.nom') }}"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('name'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.prenom') }}<span>*</span></label>
                                                                                    <input name="prenom" type="text" class="form-control" placeholder="{{ __('home.prenom') }}"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('prenom'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('prenom') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.email') }}<span>*</span></label>
                                                                                    <input  type="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="{{ __('home.email') }}" value="{{ old('email') }}" autocomplete="email"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('email'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.phone') }}<span>*</span></label>
                                                                                    <input name="tel" type="text" class="form-control" placeholder="{{ __('home.phone') }}"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('tel'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('tel') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.password') }}<span>*</span></label>
                                                                                    <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="{{ __('home.password') }}" @if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('password'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('password') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.Confirmer Password') }}<span>*</span></label>
                                                                                    <input  type="password" class="form-control" name="password_confirmation" placeholder="{{ __('home.Confirmer Password') }}" autocomplete="new-password"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group message">
                                                                                    <label>{{ __('home.adresse') }}<span>*</span></label>
                                                                                    <input name="adresse" type="text" class="form-control" placeholder="{{ __('home.adresse') }}"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('adresse'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('adresse') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.ville') }}<span>*</span></label>
                                                                                    <input name="ville" type="text" class="form-control" placeholder="{{ __('home.ville') }}"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('ville'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('ville') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.region') }}<span>*</span></label>
                                                                                    <input name="region" type="text" class="form-control" placeholder="{{ __('home.region') }}"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('region'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('region') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.societe name') }}</label>
                                                                                    <input name="societe_name" type="text" class="form-control" placeholder="{{ __('home.societe name') }}"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('societe_name'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('societe_name') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.site web') }}</label>
                                                                                    <input name="site_web" type="text" class="form-control" placeholder="{{ __('home.site web') }}"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('site_web'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('region') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.rc') }}</label>
                                                                                    <input name="rc" type="text" class="form-control" placeholder="{{ __('home.rc') }}"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('rc'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('rc') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.ice') }}</label>
                                                                                    <input name="ice" type="text" class="form-control" placeholder="{{ __('home.ice') }}"@if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;border-radius:0%;"
                                                                                @else
                                                                                    style="text-align:left;border-radius:0%;"
                                                                                @endif >
                                                                                    @if($errors->has('ice'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('ice') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-12 col-12" >
                                                                                <div class="form-group" align="center">
                                                                                    <input class="form-check-input" style="border-radius: 0%;" type="checkbox" name="checkregi" required>
                                                                                    <label class="form-check-label" >
                                                                                        {{ __('home.aaa') }}
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div class="form-group button" align="center">
                                                                                    <button type="submit"  class="btn ">{{ __('home.register') }}</button>
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
