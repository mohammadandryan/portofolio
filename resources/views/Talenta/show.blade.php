@extends('Layout.main')
@include('Layout.navbar')
@section('content')
    <div class="col-12">
        <marquee behavior="" scrollamount="15" class=" pt-2 bdblue shadow-lg pb-2 rounded-5 bgdark2" direction="">
            <h2>{{ $talenta->marque }}</h2>
        </marquee>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            @if (session()->has('status'))
                <div class="alert text-center alert-success alert-dismissible fade show">
                    {{ session()->get('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

    <div class="row mt-4 pt-4 align-items-center justify-content-center">
        <div class="col-sm-4 pe-5 d-inline-block">
            <img src="{{ asset('img/' . $talenta->link) }}" class="imgprofil rounded-circle card-img-top" alt="...">
        </div>
        <div class="col-sm-6 text-center ps-4 d-inline-block">
            <h1>{{ $talenta->nama }}</h1>
            <div class="btn bg-bdark text-white mb-2"><b>{{ $talenta->talent }}</b></div>
            <p>{{ $talenta->desc }}</p>
        </div>
    </div>
    <div class="row justify-content-end align-items-center">
        <div class="col-6 py-4 d-flex justify-content-end align-items-center">
            <a href="" class=" btn btnyellow ms-2 mb-2"><b>Cari Loker</b></a>
            <a href="" class=" btn bg-darkgreen ms-2 text-white mb-2"><b>Generate CV</b></a>
            <a href="{{ url('talentas/' . $talenta->id . '/edit') }}" class=" btn bg-bdark ms-2 text-white mb-2"><b>Edit
                    Profil</b></a>
            <form action="{{ route('talentas.destroy', ['talenta' => $talenta->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class=" btn bg-darkred ms-2 text-white mt-2"><b>Hapus
                        Akun</b></button>
            </form>

        </div>
    </div>
    <hr>
    <div class="row mt-3 justify-content-center">
        <div class=" text-center col-sm-10">
            <h1>Tentang Saya</h1>
            <p>Saya Mohammad Andryan, lulusan S1 Teknik Informatika Universitas Negeri Malang tahun 2025. Memiliki
                pengalaman sebagai Admin Web Asrama Universitas Negeri Malang dengan achievement 25% peningkatan performa
                web. Saya memiliki minat berkarir menjadi Artificial Intelligence Developer namun sementara ini masih
                memiliki kemahiran di bidang Full Stack Developer menggunakan Bootstrap dan Laravel</p>
        </div>
    </div>
    <hr>
    <div class="row mb-3 mt-3 justify-content-center">
        <div class="col-sm-4">
            <div class="div mb-3">
                <button class="btn col btnyellow mt-3 align-self-center text-center">Kemampuan dan Kompetensi</button>
            </div>

            <ul class="mt-3">
                <li>Bootstrap</li>
                <li>Laravel</li>
                <li>MySQL</li>
                <li>PHP</li>
                <li>JQuery</li>
            </ul>
        </div>
        <div class="col-sm-4">
            <div class="div mb-3">
                <button class="btn btnyellow mt-3 align-self-center text-center">Pengalaman Kerja</button>
            </div>
            <ul class="mt-2">
                <li>2021 | Admin Gudang | CV. Aneka Pangan | Mencatat pemasukan dan pengeluaran stok produk </li>

            </ul>
        </div>
        <div class="col-sm-3">
            <div class="div mb-3">
                <button class="btn btnyellow mt-3 align-self-center text-center">Riwayat Pendidikan</button>
            </div>
            <ul class="mt-2">
                <li>2021 - 2025 | S1 Teknik Informatika | Universitas Negeri Malang</li>
                <li>2017 - 2020 | MIPA |SMAN 1 Leces</li>
            </ul>
        </div>
        <hr>

    </div>
    </div>
@endsection
