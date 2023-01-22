<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Koperasi;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class AdminController extends Controller

//Main Menu
{
    public function dashboard(){
        return view('dashboard',[
        "title" => "Dashboard"
    ]);
  }

  public function profile(){
    return view('profile',[
        "title" => "Profile"
      ]);
  }

  public function index()
  {
    $wilayah = Wilayah::get();
    return view('master-koperasi',[
        "title" => "Koperasi & UKM",
        'dataWilayah' => $wilayah
      ]);
  }

  public function arsippendirian(){
    return view('arsip-pendirian',[
        "title" => "Arsip Pendirian Koperasi & UKM"
    ]);
  }

  public function arsippad(){
    return view('arsip-pad',[
        "title" => "Arsip Perubahan Anggaran Dasar Koperasi & UKM"
    ]);
  }

//Detail-Activity

  public function show($id)
  {
    $wilayah = Wilayah::with(['koperasi'])->findorFail($id);
    return view('detail-master',[
        "title" => "Detail Koperasi & UKM",
        'Wilayah'=>$wilayah
      ]);
  }

  public function create($id)
  {
    $wilayah = Wilayah::findorFail($id);
    // dd($wilayah);
    return view('tambah-koperasi',[
        "title" => "Detail Koperasi & UKM",
        'Wilayah'=>$wilayah
      ]);
  }

  public function store(Request $request)
  {
     $koperasi=Koperasi::create($request->all());

     return redirect('master-data');
  }



}
