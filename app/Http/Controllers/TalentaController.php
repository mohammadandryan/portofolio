<?php

namespace App\Http\Controllers;

use App\Models\Talenta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;


class TalentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talentas = Talenta::all();
        return view('talenta.index')->with('talentas', $talentas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('talenta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email|unique:talentas',
            'nama' => 'required',
            'password' => 'required',
            'link' => '',
            'talent' => 'required',
            'desc' => 'required',
            'marque' => 'required',
        ]);
        if($request->password != $request->cpassword){
            return redirect('/daftar')->with('error', 'Password tidak sama');
        }
        $validateData['password'] = bcrypt($request->password);
        Talenta::create($validateData);
        return redirect()->route('talentas.index')->with('status', 'Data Berhasil Ditambahkan');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talenta  $talenta
     * @return \Illuminate\Http\Response
     */
    public function show(Talenta $talenta)
    {
        Talenta::find($talenta);
        return view('talenta.show')->with('talenta', $talenta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talenta  $talenta
     * @return \Illuminate\Http\Response
     */
    public function edit(Talenta $talenta)
    {
        return view('talenta.edit')->with('talenta', $talenta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Talenta  $talenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talenta $talenta)
    {
        if($request->hasFile('berkas')){
            $request->validate([
                'berkas' => 'file|required|max:2048'
            ]);
            $ekt = $request->berkas->getClientOriginalExtension();
            $namaFile = md5(time()).'.'.$ekt;
            $path = $request->file('berkas')->move('img', $namaFile);
            $talenta->link = $namaFile;
            $talenta->save();
        }
        
        $validateData = $request->validate([
            'email' => 'required|email|unique:talentas,email,'.Auth::guard('talentas')->user()->id,
            'nama' => 'required',
            'password' => 'required',
            'link' => '',
            'talent' => 'required',
            'desc' => '',
            'marque' => '',
        ]);
        $talenta->update($validateData);
        session()->flash('status', 'Update Data '.$validateData["nama"]. ' berhasil');
        $id = Auth::guard('talentas')->user()->id;
        return redirect()->route('profil',['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talenta  $talenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talenta $talenta)
    {
        $talenta->delete();
        session()->flash('status', 'Hapus Data '.$talenta["nama"]. ' berhasil');
        return redirect()->route('talentas.index');
    }

    public function prosesMasuk(Request $request){
        $credentials= $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::guard('talentas')->attempt($credentials)) {
            // Authentication passed...
            $request->session()->regenerate();
            $id = Auth::guard('talentas')->user()->id;
            return redirect()->intended('/profil/'.$id)->with('berhasil', 'selamat datang');
      
        } 
            return back()->with('loginEror', 'Email atau Password salah');
    }

    public function prosesLogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('berhasil', 'Berhasil Logout');
    }

    public function profil($id){
        $talenta = Talenta::find($id);
        return view('talenta.profil')->with('talenta', $talenta);
    }

    public function exportPdf(){
        
        $id = Auth::guard('talentas')->user()->id;
        $nama = Auth::guard('talentas')->user()->nama;
        $talenta = Talenta::find($id);
        
        //create dompdf
       
        $dompdf = new Dompdf();

        $html = view('pdfprint',$talenta);
        $dompdf->loadHtml($html);
      
        $dompdf->render();
       $dompdf->stream('CV - '.$nama. '.pdf');
    }
}
