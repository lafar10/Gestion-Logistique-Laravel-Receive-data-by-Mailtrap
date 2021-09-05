@extends('Admin.Master_Admin')

@section('title', 'Factures Crud')

@section('content')


    <div class="container">

        <h5><a href="{{route('Dashboard')}}">Dashboard</a> > La Liste Des Factures</h5> 

        <br>
        <div class="container-fluid">
            <form class="d-flex justify-content-center" action="{{route('Search_Facture')}}" method="GET">
                @csrf
                <input class="form-control" type="search" name="search_facture" style="width:400px;" placeholder="Search" aria-label="Search">
                &nbsp;&nbsp;
                <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-fw fa-search"></i></button>
                &nbsp;&nbsp;
                <a href="{{route('Create_Facture')}}" class="btn btn-outline-secondary">Ajouter Facture</a>
                &nbsp;&nbsp;     
                <a class="btn btn-outline-success" href="{{route('Factures')}}"><i class="fas fa-fw fa-redo"></i></a>
            
              </form>
            @if($factures->count() >0)
            <div class="card-body">
                
                  <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Télé</th>
                                <th>Adresse</th>
                                <th>Poids Total</th>
                                <th>Montant Total</th>
                                <th>Vahicule Type</th>
                                <th>Lieu Ramassage</th>
                                <th>Lieu Depose</th>
                                <th>Date Ramassage</th>
                                <th>Heure</th>
                                <th>Minutes</th>
                                <th>period</th>
                                <th>etat facture</th>
                                <th>Opérations</th>
                                <th>PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach($factures as $facture)
                            <tr>
                               <td>{{$facture->id}}</td>
                               <td>{{$facture->name}}</td>
                               <td>{{$facture->prenom}}</td>
                               <td>{{$facture->email}}</td>
                               <td>{{$facture->tel}}</td>
                               <td>{{$facture->adresse}}</td>
                               <td>{{$facture->poids}}</td>
                               <td>{{$facture->montant_total}}</td>
                               <td>{{$facture->vehicule_type}}</td>
                               <td>{{$facture->lieu_ramassage}}</td>
                               <td>{{$facture->lieu_depose}}</td>
                               <td>{{$facture->date_ramassage}}</td>
                               <td>{{$facture->heure}}</td>
                               <td>{{$facture->minutes}}</td>
                               <td>{{$facture->period}}</td>
                               <td>{{$facture->etat_facture}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-3 col-12">
                                                <form action="{{ route('Edit_Facture') }}" method="get">
                                                    <input type="hidden" name="facture_id" value="{{$facture->id}}">
                                                    <button type="submit" class="btn btn-outline-primary">
                                                        <i class="fas fa-pen fa-sm text-grey-50"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="col-lg-3 col-12">
                                                <form action="{{route('Delete_Facture')}}" method="POST" onsubmit="return confirm('Vous étes Sur ??')" class="d-flex">
                                                    @csrf
                                                    <input type="hidden" name="facture_id" value="{{$facture->id}}">
                                                    <button type="submit" class="btn btn-outline-danger">
                                                        <i class="fas fa-trash fa-sm text-grey-50"></i>
                                                    </button>
                                                </form>
                                            </div>
                                           
                                        </div>
                                    </td>
                                    <td>
                                        
                                        <div class="col-lg-3 col-12">
                                            <form action="{{route('Pdf_Facture')}}" method="GET">
                                                @csrf
                                                <input type="hidden" name="facture_id" value="{{$facture->id}}">
                                                <button type="submit" class="btn btn-outline-warning">
                                                    <i class="fas fa-file-pdf"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    {{$factures->Links()}}
                </div>
                <style>
                    .w-5{
                        display:none;
                    }
                    
                </style>
            </div>
            <br>
            @else
                <div class="d-flex justify-content-center">
                    <h3>Tableau Vide</h3>
                </div>
            @endif
        </div>
    </div>



@stop
