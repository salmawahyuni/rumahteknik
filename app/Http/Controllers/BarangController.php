<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtBarang = Barang::all();
        return view('Admin.Barang', compact('dtBarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Create-Barang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang::create([
            'kodebarang'=>$request->kodebarang,
            'namabarang'=>$request->namabarang,
            'stok'=>$request->stok,
            'kondisi'=>$request->kondisi,
            'harga'=>$request->harga,
            'spesifikasi'=>$request->spesifikasi
        ]);

        return redirect('barang')->with('success', 'Data Disimpan!');
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
        $dtBarang = Barang::findorfail($id);
        return view('Admin.Edit-Barang', compact ('dtBarang'));
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
        $dtBarang = Barang::findorfail($id);
        $dtBarang->update($request->all());

        return redirect('barang')->with('success', 'Perubahan Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtBarang = Barang::findorfail($id);
        $dtBarang->delete();
        return back()->with('info', 'Data Dihapus!');
    }
}
