@extends('Admin.Master_Admin')

@section('title', 'Modifier User')

@section('content')



<div class="container">

    <h5><a href="{{route('Dashboard')}}">Dashboard</a> > Modifier User {{$users->name .' '. $users->prenom}}</h5> 

    <br>
    <div class="row">
        <div class="col-lg-12">
            <!-- Start Contact -->
            <section id="contact-us" class="contact-us section">
                <div class="container">
                        <div class="contact-head">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="form-main">
                            <form method="POST" action="{{ route('update.user') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input name="name" type="text" style="border-radius: 0%;" class="form-control" value="{{$users->name}}" placeholder="">
                                            @if($errors->has('name'))
                                                <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Prenom</label>
                                            <input name="prenom" type="text" style="border-radius: 0%;" class="form-control" value="{{$users->prenom}}" placeholder="">
                                            @if($errors->has('prenom'))
                                                <div class="error" style="color:red;">{{ $errors->first('prenom') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    

                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input  type="email" style="border-radius: 0%;" class="form-control" name="email" value="{{ old('email') }}" value="{{$users->email}}"  autocomplete="email">
                                            @if($errors->has('email'))
                                                <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Téléphone</label>
                                            <input name="tel" type="text" style="border-radius: 0%;" class="form-control" value="{{$users->tel}}" placeholder="">
                                            @if($errors->has('tel'))
                                                <div class="error" style="color:red;">{{ $errors->first('tel') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Adresse</label>
                                            <input name="adresse" type="text" class="form-control" style="border-radius: 0%;" value="{{$users->adresse}}" placeholder=""></input>
                                            @if($errors->has('adresse'))
                                                <div class="error" style="color:red;">{{ $errors->first('adresse') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Ville</label>
                                            <input name="ville" type="text" style="border-radius: 0%;" class="form-control" value="{{$users->ville}}" placeholder="">
                                            @if($errors->has('ville'))
                                                <div class="error" style="color:red;">{{ $errors->first('ville') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Region</label>
                                            <input name="region" type="text" style="border-radius: 0%;" class="form-control" value="{{$users->region}}" placeholder="">
                                            @if($errors->has('region'))
                                                <div class="error" style="color:red;">{{ $errors->first('region') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>RC</label>
                                            <input name="rc" type="text" style="border-radius: 0%;" class="form-control" value="{{$users->rc}}" placeholder="">
                                            @if($errors->has('rc'))
                                                <div class="error" style="color:red;">{{ $errors->first('rc') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>ICE</label>
                                            <input name="ice" type="text" style="border-radius: 0%;" class="form-control" value="{{$users->ice}}" placeholder="">
                                            @if($errors->has('ice'))
                                                <div class="error" style="color:red;">{{ $errors->first('ice') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Société</label>
                                            <input name="societe_name" class="form-control" style="border-radius: 0%;" type="text" value="{{$users->societe_name}}" placeholder="">
                                            @if($errors->has('societe_name'))
                                                    <div class="error" style="color:red;">{{ $errors->first('societe_name') }}</div>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Site Web</label>
                                            <input name="site_web" type="text" style="border-radius: 0%;" class="form-control" value="{{$users->site_web}}" placeholder=""></input>
                                            @if($errors->has('site_web'))
                                                <div class="error" style="color:red;">{{ $errors->first('site_web') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <div class="form-group" align="center">
                                            <button type="submit"  class="btn btn-outline-secondary">Modifier</button>
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
</div>




@stop