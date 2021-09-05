<div class="product-area section" id="sec-1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>{{ trans('home.RESERVEZ POUR VOTRE FAYAJ') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab"><img  src="./images/tricycle.png"  style="width:24px;height:22px;" /> {{ __('home.triporteur') }}</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab"><img  src="./images/pickup-truck.png"  style="width:24px;height:25px;" /> {{ __('home.pick-up') }}</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab"><img  src="./images/van.png"  style="width:24px;height:25px;" /> {{ __('home.camionnette') }}</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab"><img  src="./images/pickup-truck (1).png"  style="width:24px;height:25px;" /> {{ __('home.honda') }}</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab"><img  src="./images/lorry.png"  style="width:24px;height:25px;" /> {{ __('home.camion') }}</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab"><img  src="./images/trailer-truck.png"  style="width:24px;height:25px;" /> {{ __('home.remoque') }}</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#camion" role="tab"><img  src="./images/delivery-truck.png"  style="width:24px;height:24px;" /> {{ __('home.camion a benne') }}</a></li>

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
                                                        <div class="row" @if(app()->getLocale() == 'ar')
                                                                                            align="right"
                                                                                @else
                                                                                            align="left"
                                                                                @endif >
                                                            <div class="col-lg-12 col-12">
                                                                <div class="form-main">
                                                                    <div class="title">
                                                                        <h4>{{ __('home.triporteur') }}</h4>
                                                                        <h3>{{ __('home.moins de') }} 300 {{ __('home.kg') }}</h3>
                                                                    </div>
                                                                    <form method="post" action="{{route('store.commandes')}}">
                                                                        @csrf
                                                                        <input type="hidden" name="vehicule_type" value="TRIPORTEUR" />
                                                                        <div class="row" >
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.lieu d') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" name="lieu_ramassage" id="exampleDataList" placeholder="{{ __('home.vs') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                                            style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                            style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                                        @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_ramassage'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_ramassage') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.lieu a') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" id="exampleDataList" name="lieu_depose" placeholder="{{ __('home.vsa') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                    style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                @else
                                                                                                                                                                                                                    style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_depose'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_depose') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.date d') }}<span>*</span></label>
                                                                                    <input name="date_ramassage" id="date_ramassage" type="date" style="border-radius:0%;" class="form-control" >
                                                                                </div>
                                                                                @if($errors->has('date_ramassage'))
                                                                                    <div class="error" style="color:red;">{{ $errors->first('date_ramassage') }}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.heure') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="heure" class="form-control" style="border-radius:0%;">
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
                                                                                    @if($errors->has('heure'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('heure') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.minutes') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="minutes"  class="form-control">
                                                                                        <option style="border-radius:0%;">00</option>
                                                                                        <option>30</option>
                                                                                    </select>
                                                                                    @if($errors->has('minutes'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('minutes') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.period') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="period" class="form-control" style="border-radius:0%;" id="slt">
                                                                                        <option>AM</option>
                                                                                        <option>PM</option>
                                                                                    </select>
                                                                                    @if($errors->has('period'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('period') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.nom') }}<span>*</span></label>
                                                                                    <input name="name" type="text" class="form-control"  placeholder="{{ __('home.enom') }}" @if(app()->getLocale() == 'ar')
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
                                                                                    <input name="prenom" type="text" class="form-control" placeholder="{{ __('home.epnom') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="email" type="email" class="form-control" placeholder="{{ __('home.eem') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="tel" type="text" class="form-control" placeholder="{{ __('home.ephone') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input type="text" name="adresse" class="form-control" placeholder="{{ __('home.ereg') }}" @if(app()->getLocale() == 'ar')
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
                        </div>
                        <!--/ End Single Tab -->
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade" id="women" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Start Contact -->
                                        <section id="contact-us" class="contact-us section">
                                            <div class="container">
                                                    <div class="contact-head">
                                                        <div class="row" @if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;"
                                                                        @else
                                                                                    style="text-align:left;"
                                                                        @endif >
                                                            <div class="col-lg-12 col-12">
                                                                <div class="form-main">
                                                                    <div class="title">
                                                                        <h4>{{ __('home.pick-up') }}</h4>
                                                                        <h3>{{ __('home.moins de') }} 500 {{ __('home.kg') }}</h3>
                                                                    </div>
                                                                    <form method="post" action="{{route('store.commandes')}}">
                                                                        @csrf
                                                                        <input type="hidden" name="vehicule_type" value="PICK-UP" />
                                                                        <div class="row" >
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.lieu d') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" name="lieu_ramassage" id="exampleDataList" placeholder="{{ __('home.vs') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                                            style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                            style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                                        @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_ramassage'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_ramassage') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.lieu a') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" id="exampleDataList" name="lieu_depose" placeholder="{{ __('home.vsa') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                    style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                @else
                                                                                                                                                                                                                    style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_depose'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_depose') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.date d') }}<span>*</span></label>
                                                                                    <input name="date_ramassage" id="date_ramassage" type="date" style="border-radius:0%;" class="form-control" >
                                                                                </div>
                                                                                @if($errors->has('date_ramassage'))
                                                                                    <div class="error" style="color:red;">{{ $errors->first('date_ramassage') }}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.heure') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="heure" class="form-control" style="border-radius:0%;">
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
                                                                                    @if($errors->has('heure'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('heure') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.minutes') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="minutes"  class="form-control">
                                                                                        <option style="border-radius:0%;">00</option>
                                                                                        <option>30</option>
                                                                                    </select>
                                                                                    @if($errors->has('minutes'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('minutes') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.period') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="period" class="form-control" style="border-radius:0%;" id="slt">
                                                                                        <option>AM</option>
                                                                                        <option>PM</option>
                                                                                    </select>
                                                                                    @if($errors->has('period'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('period') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.nom') }}<span>*</span></label>
                                                                                    <input name="name" type="text" class="form-control"  placeholder="{{ __('home.enom') }}" @if(app()->getLocale() == 'ar')
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
                                                                                    <input name="prenom" type="text" class="form-control" placeholder="{{ __('home.epnom') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="email" type="email" class="form-control" placeholder="{{ __('home.eem') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="tel" type="text" class="form-control" placeholder="{{ __('home.ephone') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input type="text" name="adresse" class="form-control" placeholder="{{ __('home.ereg') }}" @if(app()->getLocale() == 'ar')
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
                        </div>
                        <!--/ End Single Tab -->

                        <!-- Start Single Tab -->
                        <div class="tab-pane fade" id="accessories" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Start Contact -->
                                        <section id="contact-us" class="contact-us section">
                                            <div class="container">
                                                    <div class="contact-head">
                                                        <div class="row" @if(app()->getLocale() == 'ar')
                                                                                        style="text-align:right;"
                                                                            @else
                                                                                        style="text-align:left;"
                                                                            @endif >
                                                            <div class="col-lg-12 col-12">
                                                                <div class="form-main">
                                                                    <div class="title">
                                                                        <h4>{{ __('home.camionnette') }}</h4>
                                                                        <h3>{{ __('home.moins de') }} 700 {{ __('home.kg') }}</h3>
                                                                    </div>
                                                                    <form method="post" action="{{route('store.commandes')}}">
                                                                        @csrf
                                                                        <input type="hidden" name="vehicule_type" value="CAMIONNETTE" />
                                                                        <div class="row" >
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.lieu d') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" name="lieu_ramassage" id="exampleDataList" placeholder="{{ __('home.vs') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                                            style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                            style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                                        @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_ramassage'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_ramassage') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.lieu a') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" id="exampleDataList" name="lieu_depose" placeholder="{{ __('home.vsa') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                    style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                @else
                                                                                                                                                                                                                    style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_depose'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_depose') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.date d') }}<span>*</span></label>
                                                                                    <input name="date_ramassage" id="date_ramassage" type="date" style="border-radius:0%;" class="form-control" >
                                                                                </div>
                                                                                @if($errors->has('date_ramassage'))
                                                                                    <div class="error" style="color:red;">{{ $errors->first('date_ramassage') }}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.heure') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="heure" class="form-control" style="border-radius:0%;">
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
                                                                                    @if($errors->has('heure'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('heure') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.minutes') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="minutes"  class="form-control">
                                                                                        <option style="border-radius:0%;">00</option>
                                                                                        <option>30</option>
                                                                                    </select>
                                                                                    @if($errors->has('minutes'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('minutes') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.period') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="period" class="form-control" style="border-radius:0%;" id="slt">
                                                                                        <option>AM</option>
                                                                                        <option>PM</option>
                                                                                    </select>
                                                                                    @if($errors->has('period'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('period') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.nom') }}<span>*</span></label>
                                                                                    <input name="name" type="text" class="form-control"  placeholder="{{ __('home.enom') }}" @if(app()->getLocale() == 'ar')
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
                                                                                    <input name="prenom" type="text" class="form-control" placeholder="{{ __('home.epnom') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="email" type="email" class="form-control" placeholder="{{ __('home.eem') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="tel" type="text" class="form-control" placeholder="{{ __('home.ephone') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input type="text" name="adresse" class="form-control" placeholder="{{ __('home.ereg') }}" @if(app()->getLocale() == 'ar')
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
                        </div>
                        <!--/ End Single Tab -->
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade" id="kids" role="tabpanel">
                                                    <div class="tab-single">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <!-- Start Contact -->
                                                                <section id="contact-us" class="contact-us section">
                                                                    <div class="container">
                                                                            <div class="contact-head">
                                                                                <div class="row" @if(app()->getLocale() == 'ar')
                                                                                                            style="text-align:right;"
                                                                                                @else
                                                                                                            style="text-align:left;"
                                                                                                @endif >
                                                                                    <div class="col-lg-12 col-12">
                                                                                        <div class="form-main">
                                                                                            <div class="title">
                                                                                                <h4>{{ __('home.honda') }}</h4>
                                                                                                <h3>{{ __('home.moins de') }} 500 {{ __('home.kg') }}</h3>
                                                                                            </div>
                                                                                            <form method="post" action="{{route('store.commandes')}}">
                                                                                                @csrf
                                                                                                <input type="hidden" name="vehicule_type" value="HONDA" />
                                                                                                <div class="row" >
                                                                                                    <div class="col-lg-6 col-12">
                                                                                                        <div class="form-group" >
                                                                                                            <label>{{ __('home.lieu d') }}<span>*</span></label>
                                                                                                            <input class="form-control" list="datalistOptions" name="lieu_ramassage" id="exampleDataList" placeholder="{{ __('home.vs') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                                                                    style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                                                                @else
                                                                                                                                                                                                                                                                    style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                                                                @endif >
                                                                                                                <datalist id="datalistOptions">
                                                                                                                    @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                                        <option   value="{{$value->ville}}">
                                                                                                                    @endforeach
                                                                                                                </datalist>
                                                                                                                @if($errors->has('lieu_ramassage'))
                                                                                                                    <div class="error" style="color:red;">{{ $errors->first('lieu_ramassage') }}</div>
                                                                                                                @endif
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-12">
                                                                                                        <div class="form-group">
                                                                                                            <label>{{ __('home.lieu a') }}<span>*</span></label>
                                                                                                            <input class="form-control" list="datalistOptions" id="exampleDataList" name="lieu_depose" placeholder="{{ __('home.vsa') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                                            style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                            style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                                        @endif >
                                                                                                                <datalist id="datalistOptions">
                                                                                                                    @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                                        <option   value="{{$value->ville}}">
                                                                                                                    @endforeach
                                                                                                                </datalist>
                                                                                                                @if($errors->has('lieu_depose'))
                                                                                                                    <div class="error" style="color:red;">{{ $errors->first('lieu_depose') }}</div>
                                                                                                                @endif
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-12">
                                                                                                        <div class="form-group">
                                                                                                            <label>{{ __('home.date d') }}<span>*</span></label>
                                                                                                            <input name="date_ramassage" id="date_ramassage" type="date" style="border-radius:0%;" class="form-control" >
                                                                                                        </div>
                                                                                                        @if($errors->has('date_ramassage'))
                                                                                                            <div class="error" style="color:red;">{{ $errors->first('date_ramassage') }}</div>
                                                                                                        @endif
                                                                                                    </div>
                                                                                                    <div class="col-lg-2 col-12">
                                                                                                        <div class="form-group">
                                                                                                            <label>{{ __('home.heure') }}<span>*</span></label>
                                                                                                            <br>
                                                                                                            <select name="heure" class="form-control" style="border-radius:0%;">
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
                                                                                                            @if($errors->has('heure'))
                                                                                                                <div class="error" style="color:red;">{{ $errors->first('heure') }}</div>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-2 col-12">
                                                                                                        <div class="form-group">
                                                                                                            <label>{{ __('home.minutes') }}<span>*</span></label>
                                                                                                            <br>
                                                                                                            <select name="minutes"  class="form-control">
                                                                                                                <option style="border-radius:0%;">00</option>
                                                                                                                <option>30</option>
                                                                                                            </select>
                                                                                                            @if($errors->has('minutes'))
                                                                                                                <div class="error" style="color:red;">{{ $errors->first('minutes') }}</div>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-2 col-12">
                                                                                                        <div class="form-group">
                                                                                                            <label>{{ __('home.period') }}<span>*</span></label>
                                                                                                            <br>
                                                                                                            <select name="period" class="form-control" style="border-radius:0%;" id="slt">
                                                                                                                <option>AM</option>
                                                                                                                <option>PM</option>
                                                                                                            </select>
                                                                                                            @if($errors->has('period'))
                                                                                                                <div class="error" style="color:red;">{{ $errors->first('period') }}</div>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-6 col-12">
                                                                                                        <div class="form-group" >
                                                                                                            <label>{{ __('home.nom') }}<span>*</span></label>
                                                                                                            <input name="name" type="text" class="form-control"  placeholder="{{ __('home.enom') }}" @if(app()->getLocale() == 'ar')
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
                                                                                                            <input name="prenom" type="text" class="form-control" placeholder="{{ __('home.epnom') }}"@if(app()->getLocale() == 'ar')
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
                                                                                                            <input name="email" type="email" class="form-control" placeholder="{{ __('home.eem') }}"@if(app()->getLocale() == 'ar')
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
                                                                                                            <input name="tel" type="text" class="form-control" placeholder="{{ __('home.ephone') }}"@if(app()->getLocale() == 'ar')
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
                                                                                                            <input type="text" name="adresse" class="form-control" placeholder="{{ __('home.ereg') }}" @if(app()->getLocale() == 'ar')
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
                                                </div>
                                                <!--/ End Single Tab -->
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade" id="essential" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Start Contact -->
                                        <section id="contact-us" class="contact-us section">
                                            <div class="container">
                                                    <div class="contact-head">
                                                        <div class="row" @if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;"
                                                                        @else
                                                                                    style="text-align:left;"
                                                                        @endif >
                                                            <div class="col-lg-12 col-12">
                                                                <div class="form-main">
                                                                    <div class="title">
                                                                        <h4>{{ __('home.camion') }}</h4>
                                                                        <h3>{{ __('home.moins de') }} 3 {{ __('home.tonnes') }}</h3>
                                                                    </div>
                                                                    <form method="post" action="{{route('store.commandes')}}">
                                                                        @csrf
                                                                        <input type="hidden" name="vehicule_type" value="CAMION" />
                                                                        <div class="row" >
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.lieu d') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" name="lieu_ramassage" id="exampleDataList" placeholder="{{ __('home.vs') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                                            style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                            style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                                        @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_ramassage'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_ramassage') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.lieu a') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" id="exampleDataList" name="lieu_depose" placeholder="{{ __('home.vsa') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                    style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                @else
                                                                                                                                                                                                                    style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_depose'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_depose') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.date d') }}<span>*</span></label>
                                                                                    <input name="date_ramassage" id="date_ramassage" type="date" style="border-radius:0%;" class="form-control" >
                                                                                </div>
                                                                                @if($errors->has('date_ramassage'))
                                                                                    <div class="error" style="color:red;">{{ $errors->first('date_ramassage') }}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.heure') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="heure" class="form-control" style="border-radius:0%;">
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
                                                                                    @if($errors->has('heure'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('heure') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.minutes') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="minutes"  class="form-control">
                                                                                        <option style="border-radius:0%;">00</option>
                                                                                        <option>30</option>
                                                                                    </select>
                                                                                    @if($errors->has('minutes'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('minutes') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.period') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="period" class="form-control" style="border-radius:0%;" id="slt">
                                                                                        <option>AM</option>
                                                                                        <option>PM</option>
                                                                                    </select>
                                                                                    @if($errors->has('period'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('period') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.nom') }}<span>*</span></label>
                                                                                    <input name="name" type="text" class="form-control"  placeholder="{{ __('home.enom') }}" @if(app()->getLocale() == 'ar')
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
                                                                                    <input name="prenom" type="text" class="form-control" placeholder="{{ __('home.epnom') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="email" type="email" class="form-control" placeholder="{{ __('home.eem') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="tel" type="text" class="form-control" placeholder="{{ __('home.ephone') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input type="text" name="adresse" class="form-control" placeholder="{{ __('home.ereg') }}" @if(app()->getLocale() == 'ar')
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
                        </div>
                        <!--/ End Single Tab -->
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade" id="prices" role="tabpanel">
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
                                                                    <form method="post" action="{{route('store.commandes')}}">
                                                                        @csrf
                                                                        <input type="hidden" name="vehicule_type" value="REMOQUE" />
                                                                        <div class="row" >
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.lieu d') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" name="lieu_ramassage" id="exampleDataList" placeholder="{{ __('home.vs') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                                            style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                            style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                                        @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_ramassage'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_ramassage') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.lieu a') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" id="exampleDataList" name="lieu_depose" placeholder="{{ __('home.vsa') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                    style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                @else
                                                                                                                                                                                                                    style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_depose'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_depose') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.date d') }}<span>*</span></label>
                                                                                    <input name="date_ramassage" id="date_ramassage" type="date" style="border-radius:0%;" class="form-control" >
                                                                                </div>
                                                                                @if($errors->has('date_ramassage'))
                                                                                    <div class="error" style="color:red;">{{ $errors->first('date_ramassage') }}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.heure') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="heure" class="form-control" style="border-radius:0%;">
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
                                                                                    @if($errors->has('heure'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('heure') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.minutes') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="minutes"  class="form-control">
                                                                                        <option style="border-radius:0%;">00</option>
                                                                                        <option>30</option>
                                                                                    </select>
                                                                                    @if($errors->has('minutes'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('minutes') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.period') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="period" class="form-control" style="border-radius:0%;" id="slt">
                                                                                        <option>AM</option>
                                                                                        <option>PM</option>
                                                                                    </select>
                                                                                    @if($errors->has('period'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('period') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.nom') }}<span>*</span></label>
                                                                                    <input name="name" type="text" class="form-control"  placeholder="{{ __('home.enom') }}" @if(app()->getLocale() == 'ar')
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
                                                                                    <input name="prenom" type="text" class="form-control" placeholder="{{ __('home.epnom') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="email" type="email" class="form-control" placeholder="{{ __('home.eem') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="tel" type="text" class="form-control" placeholder="{{ __('home.ephone') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input type="text" name="adresse" class="form-control" placeholder="{{ __('home.ereg') }}" @if(app()->getLocale() == 'ar')
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
                        </div>
                        <!--/ End Single Tab -->
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade" id="camion" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- Start Contact -->
                                        <section id="contact-us" class="contact-us section">
                                            <div class="container">
                                                    <div class="contact-head">
                                                        <div class="row" @if(app()->getLocale() == 'ar')
                                                                                    style="text-align:right;"
                                                                        @else
                                                                                       style="text-align:left;"
                                                                        @endif >
                                                            <div class="col-lg-12 col-12">
                                                                <div class="form-main">
                                                                    <div class="title">
                                                                        <h4>{{ __('home.camion a benne') }}</h4>
                                                                        <h3>{{ __('home.moins de') }} 7 {{ __('home.tonnes') }}</h3>
                                                                    </div>
                                                                    <form method="post" action="{{route('store.commandes')}}">
                                                                        @csrf
                                                                        <input type="hidden" name="vehicule_type" value="CAMION A BENNE" />
                                                                        <div class="row" >
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.lieu d') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" name="lieu_ramassage" id="exampleDataList" placeholder="{{ __('home.vs') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                                            style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                                        @else
                                                                                                                                                                                                                                            style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                                        @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_ramassage'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_ramassage') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.lieu a') }}<span>*</span></label>
                                                                                    <input class="form-control" list="datalistOptions" id="exampleDataList" name="lieu_depose" placeholder="{{ __('home.vsa') }}"@if(app()->getLocale() == 'ar')
                                                                                                                                                                                                                    style="text-align:right;border-radius:0%;"
                                                                                                                                                                                                                @else
                                                                                                                                                                                                                    style="text-align:left;border-radius:0%;"
                                                                                                                                                                                                                @endif >
                                                                                        <datalist id="datalistOptions">
                                                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                                                <option   value="{{$value->ville}}">
                                                                                            @endforeach
                                                                                        </datalist>
                                                                                        @if($errors->has('lieu_depose'))
                                                                                            <div class="error" style="color:red;">{{ $errors->first('lieu_depose') }}</div>
                                                                                        @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.date d') }}<span>*</span></label>
                                                                                    <input name="date_ramassage" id="date_ramassage" type="date" style="border-radius:0%;" class="form-control" >
                                                                                </div>
                                                                                @if($errors->has('date_ramassage'))
                                                                                    <div class="error" style="color:red;">{{ $errors->first('date_ramassage') }}</div>
                                                                                @endif
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.heure') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="heure" class="form-control" style="border-radius:0%;">
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
                                                                                    @if($errors->has('heure'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('heure') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.minutes') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="minutes"  class="form-control">
                                                                                        <option style="border-radius:0%;">00</option>
                                                                                        <option>30</option>
                                                                                    </select>
                                                                                    @if($errors->has('minutes'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('minutes') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-2 col-12">
                                                                                <div class="form-group">
                                                                                    <label>{{ __('home.period') }}<span>*</span></label>
                                                                                    <br>
                                                                                    <select name="period" class="form-control" style="border-radius:0%;" id="slt">
                                                                                        <option>AM</option>
                                                                                        <option>PM</option>
                                                                                    </select>
                                                                                    @if($errors->has('period'))
                                                                                        <div class="error" style="color:red;">{{ $errors->first('period') }}</div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12">
                                                                                <div class="form-group" >
                                                                                    <label>{{ __('home.nom') }}<span>*</span></label>
                                                                                    <input name="name" type="text" class="form-control"  placeholder="{{ __('home.enom') }}" @if(app()->getLocale() == 'ar')
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
                                                                                    <input name="prenom" type="text" class="form-control" placeholder="{{ __('home.epnom') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="email" type="email" class="form-control" placeholder="{{ __('home.eem') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input name="tel" type="text" class="form-control" placeholder="{{ __('home.ephone') }}"@if(app()->getLocale() == 'ar')
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
                                                                                    <input type="text" name="adresse" class="form-control" placeholder="{{ __('home.ereg') }}" @if(app()->getLocale() == 'ar')
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
                        </div>
                        <!--/ End Single Tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Area -->



@section('scripts')

<script>

        

</script>

@stop