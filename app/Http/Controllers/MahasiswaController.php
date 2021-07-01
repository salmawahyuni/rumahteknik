<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtMahasiswa = mahasiswa::all();
        
        return view('Mahasiswa.Biodata', compact ('dtMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mahasiswa.Create-Biodata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mahasiswa::create([
            'namamhs'=>$request->namamhs,
            'npm'=>$request->npm,
            'prodi'=>$request->prodi,
            'nohp'=>$request->nohp,
            'email'=>$request->email
        ]);

        return redirect('biodata')->with('success', 'Data Disimpan!');

        //return redirect('biodata')->with('toast_success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtMahasiswa = mahasiswa::findorfail($id);
        return view('Mahasiswa.Edit-Biodata', compact ('dtMahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dtMahasiswa = mahasiswa::findorfail($id);
        $dtMahasiswa->update($request->all());

        return redirect('biodata')->with('success', 'Perubahan Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtMahasiswa = mahasiswa::findorfail($id);
        $dtMahasiswa->delete();
        return back()->with('info', 'Data Dihapus!');
    }

    public function lihatdata()
    {
        $dtMahasiswa = mahasiswa::all();
        
        return view('Admin.BiodataMahasiswa', compact ('dtMahasiswa'));
    }
}
