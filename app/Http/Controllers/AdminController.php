<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('dashboard-admin',[
        "title" => "Dashboard Admin"
    ]);
  }

  public function profile(){
    return view('profile',[
        "title" => "Profil"
      ]);
  }

  public function index()
  {
    $wilayah = Wilayah::get();
    return view('master-koperasi-ukm',[
        "title" => "Koperasi & UKM",
        'dataWilayah' => $wilayah
      ]);
  }

  public function show($id)
  {
    $wilayah = Wilayah::find($id);
    return view('testerdata',[
        "title" => "Detail Koperasi & UKM",
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
}
