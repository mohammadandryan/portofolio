@extends('Layout.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="border:3px solid #084595">
                <div class="card-header bg-bdark">
                    <b> Perbarui Data</b>
                </div>
                <div class="card-body bgdark">
                    <form action="{{ route('talentas.update', ['talenta' => $talenta->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class=" form-label">Email</label>
                            <input value="{{ $talenta->email }}" type="email"
                                class=" @error('email') is-invalid @enderror form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email" placeholder="masukkan email ">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" class=" @error('nama') is-invalid @enderror form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" name="nama"
                                placeholder="masukkan Nama " value="{{ $talenta->nama }}">
                            @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input value="{{ $talenta->nama }}" type="password"
                                class=" @error('password') is-invalid @enderror form-control" id="exampleInputPassword1"
                                name="password" placeholder="masukkan password ">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input value="{{ $talenta->password }}" type="password"
                                class="@error('password') is-invalid @enderror form-control" id="exampleInputPassword1"
                                name="cpassword" placeholder="Konfirmasi password anda ">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="talent" class="form-label">Your Talent</label>
                            <input value="{{ $talenta->talent }}" type="text"
                                class="@error('talent') is-invalid @enderror form-control" id="talent" name="talent"
                                placeholder="Tuliskan talent anda ">
                            @error('talent')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Your Description</label>
                            <textarea class="@error('desc') is-invalid @enderror form-control" id="desc" name="desc"
                                placeholder="Tuliskan deskripsi anda ">{{ $talenta->desc }}</textarea>
                            @error('desc')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="marque" class="form-label">Your Quotes</label>
                            <textarea class="@error('marque') is-invalid @enderror form-control" id="marque" name="marque"
                                placeholder="Tuliskan quotes anda ">{{ $talenta->marque }}</textarea>
                            @error('marque')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn bg-bdark text-light mb-3"><b>Update</b></button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
