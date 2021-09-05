@extends('Front.Master')

@section('title', 'Home')

@section('content')
<br>
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success" align="center">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
@include('Front.Forms')
@include('Front.just')

@include('Front.QuiNous')
@include('Front.Services')
@include('Front.Owl')

@stop
