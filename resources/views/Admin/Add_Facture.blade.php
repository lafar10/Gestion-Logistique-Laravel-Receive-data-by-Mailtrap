@extends('Admin.Master_Admin')

@section('title', 'Ajouter Facture')

@section('content')



<div class="container">

    <h5><a href="{{route('Dashboard')}}">Dashboard</a> > Ajouter Facture</h5>

    <br>
    <div class="row">
        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="form-main">
                                        <form action="{{route('Store_Facture')}}" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>NOM<span>*</span></label>
                                                        <input name="name" class="form-control" type="text"  style="border-radius: 0%;" placeholder="">
                                                        @if($errors->has('name'))
                                                            <div class="error" style="color:red;font-size:17px;width:360px;margin-top:5px;">{{ $errors->first('name') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>PRENOM<span>*</span></label>
                                                        <input name="prenom" class="form-control" type="text" style="border-radius: 0%;" placeholder="">
                                                        @if($errors->has('prenom'))
                                                            <div class="error" style="color:red;font-size:17px;width:360px;margin-top:5px;">{{ $errors->first('prenom') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Email<span>*</span></label>
                                                        <input name="email" class="form-control" type="email"  style="border-radius: 0%;" placeholder="">
                                                        @if($errors->has('email'))
                                                            <div class="error" style="color:red;font-size:17px;width:360px;margin-top:5px;">{{ $errors->first('email') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Téléphone<span>*</span></label>
                                                        <input name="tel" class="form-control" type="text"  style="border-radius: 0%;" placeholder="">
                                                        @if($errors->has('tel'))
                                                            <div class="error" style="color:red;font-size:17px;width:360px;margin-top:5px;">{{ $errors->first('tel') }}</div>
                                                        @endif
                                                    </div>

                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>ADRESSE<span>*</span></label>
                                                        <input name="adresse" class="form-control"  style="border-radius: 0%;" placeholder="">

                                                        @if($errors->has('adresse'))
                                                            <div class="error" style="color:red;font-size:17px;width:360px;margin-top:5px;">{{ $errors->first('adresse') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Poids Total<span>*</span></label>
                                                        <input name="poids" class="form-control" type="text"  style="border-radius: 0%;" placeholder="">
                                                        @if($errors->has('poids'))
                                                            <div class="error" style="color:red;font-size:17px;width:360px;margin-top:5px;">{{ $errors->first('poids') }}</div>
                                                        @endif
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Montant Total<span>*</span></label>
                                                        <input name="montant_total" class="form-control" type="text"  style="border-radius: 0%;" placeholder="">
                                                        @if($errors->has('montant_total'))
                                                            <div class="error" style="color:red;font-size:17px;width:360px;margin-top:5px;">{{ $errors->first('montant_total') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Véhicule Type<span>*</span></label>
                                                        <br>
                                                        <select class="form-control" name="vehicule_type" style="border-radius: 0%;" id="slt">
                                                            <option>TRIPORTEUR</option>
                                                            <option>PICK-UP</option>
                                                            <option>CAMIONNETE</option>
                                                            <option>HONDA</option>
                                                            <option>CAMION</option>
                                                            <option>REMOQUE</option>
                                                            <option>CAMION A BENNE</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>LIEU DE RAMASSAGE<span>*</span></label>
                                                        <input name="lieu_ramassage" list="datalistOptions" id="exampleDataList" class="form-control" type="text"  style="border-radius: 0%;" placeholder="">
                                                        <datalist id="datalistOptions">
                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                <option   value="{{$value->ville}}">
                                                            @endforeach
                                                        </datalist>
                                                        @if($errors->has('lieu_ramassage'))
                                                            <div class="error" style="color:red;font-size:17px;width:360px;margin-top:5px;">{{ $errors->first('lieu_ramassage') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>LIEU DE DEPOSE<span>*</span></label>
                                                        <input name="lieu_depose" class="form-control" list="datalistOptions1" id="exampleDataList1" type="text" style="border-radius: 0%;" placeholder="">
                                                        <datalist id="datalistOptions1">
                                                            @foreach (\App\Models\Ville::orderBy('ville','asc')->get() as $value)
                                                                <option   value="{{$value->ville}}">
                                                            @endforeach
                                                        </datalist>
                                                        @if($errors->has('lieu_depose'))
                                                            <div class="error" style="color:red;font-size:17px;width:360px;margin-top:5px;">{{ $errors->first('lieu_depose') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>DATE DE RAMASSAGE<span>*</span></label>
                                                        <input name="date_ramassage" class="form-control" type="date"  style="border-radius: 0%;" placeholder="">
                                                        @if($errors->has('date_ramassage'))
                                                            <div class="error" style="color:red;font-size:17px;width:360px;margin-top:5px;">{{ $errors->first('date_ramassage') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-12">
                                                    <div class="form-group">
                                                        <label>HEURE<span>*</span></label>
                                                        <br>
                                                        <select class="form-control" name="heure"  style="border-radius: 0%;">
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

                                                    </div>

                                                </div>
                                                <div class="col-lg-2 col-12">
                                                    <div class="form-group">
                                                        <label>MINUTES<span>*</span></label>
                                                        <br>
                                                        <select class="form-control" name="minutes" style="border-radius: 0%;">
                                                            <option>00</option>
                                                            <option>30</option>
                                                        </select>

                                                    </div>

                                                </div>
                                                <div class="col-lg-2 col-12">
                                                    <div class="form-group">
                                                        <label>PERIODE<span>*</span></label>
                                                        <br>
                                                        <select class="form-control" name="period"  style="border-radius: 0%;" id="slt">
                                                            <option>AM</option>
                                                            <option>PM</option>
                                                        </select>

                                                    </div>

                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <div class="form-group">
                                                        <label>Etat Facture<span>*</span></label>
                                                        <br>
                                                        <select class="form-control" name="etat_facture"  style="border-radius: 0%;" id="slt">
                                                            <option>Non</option>
                                                            <option>Oui</option>
                                                        </select>

                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <div class="form-group button" align="center">
                                                        <button type="submit" style="border-radius: 0%;"  class="btn btn-outline-secondary">Ajouter</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
            <!--/ End Contact -->
                        </div>
                    </div>
                </div>



@stop
