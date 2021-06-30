<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtTransaksi = Transaksi::all();
        return view('Mahasiswa.Transaksi', compact('dtTransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mahasiswa.Create-Transaksi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'email'=>$request->email,
            'namabarang'=>$request->namabarang,
            'jumlah'=>$request->jumlah,
            'namadosen'=>$request->namadosen,
            'ruangkuliah'=>$request->ruangkuliah,
            'matakuliah'=>$request->matakuliah,
            'waktupinjam'=>$request->waktupinjam,
            'waktukembali'=>$request->waktukembali,
            'keterangan'=>$request->keterangan,
            'statuspengembalian'=>$request->statuspengembalian,
            'petugas'=>$request->petugas
        ]);

        return redirect('transaksi')->with('success', 'Data Disimpan!');
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
        $dtTransaksi = Transaksi::findorfail($id);
        return view('Mahasiswa.Edit-Transaksi', compact ('dtTransaksi'));
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
        $dtTransaksi = Transaksi::findorfail($id);
        $dtTransaksi->update($request->all());

        return redirect('transaksi')->with('success', 'Perubahan Disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtTransaksi = Transaksi::findorfail($id);
        $dtTransaksi->delete();
        return back()->with('info', 'Data Dihapus!');
    }
}
