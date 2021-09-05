@extends('Front.Master')

@section('title', 'Commande Remoque')

@section('content')


<div class="tab-single">
    <div class="row">
        <div class="col-lg-12">
            <!-- Start Contact -->
            <section id="contact-us" class="contact-us section">
                <div class="container">
                        <div class="contact-head">
                            <div class="row"  @if(app()->getLocale() == 'ar')
                                                        style="text-align:right;"
                                            @else
                                                        style="text-align:left;"
                                            @endif >
                                <div class="col-lg-12 col-12">
                                    <div class="form-main">
                                        <div class="title">
                                            <h4>{{ __('home.remoque') }}</h4>
                                            <h3>{{ __('home.moins de') }} 30 {{ __('home.tonnes') }}</h3>
                                        </div>
                                            @if (session('flash'))
                                                <div class="alert alert-success"> {{session('flash')}}</div>
                                            @endif
                                        <form method="post" action="{{route('triporteur.gmail')}}">
                                            @csrf
                                            <input type="hidden" name="vehicule_type" value="REMOQUE" />
                                            <div class="row" >
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group" >
                                                        <label>{{ __('home.lieu d') }}<span>*</span></label>
                                                        <input class="form-control" list="datalistOptions" name="lieu_ramassage"  value="{{old('lieu_ramassage')}}"  id="exampleDataList" placeholder="{{ __('home.vs') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                            @else
                                                                                                                                                                                                                style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                            @endif >
                                                            <datalist id="datalistOptions">
                                                                    <option ></option >
                                                            </datalist>
                                                            @if($errors->has('lieu_ramassage'))
                                                                <div class="error" style="color:red;">{{ $errors->first('lieu_ramassage') }}</div>
                                                            @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('home.lieu a') }}<span>*</span></label>
                                                        <input class="form-control" list="datalistOptions"  value="{{old('lieu_depose')}}"  id="exampleDataList" name="lieu_depose" placeholder="{{ __('home.vsa') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                        style="text-align:right;border-radius:0%;"
                                                                                                                                                                                    @else
                                                                                                                                                                                        style="text-align:left;border-radius:0%;"
                                                                                                                                                                                    @endif >
                                                            <datalist id="datalistOptions">
                                                                    <option ></option >

                                                            </datalist>
                                                            @if($errors->has('lieu_depose'))
                                                                <div class="error" style="color:red;">{{ $errors->first('lieu_depose') }}</div>
                                                            @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('home.date d') }}<span>*</span></label>
                                                        <input name="date_ramassage" id="date_ramassage"  value="{{old('date_ramassage')}}"  type="date" style="border-radius:0%;" class="form-control" >
                                                    </div>
                                                    @if($errors->has('date_ramassage'))
                                                        <div class="error" style="color:red;">{{ $errors->first('date_ramassage') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-2 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('home.heure') }}<span>*</span></label>
                                                        <br>
                                                            @if(old('heure') == '')
                                                                <select name="heure" class="form-control" style="border-radius:0%;">
                                                                    <option  selected disabled value="">{{ __('home.cheure') }}</option>
                                                                    <option>01</option>
                                                                    <option>02</option>
                                                                    <option>03</option>
                                                                    <option>04</option>
                                                                    <option>05</option>
                                                                    <option>06</option>
                                                                    <option>07</option>
                                                                    <option>08</option>
                                                                    <option>09</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                </select>
                                                                    <br>
                                                                    @if($errors->has('heure'))
                                                                        <div class="error" style="color:red;">  {{ $errors->first('heure') }}</div>
                                                                    @endif
                                                            @else
                                                                <select name="heure" class="form-control" style="border-radius:0%;">
                                                                    <option >{{old('heure')}}</option>
                                                                    <option>01</option>
                                                                    <option>02</option>
                                                                    <option>03</option>
                                                                    <option>04</option>
                                                                    <option>05</option>
                                                                    <option>06</option>
                                                                    <option>07</option>
                                                                    <option>08</option>
                                                                    <option>09</option>
                                                                    <option>10</option>
                                                                    <option>11</option>
                                                                    <option>12</option>
                                                                </select>
                                                            @endif


                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-12">
                                                    <div class="form-group  mb-3" >
                                                        <label>{{ __('home.minutes') }}<span>*</span></label>
                                                        <br>
                                                            @if(old('minutes') == '')
                                                                <select name="minutes" style="border-radius:0%;" class="form-control">
                                                                    <option  selected disabled value="">{{ __('home.cminutes') }}</option>
                                                                    <option >00</option>
                                                                    <option>30</option>
                                                                </select>
                                                                <br>
                                                                @if($errors->has('minutes'))
                                                                    <div class="error" style="color:red;">  {{ $errors->first('minutes') }}</div>
                                                                @endif
                                                            @else
                                                                <select name="minutes" style="border-radius:0%;" class="form-control">
                                                                    <option >{{old('minutes')}}</option>
                                                                    <option >00</option>
                                                                    <option>30</option>
                                                                </select>
                                                            @endif

                                                    </div>

                                                </div>
                                                <div class="col-lg-2 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('home.period') }}<span>*</span></label>
                                                        <br>
                                                            @if(old('period') == '')

                                                                <select name="period" class="form-control" style="border-radius:0%;" >
                                                                    <option selected disabled value="">{{ __('home.cperiod') }}</option>
                                                                    <option>AM</option>
                                                                    <option>PM</option>
                                                                </select>
                                                                <br>
                                                                @if($errors->has('period'))
                                                                    <div class="error" style="color:red;">   {{ $errors->first('period') }}</div>
                                                                @endif
                                                            @else
                                                                <select name="period" class="form-control" style="border-radius:0%;" >
                                                                    <option >{{old('period')}}</option>
                                                                    <option>AM</option>
                                                                    <option>PM</option>
                                                                </select>
                                                            @endif


                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group" >
                                                        <label>{{ __('home.nom') }}<span>*</span></label>
                                                        <input name="name" type="text" class="form-control"  value="{{old('name')}}"  placeholder="{{ __('home.enom') }}" @if(app()->getLocale() == 'ar')
                                                                                                                                                    style="text-align:right;border-radius:0%;"
                                                                                                                                                @else
                                                                                                                                                    style="text-align:left;border-radius:0%;"
                                                                                                                                                @endif >
                                                    </div>
                                                    @if($errors->has('name'))
                                                        <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('home.prenom') }}<span>*</span></label>
                                                        <input name="prenom" type="text" class="form-control"  value="{{old('prenom')}}"  placeholder="{{ __('home.epnom') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                style="text-align:right;border-radius:0%;"
                                                                                                                                                                            @else
                                                                                                                                                                                style="text-align:left;border-radius:0%;"
                                                                                                                                                                            @endif >
                                                    </div>
                                                    @if($errors->has('prenom'))
                                                        <div class="error" style="color:red;">{{ $errors->first('prenom') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('home.email') }}<span>*</span></label>
                                                        <input name="email" type="email" class="form-control"  value="{{old('email')}}"  placeholder="{{ __('home.eem') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                style="text-align:right;border-radius:0%;"
                                                                                                                                                                            @else
                                                                                                                                                                                style="text-align:left;border-radius:0%;"
                                                                                                                                                                            @endif >
                                                    </div>
                                                    @if($errors->has('email'))
                                                        <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>{{ __('home.phone') }}<span>*</span></label>
                                                        <input name="tel" type="text" class="form-control"  value="{{old('tel')}}"  placeholder="{{ __('home.ephone') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                            style="text-align:right;border-radius:0%;"
                                                                                                                                                                        @else
                                                                                                                                                                            style="text-align:left;border-radius:0%;"
                                                                                                                                                                        @endif >
                                                    </div>
                                                    @if($errors->has('tel'))
                                                        <div class="error" style="color:red;">{{ $errors->first('tel') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group message">
                                                        <label>{{ __('home.adresse') }}<span>*</span></label>
                                                        <input type="text" name="adresse" class="form-control" value="{{old('adresse')}}" placeholder="{{ __('home.ereg') }}" @if(app()->getLocale() == 'ar')
                                                                                                                                            style="text-align:right;border-radius:0%;"
                                                                                                                                        @else
                                                                                                                                            style="text-align:left;border-radius:0%;"
                                                                                                                                        @endif >
                                                    </div>
                                                    @if($errors->has('adresse'))
                                                        <div class="error" style="color:red;">{{ $errors->first('adresse') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group button" align="center">
                                                        <button type="submit"  class="btn ">{{ __('home.terminer') }}</button>
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


@stop
