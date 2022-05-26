<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Talenta;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;
use App\Models\User;
use Illuminate\Support\Facades\Auth;





class TalentController extends Controller {
    public function prosesDaftar(Request $request){
    //     $rules = [
    //         'nama' => 'required|min:1|max:50',
    //         'email' => 'required|email|unique:talentas',
    //         'password' => 'required|min:5|max:50'
    //        ];

    //        $eror_message = [
    //         'required' => ':attribute harus diisi',
    //         'min' => ':attribute harus berisi minimal :min karakter',
    //         'size' => ':attribute harus berisi :size karakter',
    //         'max' => ':attribute harus berisi maksimal :min karakter',
    //         'email' => 'Inputan harus berisi email'
    //        ];
    //        $validator = Validator::make($request->all(),$rules,$eror_message);
    //        if ($validator->fails()) {
    //           return redirect('/daftar')->withInput()
    //           ->withErrors($validator);
    //        }

    //     $talenta = new Talenta;
    //     $talenta->nama=$request->nama;
    //     $talenta->email=$request->email;
    //     $talenta->password=$request->password;
    //     $talenta->created_at=now();
    //     $validateData['password'] = bcrypt($request->password);
    //     if (!isset($error)) {
    //         echo "<script>alert('Anda Berhasil Mendaftar, Silahkan Login')</script>";
    //         $talenta->save();
    //         return view('login');

    //     }
        $validateData = $request->validate([
            'nama' => 'required|min:1|max:50',
            'email' => 'required|email:dns|unique:talenta',
            'password' => 'required|min:5|max:50'
        ]);
        if($request->password != $request->cpassword){
            return redirect('/daftar')->with('error', 'Password tidak sama');
        }
        $validateData['password'] = bcrypt($request->password);
        Talenta::create($validateData);
        session()->flash('success', 'Berhasil mendaftar');
        return redirect('/login')->with('success', 'Berhasil mendaftar');
    }

    public function prosesMasuk(Request $request){
        // $rules = [
        //     'email' => 'required|email',
        //     'password' => 'required|min:5|max:50'
        //    ];

        //    $eror_message = [
        //     'required' => ':attribute harus diisi',
        //     'min' => ':attribute harus berisi minimal :min karakter',
        //     'size' => ':attribute harus berisi :size karakter',
        //     'max' => ':attribute harus berisi maksimal :min karakter',
        //     'email' => 'Inputan harus berisi email'
        //    ];
        //    $validator = Validator::make($request->all(),$rules,$eror_message);
        //    if ($validator->fails()) {
        //       return redirect('/login')->withInput()
        //       ->withErrors($validator);
        //    } else {
        //     $talenta = Talenta::where('email', $request->email)->first();
        //    if(isset($talenta->password)){
        //     if ($talenta->password==$request->password){
        //         return view('profil')->with('talenta', $talenta);
        //     } else {
        //         echo "
        //         <script>
        //         alert('username atau password salah')
        //         </script>
        //         ";
        //         return view('login');
        //     }
        //    }else {
        //     echo "
        //     <script>
        //     alert('Akun belum terdaftar')
        //     </script>
        //     ";
        //     return view('login');
        // }
        $credentials= $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::guard('talentas')->attempt($credentials)) {
            // Authentication passed...
            $request->session()->regenerate();
            return redirect()->intended('/')->with('berhasil', 'selamat datang');
      
        } 
return back()->with('loginEror', 'Email atau Password salah');

        

           }


           public function findTalenta(){
               $talentas = Talenta::get();
               return view('findTalenta')->with('talentas', $talentas);
           }
           public function cari(Request $request){
                $talentas = Talenta::where('nama','LIKE','%'.$request->input.'%')
                ->orWhere('talent', 'LIKE', '%'.$request->input.'%')->get();
               return view('talenta.index')->with('talentas', $talentas);
           }

           
           
}
