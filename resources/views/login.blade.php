@extends('Layout.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style='border:3px solid #084595'>
                    <div class="card-header bg-bdark">
                        <b>Login</b>
                    </div>
                    <div class="card-body bgdark">
                        <form action="{{ url('/proses-masuk') }}" method="get">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input name="email" type="email" class=" @error('email') is-invalid @enderror  form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="masukkan email anda">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class=" @error('password') is-invalid @enderror form-control"
                                    id="exampleInputPassword1" name="password" placeholder="masukkan password anda">
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <button type="submit" class="nodec btn bg-bdark mb-3 text-light ">
                                <b>Submit</b></button>
                            <div class="text-center">
                                <p>belum punya akun? <a href="daftar">registrasi</a></p>
                                <p>Kembali ke <a href="/">Home</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
