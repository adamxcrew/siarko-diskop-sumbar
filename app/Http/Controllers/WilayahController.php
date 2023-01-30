<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wilayah;
use Illuminate\Support\Facades\File;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $wilayah = Wilayah::get();
      return view('/Wilayah/index',[
        "title" => "Wilayah",
        "data" => $wilayah
      ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/Wilayah/create',[
            "title" => "Tambah Wilayah"
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
        $gambar = $request->file('gambar');
        $gambar_ekstensi = $gambar->extension();
        $gambar_nama = date('ymdhis').".".$gambar_ekstensi;
        $gambar->move(public_path('logowilayah'),$gambar_nama);
        $data =[
         'nama' => $request -> input('nama'),
         'gambar' =>  $gambar_nama
        ];
        wilayah::create($data);
        return redirect('wilayah');
    }

    public function show($id)
    {
        return 'ini tempat show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $wilayah = wilayah::where('id',$id)->first();
        return view('/Wilayah/edit',[
            "title" => "Edit Wilayah",
            "data" => $wilayah
          ]);  
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

        $gambar = $request->file('gambar');
        $gambar_ekstensi = $gambar->extension();
        $gambar_nama = date('ymdhis').".".$gambar_ekstensi;
        $gambar->move(public_path('logowilayah'),$gambar_nama);

        $data_gambar = wilayah::where('id', $id)->first();
        File::delete(public_path('logowilayah'.'/',$data_gambar->gambar));
        
        $data = [
            'nama' => $request-> input('nama'),
            'gambar'=> $gambar_nama
        ];


        
        wilayah::where('id',$id)->update($data);
        return redirect('wilayah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = wilayah::where('id', $id)->first();
        File::delete(public_path('logowilayah').'/'.$data->gambar);
        wilayah::where('id', $id)->delete();
        return redirect('/wilayah');
    }
}
