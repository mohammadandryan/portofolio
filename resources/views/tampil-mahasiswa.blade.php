@extends('Layout.main')
@include('Layout.navbar')
@section('content')
    <div class="container text-center p-4">
        <h1>Data Mahasiswa</h1>
        {{-- @dump($mahasiswas); --}}
        {{-- {{ $mahasiswas[0] }} --}}
        <div class="row">
            <div class="m-auto">
                <ol class="list-group">
                    @if (!isset($mahasiswas[0]))
                        <li class="list-group-item">
                            <div class="alert alert-danger d-inline-block">
                                Tidak ada data
                            </div>
                        </li>
                    @else
                        @forelse ($mahasiswas as $mahasiswa)
                            <li class="list-group-item">
                                {{ $mahasiswa->nama }}({{ $mahasiswa->nim }}), Tanggal Lahir :
                                {{ $mahasiswa->tanggal_lahir }}, IPK : {{ $mahasiswa->ipk }}
                            </li>

                        @empty
                            <div class="alert alert-warning d-inline-block">
                                Tidak ada data
                            </div>
                        @endforelse
                    @endif

                </ol>
            </div>
        </div>
    </div>
@endsection
