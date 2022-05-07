<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Talent;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;

class TalentController extends Controller {
    public function prosesDaftar(Request $request){
        $rules = [
            'nama' => 'required|min:1|max:50',
            'email' => 'required|email',
            'password' => 'required|min:5|max:50'
           ];

           $eror_message = [
            'required' => ':attribute harus diisi',
            'min' => ':attribute harus berisi minimal :min karakter',
            'size' => ':attribute harus berisi :size karakter',
            'max' => ':attribute harus berisi maksimal :min karakter',
            'email' => 'Inputan harus berisi email'
           ];
           $validator = Validator::make($request->all(),$rules,$eror_message);
           if ($validator->fails()) {
              return redirect('/daftar')->withInput()
              ->withErrors($validator);
           }
        $talent = new Talent;
        $talent->nama=$request->nama;
        $talent->email=$request->email;
        $talent->password=$request->password;
        $talent->created_at=now();

        if (!isset($error)) {
            echo "<script>alert('Anda Berhasil Mendaftar, Silahkan Login')</script>";
            $talent->save();
            return view('login');

        }
    }

    public function prosesMasuk(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:5|max:50'
           ];

           $eror_message = [
            'required' => ':attribute harus diisi',
            'min' => ':attribute harus berisi minimal :min karakter',
            'size' => ':attribute harus berisi :size karakter',
            'max' => ':attribute harus berisi maksimal :min karakter',
            'email' => 'Inputan harus berisi email'
           ];
           $validator = Validator::make($request->all(),$rules,$eror_message);
           if ($validator->fails()) {
              return redirect('/login')->withInput()
              ->withErrors($validator);
           } else {
            $talent = Talent::where('email', $request->email)->first();
           if(isset($talent->password)){
            if ($talent->password==$request->password){
                return view('profil')->with('talent', $talent);
            } else {
                echo "
                <script>
                alert('username atau password salah')
                </script>
                ";
                return view('login');
            }
           }else {
            echo "
            <script>
            alert('Akun belum terdaftar')
            </script>
            ";
            return view('login');
        }

        }
           }


           public function findTalent(){
               $talents = Talent::get();
               return view('findTalent')->with('talents', $talents);
           }
           public function cari(Request $request){
                $talents = Talent::where('nama','LIKE','%'.$request->input.'%')
                ->orWhere('talent', 'LIKE', '%'.$request->input.'%')->get();
               return view('findTalent')->with('talents', $talents);
           }
}
