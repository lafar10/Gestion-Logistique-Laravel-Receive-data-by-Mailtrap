@extends('Front.Master')

@section('title', 'Mon Compte')

@section('content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(app()->getLocale() == 'ar')
                    <div class="bread-inner"  style="text-align:right;" >
                        <ul class="bread-list">
                            <li class="active">{{ __('home.mon Compte') }}<i class="ti-arrow-left"></i></li>
                            <li ><a href="{{route('index')}}">{{ __('home.Acceil') }}</a></li>
                        </ul>
                    </div> 
                @else       
                    <div class="bread-inner"  style="text-align:left;" >
                        <ul class="bread-list">
                            <li class="active">{{ __('home.mon Compte') }}<i class="ti-arrow-right"></i></li>
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
            <div class="col-lg-12 col-12">
                <div class="form-main">
                    <form method="POST" action="{{ route('update.user.account') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$users->id}}" >

                        <div class="row" @if(app()->getLocale() == 'ar')
                                                    style="text-align:right;"
                                        @else
                                                    style="text-align:left;"
                                        @endif >
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label>{{ __('home.nom') }}<span>*</span></label>
                                    <input name="name" type="text" style="border-radius: 0%;" value="{{$users->name}}" class="form-control" placeholder="" @if(app()->getLocale() == 'ar')
                                                                                                                                                                        style="text-align:right;"
                                                                                                                                                            @else
                                                                                                                                                                        style="text-align:left;"
                                                                                                                                                            @endif >
                                    @if($errors->has('name'))
                                        <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label>{{ __('home.prenom') }}<span>*</span></label>
                                    <input name="prenom" type="text" style="border-radius: 0%;"  value="{{$users->prenom}}" class="form-control" placeholder="" @if(app()->getLocale() == 'ar')
                                                                                                                                                                            style="text-align:right;"
                                                                                                                                                                @else
                                                                                                                                                                            style="text-align:left;"
                                                                                                                                                                @endif >
                                    @if($errors->has('prenom'))
                                        <div class="error" style="color:red;">{{ $errors->first('prenom') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label>{{ __('home.email') }}<span>*</span></label>
                                    <input  type="email" style="border-radius: 0%;"  value="{{$users->email}}" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" @if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                                                    style="text-align:right;"
                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                                    style="text-align:left;"
                                                                                                                                                                                                                                        @endif >
                                    @if($errors->has('email'))
                                        <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label>{{ __('home.phone') }}<span>*</span></label>
                                    <input name="tel" type="text" style="border-radius: 0%;"  value="{{$users->tel}}" class="form-control" placeholder="" @if(app()->getLocale() == 'ar')
                                                                                                                                                                        style="text-align:right;"
                                                                                                                                                            @else
                                                                                                                                                                        style="text-align:left;"
                                                                                                                                                            @endif >
                                    @if($errors->has('tel'))
                                        <div class="error" style="color:red;">{{ $errors->first('tel') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group message">
                                    <label>{{ __('home.adresse') }}<span>*</span></label>
                                    <input name="adresse" type="text" class="form-control"  value="{{$users->adresse}}" style="border-radius: 0%;" placeholder=""  @if(app()->getLocale() == 'ar')
                                                                                                                                                                            style="text-align:right;"
                                                                                                                                                                @else
                                                                                                                                                                            style="text-align:left;"
                                                                                                                                                                @endif >
                                    @if($errors->has('adresse'))
                                        <div class="error" style="color:red;">{{ $errors->first('adresse') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label>{{ __('home.ville') }}<span>*</span></label>
                                    <input name="ville" type="text" style="border-radius: 0%;"  value="{{$users->ville}}" class="form-control" placeholder="" @if(app()->getLocale() == 'ar')
                                                                                                                                                                        style="text-align:right;"
                                                                                                                                                            @else
                                                                                                                                                                        style="text-align:left;"
                                                                                                                                                            @endif >
                                    @if($errors->has('ville'))
                                        <div class="error" style="color:red;">{{ $errors->first('ville') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label>{{ __('home.region') }}<span>*</span></label>
                                    <input name="region" type="text" style="border-radius: 0%;"  value="{{$users->region}}" class="form-control" placeholder="" @if(app()->getLocale() == 'ar')
                                                                                                                                                                            style="text-align:right;"
                                                                                                                                                                @else
                                                                                                                                                                            style="text-align:left;"
                                                                                                                                                                @endif >
                                    @if($errors->has('region'))
                                        <div class="error" style="color:red;">{{ $errors->first('region') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label>{{ __('home.societe name') }}</label>
                                    <input name="societe_name" type="text" style="border-radius: 0%;"  value="{{$users->societe_name}}" class="form-control" placeholder="" @if(app()->getLocale() == 'ar')
                                                                                                                                                                                        style="text-align:right;"
                                                                                                                                                                            @else
                                                                                                                                                                                        style="text-align:left;"
                                                                                                                                                                            @endif >
                                    @if($errors->has('societe_name'))
                                        <div class="error" style="color:red;">{{ $errors->first('societe_name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label>{{ __('home.site web') }}</label>
                                    <input name="site_web" type="text" style="border-radius: 0%;"  value="{{$users->site_web}}" class="form-control" placeholder="" @if(app()->getLocale() == 'ar')
                                                                                                                                                                                style="text-align:right;"
                                                                                                                                                                    @else
                                                                                                                                                                                style="text-align:left;"
                                                                                                                                                                    @endif >
                                    @if($errors->has('site_web'))
                                        <div class="error" style="color:red;">{{ $errors->first('site_web') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label>{{ __('home.rc') }}</label>
                                    <input name="rc" type="text" style="border-radius: 0%;"  value="{{$users->rc}}" class="form-control" placeholder="" @if(app()->getLocale() == 'ar')
                                                                                                                                                                                style="text-align:right;"
                                                                                                                                                                    @else
                                                                                                                                                                                style="text-align:left;"
                                                                                                                                                                    @endif >
                                    @if($errors->has('rc'))
                                        <div class="error" style="color:red;">{{ $errors->first('rc') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label>{{ __('home.ice') }}</label>
                                    <input name="ice" type="text" style="border-radius: 0%;"  value="{{$users->ice}}" class="form-control" placeholder="" @if(app()->getLocale() == 'ar')
                                                                                                                                                                    style="text-align:right;"
                                                                                                                                                        @else
                                                                                                                                                                    style="text-align:left;"
                                                                                                                                                        @endif >
                                    @if($errors->has('ice'))
                                        <div class="error" style="color:red;">{{ $errors->first('ice') }}</div>
                                    @endif
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
@stop
