<?php

namespace App\Http\Controllers;

use App\Models\Talenta;
use Illuminate\Http\Request;

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
        $validateData = $request->validate([
            'email' => 'required|email|unique:talentas,email,'.$talenta->id,
            'nama' => 'required',
            'password' => 'required',
            'link' => '',
            'talent' => 'required',
            'desc' => '',
            'marque' => '',
        ]);
        $talenta->update($validateData);
        session()->flash('status', 'Update Data '.$validateData["nama"]. ' berhasil');
        return redirect()->route('talentas.show',['talenta' => $talenta->id]);    
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


}
