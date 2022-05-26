@extends('Layout.main')

@section('menuhome', 'active')
@include('Layout.navbar')
@section('content')
    <div class="col text-center">
        @if (auth()->guard('talentas')->check())
            Halo, {{ auth()->guard('talentas')->user()->nama }}
        @endauth
        <h1>Halaman Awal</h1>
        <h2 class=" btn btn-success mt-1 mb-5">Coming Soon! <i class="bi text-warning bi-emoji-kiss-fill"></i></h2>
        <br>
        <img class="imgcontrol" src="img/tunggu.png" alt="">

</div>
@endsection
