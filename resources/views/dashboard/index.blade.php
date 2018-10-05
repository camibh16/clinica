@extends('dashboard.layouts-admin.appadmin'));
@section('content')

@include('partials.navbar')
<h1>Hola {{\auth()->user()->name}}</h1>

@endsection