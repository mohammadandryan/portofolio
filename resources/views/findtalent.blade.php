@extends('Layout.main')
@include('Layout.navbar')
@section('content')
    <div class="col text-center">
        <h1 class="mb-5"><b>Temukan Talenta</b></h1>
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($talents as $t)
                    <div class="col-sm-6 col-md-4 col-xl-3 ps-4 mb-5">
                        @component('component.talentcard')
                            @slot('link')
                                @php
                                    echo asset('img/' . $t->link);
                                @endphp
                            @endslot
                            @slot('profil')
                                @php
                                    echo asset('profil/' . $t->id);
                                @endphp
                            @endslot
                            @slot('nama')
                                @php
                                    echo $t->nama;
                                @endphp
                            @endslot
                            @php
                                echo $t->talent;
                            @endphp
                        @endcomponent
                    </div>
                @endforeach

            </div>
        </div>


    </div>
@endsection
