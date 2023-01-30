<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Koperasi;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KoperasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koperasi = Koperasi::get();
        return view('/Koperasi/index',[
          "title" => "Koperasi & UKM",
          "data" => $koperasi
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wilayah = Wilayah::get();
        return view('/Koperasi/create',[
            "title" => "Tambah koperasi",
            "data" => $wilayah
          ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama_koperasi'=> 'required',
            'id_kotakab' => 'required',
            'arsip_pendirian' => 'required|mimes:pdf',
            'arsip_pad_1' => 'required|mimes:pdf',
            'arsip_pad_2' => 'required|mimes:pdf',
            'arsip_pad_3' => 'required|mimes:pdf',
        ]);

        $arsip_pendirian_file = $request->file('arsip_pendirian');
        $arsip_pendirian_ekstensi = $arsip_pendirian_file->extension();
        $arsip_pendirian_nama = date('ymdhis').".".$arsip_pendirian_ekstensi;
        $arsip_pendirian_file->move(public_path('arsip pendirian'),$arsip_pendirian_nama);

        $arsip_pad_1_file = $request->file('arsip_pad_1');
        $arsip_pad_1_ekstensi = $arsip_pad_1_file->extension();
        $arsip_pad_1_nama = date('ymdhis').".".$arsip_pad_1_ekstensi;
        $arsip_pad_1_file->move(public_path('arsip pad 1'),$arsip_pad_1_nama);

        $arsip_pad_2_file = $request->file('arsip_pad_2');
        $arsip_pad_2_ekstensi = $arsip_pad_2_file->extension();
        $arsip_pad_2_nama = date('ymdhis').".".$arsip_pad_2_ekstensi;
        $arsip_pad_2_file->move(public_path('arsip pad 2'),$arsip_pad_2_nama);

        $arsip_pad_3_file = $request->file('arsip_pad_3');
        $arsip_pad_3_ekstensi = $arsip_pad_3_file->extension();
        $arsip_pad_3_nama = date('ymdhis').".".$arsip_pad_3_ekstensi;
        $arsip_pad_3_file->move(public_path('arsip pad 3'),$arsip_pad_3_nama);
        
        $data=[
            'nama_koperasi'=> $request->input('nama'),
            'id_kotakab' => $request->input('id_kotakab'),
            'arsip_pendirian' => $arsip_pendirian_nama,
            'arsip_pad_1' => $arsip_pad_1_nama,
            'arsip_pad_2' => $arsip_pad_2_nama,
            'arsip_pad_3' => $arsip_pad_3_nama,
        ];
        koperasi::create($data);
        return redirect('koperasi');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Koperasi::where('id', $id)->first();
        File::delete(public_path('arsip pendirian').'/'.$data->arsip_pendirian);
        File::delete(public_path('arsip pad 1').'/'.$data->arsip_pad_1);
        File::delete(public_path('arsip pad 2').'/'.$data->arsip_pad_2);
        File::delete(public_path('arsip pad 3').'/'.$data->arsip_pad_3);
        koperasi::where('id', $id)->delete();
        return redirect('/koperasi');
    }
}
