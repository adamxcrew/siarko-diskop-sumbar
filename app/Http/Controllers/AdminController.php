<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class AdminController extends Controller
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

  public function show($id)
  {
    $wilayah = Wilayah::find($id);
    // dd($wilayah);
    return view('detail-master',[
        "title" => "Detail Koperasi & UKM",
        'detailWilayah' => $wilayah
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
}
