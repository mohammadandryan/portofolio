<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }
    public function prosesFileUpload(Request $request){

        if($request->hasFile('berkas')){
            // echo "path() : ".$request->berkas->path();
            // echo "<br>";
            // echo "extension() : ".$request->berkas->extension();
            // echo "<br>";
            // echo "getClientOriginalExtension() : ".$request->berkas->getClientOriginalExtension();
            // echo "<br>";
            // echo "getMimeType() : ".$request->berkas->getClientMimeType();
            // echo "<br>";
            // echo "getClientOriginalName() : ".$request->berkas->getClientOriginalName();
            // echo "<br>";
            // echo "getSize() : ".$request->berkas->getSize();
            $request->validate([
                'berkas' => 'file|required|max:2048'
            ]);
            // $ekt = $request->berkas->getClientOriginalExtension();
            // $namaFile = md5(time()).'.'.$ekt;
            // $request->file('berkas')->storeAs('public/file', $namaFile);
            // $path = asset('storage/file/'.$namaFile);
            // echo "Berhasil diupload disini <a href='$path'>disini.</a>";
            $ekt = $request->berkas->getClientOriginalExtension();
            $namaFile = md5(time()).'.'.$ekt;
            $path = $request->file('berkas')->move('public/file', $namaFile);
            // $path = asset('storage/file/'.$namaFile);
            echo "Berhasil diupload disini <a href='$path'>disini.</a>";
        }
        else {
            echo "Tidak ada file yang diupload";
        }
    }
}
?>

