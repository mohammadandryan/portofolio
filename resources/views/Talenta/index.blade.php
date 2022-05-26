@extends('Layout.main')
@include('Layout.navbar')
@section('content')
    <div class="col text-center">
        <div class="py-4 d-flex justify-content-between align-items-center">
            <h2 class="mr-auto">Temukan Talenta</h2>
            {{-- <a href="{{ route('talentas.create') }}" class="btn bg-bdark text-white">Tambah Talenta</a> --}}
        </div>

        @if (session()->has('status'))
            <div class="alert text-center alert-success alert-dismissible fade show">
                {{ session()->get('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container">

            <div class="row justify-content-center">
                @foreach ($talentas as $t)
                    <div class="col-sm-6 col-md-4 col-xl-3 ps-4 mb-5">
                        @component('component.talentcard')
                            @slot('link')
                                @php
                                    echo asset('img/' . $t->link);
                                @endphp
                            @endslot
                            @slot('profil')
                                @php
                                    echo url('talentas/' . $t->id);
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
