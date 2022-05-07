@extends('Layout.main')
@include('Layout.navbar')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-xl-6">
            <h1>Pendaftaran Mahasiswa</h1>
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form action="{{ url('/proses-form-validator') }}" method="POST">
                @csrf
                <div class="mb-3 mt-4">
                    <label for="nim" class="form-label ">Nim : </label>
                    <input type="text" name="nim" id="nim" class="form-control @error('nim') is-invalid @enderror"
                        value="{{ old('nim') }}">
                    @error('nim')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">Nama lengkap: </label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror"
                        value="{{ old('nama') }}">
                    @error('nama')
                        <div class="text-danger">{{ $message }}
                        </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="email" class="form-label">Email : </label>
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Jenis Kelamin :</label> <br>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki_laki" value="L"
                            {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }}>
                        <label class="form-check-label" for="laki_laki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="P"
                            {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}>
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                    @error('jenis_kelamin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label"></label>
                    <select class="form-select" name="jurusan" id="jurusan">
                        <option value="Teknik Informatika"
                            {{ old('jurusan') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik
                            Informatika</option>
                        <option value="Sistem Informasi" {{ old('jurusan') == 'Sistem Informasi' ? 'selected' : '' }}>
                            Sistem
                            Informasi</option>
                        <option value="Ilmu Komputer" {{ old('jurusan') == 'Ilmu Komputer' ? 'selected' : '' }}>Ilmu
                            Komputer
                        </option>
                        <option value="Teknik Komputer" {{ old('jurusan') == 'Teknik Komputer' ? 'selected' : '' }}>
                            Teknik
                            Komputer
                        </option>
                        <option value="Teknik Telekomunikasi"
                            {{ old('jurusan') == 'Teknik Telekomunikasi' ? 'selected' : '' }}>
                            Teknik Telekomunikasi</option>
                    </select>
                    @error('jurusan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat"
                        rows="3">{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>


            </form>
        </div>

    </div>
@endsection
