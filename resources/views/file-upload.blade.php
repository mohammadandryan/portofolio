@extends('Layout.main')
@section('content')
    <h2>File Upload</h2>
    <br>
    <form action="{{ url('file-upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="berkas" clas>Gambar Profil</label>
        <input type="file" name="berkas" id="berkas" class="form-control-file">
        @error('berkas')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <button class="btn btn-primary mt-2">Upload</button>
    </form>
@endsection
