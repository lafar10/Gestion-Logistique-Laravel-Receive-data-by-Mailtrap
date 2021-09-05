@extends('Admin.Master_Admin')

@section('title', 'Orders Crud')

@section('content')


    <div class="container">

        <h5><a href="{{route('Dashboard')}}">Dashboard</a> > La Liste Des Commandes </h5>

        <br>
        <div class="container-fluid">
            <form class="d-flex justify-content-center" action="{{route('Search_Order')}}" method="GET">
                @csrf
                <input class="form-control" type="search" name="search_commande" style="width:400px;" placeholder="Search" aria-label="Search">
                &nbsp;&nbsp;
                <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-fw fa-search"></i></button>
                &nbsp;&nbsp;
                <a href="{{route('Create_Order')}}" class="btn btn-outline-secondary">Ajouter Commande</a>
                &nbsp;&nbsp;     
                <a class="btn btn-outline-success" href="{{route('Orders')}}"><i class="fas fa-fw fa-redo"></i></a>
            
              </form>
            <!-- Page Heading -->
            @if($orders->count() >0)
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
                                <th>Vehicule Type</th>
                                <th>Lieu Ramassage</th>
                                <th>Lieu Dépose</th>
                                <th>Date Ramassage</th>
                                <th>Heure</th>
                                <th>Minutes</th>
                                <th>Period</th>
                                <th>Etat Commande</th>
                                <th> Operations </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                                <tr>
                                   <td>{{$order->id}}</td>
                                   <td>{{$order->name}}</td>
                                   <td>{{$order->prenom}}</td>
                                   <td>{{$order->email}}</td>
                                   <td>{{$order->tel}}</td>
                                   <td>{{$order->adresse}}</td>
                                   <td>{{$order->vehicule_type}}</td>
                                   <td>{{$order->lieu_ramassage}}</td>
                                   <td>{{$order->lieu_depose}}</td>
                                   <td>{{$order->date_ramassage}}</td>
                                   <td>{{$order->heure}}</td>
                                   <td>{{$order->minutes}}</td>
                                   <td>{{$order->period}}</td>
                                   <td>{{$order->etat}}</td>
                                    <td>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <form action="{{ route('Edit_Order') }}" method="get">
                                                        <input type="hidden" name="order_id" value="{{$order->id}}">
                                                        <button type="submit" class="btn btn-outline-primary">
                                                            <i class="fas fa-pen fa-sm text-grey-50"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <form action="{{route('delete.order')}}" method="POST" onsubmit="return confirm('Vous étes Sur ??')" class="d-flex">
                                                        @csrf
                                                        <input type="hidden" name="order_id" value="{{$order->id}}">
                                                        <button type="submit" class="btn btn-outline-danger">
                                                            <i class="fas fa-trash fa-sm text-grey-50"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    {{$orders->Links()}}
                </div>
                <style>
                    .w-5{
                        display:none;
                    }
                    
                </style>
            </div>

                @else
                    <div class="d-flex justify-content-center">
                        <h3>Tableau Vide</h3>
                    </div>
                @endif

        </div>
    </div>



@stop
