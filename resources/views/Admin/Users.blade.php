@extends('Admin.Master_Admin')

@section('title', 'Users Crud')

@section('content')


    <div class="container">

        <h5><a href="{{route('Dashboard')}}">Dashboard</a> > La Liste Des Utilisateurs</h5>

        <br>
        <div class="container-fluid">
            <form class="d-flex  justify-content-center" action="{{ route('Search_User')}}" method="GET">
                @csrf
                <input class="form-control" style="width:400px;" name="search_user" type="search" placeholder="Search" aria-label="Search">
                &nbsp;&nbsp;
                <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-fw fa-search"></i></button>
                &nbsp;&nbsp;
                <a class="btn btn-outline-success" href="{{route('Users')}}"><i class="fas fa-fw fa-redo"></i></a>
              </form>
            <!-- Page Heading -->
            @if($users->count() >0)
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
                                <th>Ville</th>
                                <th>Region</th>
                                <th>User Type</th>
                                <th>Societe Nom</th>
                                <th>Site Web</th>
                                <th>RC</th>
                                <th>ICE</th>
                                <th> Operations </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                   <td>{{$user->id}}</td>
                                   <td>{{$user->name}}</td>
                                   <td>{{$user->prenom}}</td>
                                   <td>{{$user->email}}</td>
                                   <td>{{$user->tel}}</td>
                                   <td>{{$user->adresse}}</td>
                                   <td>{{$user->ville}}</td>
                                   <td>{{$user->region}}</td>
                                   <td>{{$user->user_type}}</td>
                                   <td>{{$user->societe_name}}</td>
                                   <td>{{$user->site_web}}</td>
                                   <td>{{$user->rc}}</td>
                                   <td>{{$user->ice}}</td>
                                    <td>
                                        <div>
                                            <div class="row">
                                                <div class="col-lg-6 col-12">
                                                    <form action="{{ route('edit.user') }}" method="get">
                                                        <input type="hidden" name="user_id" value="{{$user->id}}">
                                                        <button type="submit" class="btn btn-outline-primary">
                                                            <i class="fas fa-pen fa-sm text-grey-50"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                                <div class="col-lg-6 col-12">
                                                    <form action="{{route('delete.user')}}" method="POST" onsubmit="return confirm('Are You Sure ??')" class="d-flex">
                                                        @csrf
                                                        <input type="hidden" name="user_id" value="{{$user->id}}">
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
                    {{$users->Links()}}
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
