<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index(){
    return view('bahan/user/main');

  }
}
