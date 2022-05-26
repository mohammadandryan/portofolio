@extends('Layout.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="border:3px solid #084595">
                <div class="card-header bg-bdark">
                    <b> Registrasi</b>
                </div>
                <div class="card-body bgdark">
                    <form action="{{ url('/proses-daftar') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" class=" @error('nama') is-invalid @enderror form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" name="nama"
                                placeholder="masukkan Nama ">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class=" form-label">Email</label>
                            <input type="email" class=" @error('email') is-invalid @enderror form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                                placeholder="masukkan email ">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class=" @error('password') is-invalid @enderror form-control"
                                id="exampleInputPassword1" name="password" placeholder="masukkan password ">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                 <input type="password" class="@error('password') is-invalid @enderror form-control"
                                id="exampleInputPassword1" name="cpassword" placeholder="Konfirmasi password anda ">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn bg-bdark text-light mb-3"><b>Submit</b></button>
                        <div class="text-center">
                            <p>sudah punya akun? <a href="login">kembali</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
