@extends('layouts.app')

@section('content')
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item"><a class="nav-link active" href="{{ route('account.home') }}">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Adverts</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Favorites</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Banners</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Tickets</a></li>
    </ul>
@endsection
