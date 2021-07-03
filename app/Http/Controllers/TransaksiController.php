<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Barang;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //->orderBy('waktupinjam', 'DESC')->get();
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
        $dtBarang = Barang::all();
        return view('Mahasiswa.Create-Transaksi',compact('dtBarang'));
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
            'barang_id'=>$request->barang_id,
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
        return view('Admin.Edit-Transaksi', compact ('dtTransaksi'));
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

        return redirect('transaksipinjam')->with('success', 'Perubahan Disimpan!');
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

    public function bacadata()
    {
        $dtTransaksi = Transaksi::all();
        return view('Admin.Transaksi-Pinjam', compact('dtTransaksi'));
    }

    public function detailpinjam($id)
    {
        $dtTransaksi = Transaksi::findorfail($id);
        return view('Admin.Detail-Transaksi-Pinjam', compact ('dtTransaksi'));
    }
}
