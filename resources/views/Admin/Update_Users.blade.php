@extends('Admin.Master_Admin')

@section('title', 'Modifier User')

@section('content')


<div class="container">

    <h5><a href="{{route('Dashboard')}}">Dashboard</a> > Modifier User {{$users->name}}</h5> 

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
                                        <form class="form" method="post" action="{{route('update.user')}}">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{$users->id}}" >
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Nom</label>
                                                        <input name="name" class="form-control" type="text" value="{{$users->name}}" style="border-radius: 0%;" placeholder="">
                                                    </div>
                                                    @if($errors->has('name'))
                                                    <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                                @endif
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Prenom</label>
                                                        <input name="prenom" class="form-control" type="text"  value="{{$users->prenom}}" style="border-radius: 0%;" placeholder="">
                                                    </div>
                                                    @if($errors->has('prenom'))
                                                    <div class="error" style="color:red;">{{ $errors->first('prenom') }}</div>
                                                @endif
                                                </div>       
                                                <div class="col-lg-12 col-12">
                                                    <div class="form-group message">
                                                        <label>ADRESSE</label>
                                                        <input name="adresse" class="form-control"  value="{{$users->adresse}}" style="border-radius: 0%;" placeholder="">
                                                    </div>
                                                    @if($errors->has('adresse'))
                                                        <div class="error" style="color:red;">{{ $errors->first('adresse') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Télé</label>
                                                        <input name="tel" class="form-control" type="text"  value="{{$users->tel}}" style="border-radius: 0%;" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Ville</label>
                                                        <input name="ville" class="form-control" type="text"  value="{{$users->ville}}" style="border-radius: 0%;" placeholder="">
                                                    </div>
                                                    @if($errors->has('ville'))
                                                    <div class="error" style="color:red;">{{ $errors->first('ville') }}</div>
                                                @endif
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Region</label>
                                                        <input name="region" class="form-control" type="text"  value="{{$users->region}}" style="border-radius: 0%;" placeholder="">
                                                    </div>
                                                    @if($errors->has('region'))
                                                    <div class="error" style="color:red;">{{ $errors->first('region') }}</div>
                                                @endif
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>User Type</label>
                                                        <select name="user_type" class="form-control" style="border-radius: 0%;" >
                                                            <option  value="{{$users->user_type}}">user</option>
                                                            <option>admin</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Site Web</label>
                                                        <input name="site_web" type="text"  value="{{$users->site_web}}" class="form-control" style="border-radius: 0%;" >           
                                                    </div>
                                                    @if($errors->has('site_web'))
                                                        <div class="error" style="color:red;">{{ $errors->first('site_web') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Nom Societé</label>
                                                        <input name="societe_name" type="text" class="form-control"  value="{{$users->societe_name}}" style="border-radius: 0%;" >           
                                                    </div>
                                                    @if($errors->has('societe_name'))
                                                        <div class="error" style="color:red;">{{ $errors->first('societe_name') }}</div>
                                                    @endif
                                                </div>
                                                
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>RC</label>
                                                        <input name="rc" type="text" class="form-control"  value="{{$users->rc}}" style="border-radius: 0%;" >           
                                                    </div>
                                                    @if($errors->has('rc'))
                                                        <div class="error" style="color:red;">{{ $errors->first('rc') }}</div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>ICE</label>
                                                        <input name="ice" type="text" class="form-control"  value="{{$users->ice}}" style="border-radius: 0%;" >           
                                                    </div>
                                                    @if($errors->has('ice'))
                                                        <div class="error" style="color:red;">{{ $errors->first('ice') }}</div>
                                                    @endif
                                                </div>
                                                
                                                <div class="col-12">
                                                    <div class="form-group button" align="center">
                                                        <button type="submit" style="border-radius: 0%;"  class="btn btn-outline-secondary">Modifier</button>
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