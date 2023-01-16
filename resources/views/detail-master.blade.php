@extends('layouts.index') 

@section('konten') 
<div class="pcoded-content">
  <!-- Page-header start -->
  <div class="page-header">
    <div class="page-block">
      <div class="row align-items-center">
        <div class="col-md-8">
          <div class="page-header-title">
            <h5 class="m-b-10">Z</h5>
            {{-- <h5>{{$detailWilayah->Jenis}} {{$detailWilayah->Nama}}</h5>
            <p class="m-b-0">Pilih Koperasi yang ada di {{$detailWilayah->Jenis}} {{$detailWilayah->Nama}} untuk melihat Arsip Pendirian dan PAD</p> --}}
          </div>
        </div>
        <div class="col-md-4">
          <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
              <a href="index.html">
                <i class="fa fa-home"></i>
              </a>
            </li>
            <li class="breadcrumb-item">
              <a href="#!">Daftar Kota & Kabupaten</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Page-header end -->
  <div class="pcoded-inner-content">
    <!-- Main-body start -->
    <!-- Hover table card start -->
    <div class="card">
      <div class="card-header">
        <h5>Daftar Koperasi & UKM</h5>
        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores adipisci pariatur odit omnis atque architecto ipsa quas neque eveniet cumque.</span>
        <div class="card-header-right">
          <ul class="list-unstyled card-option">
            <li>
              <i class="fa fa fa-wrench open-card-option"></i>
            </li>
            <li>
              <i class="fa fa-window-maximize full-card"></i>
            </li>
            <li>
              <i class="fa fa-minus minimize-card"></i>
            </li>
            <li>
              <i class="fa fa-refresh reload-card"></i>
            </li>
            <li>
              <i class="fa fa-trash close-card"></i>
            </li>
          </ul>
        </div>
      </div>
      <div class="card-block table-border-style">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>File Pendirian</th>
                <th>File PAD</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Nama</td>
                <td>
                  <i class="ti-layout-tab"></i>
                </td>
                <td>
                  <i class="ti-layout-tab"></i>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Hover table card end -->
    <div class="main-body">
      <div class="page-wrapper"></div>
      <div id="styleSelector"></div>
    </div>
  </div>
</div> 
@endsection