@extends('Layout.main')
@include('Layout.navbar')
@section('content')
    <div class="col-12">
        <marquee behavior="" scrollamount="15" class=" pt-2 bdblue shadow-lg pb-2 rounded-5 bgdark2" direction="">
            <h2>Aku sudah pernah merasakan semua kepahitan dalam hidup dan yang paling pahit ialah berharap kepada
                manusia. - Ali bin Abi Tholib</h2>
        </marquee>
    </div>


    <div class="row mt-4 pt-4 align-items-center justify-content-center">
        <div class="col-sm-4 pe-5 d-inline-block">
            <img src="{{ asset('img/' . $talent->link) }}" class="imgprofil rounded-circle card-img-top" alt="...">
        </div>
        <div class="col-sm-6 text-center ps-4 d-inline-block">
            <h1>{{ $talent->nama }}</h1>
            <div class="btn bg-bdark text-white mb-2"><b>{{ $talent->talent }}</b></div>
            <p>{{ $talent->desc }}</p>
        </div>
    </div>
@endsection
