@extends('layouts/main')

@section('sidebar')
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-80 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                <div class="user-details">
                    <span id="more-details">Admin</span>
                </div>
            </div>
        </div>
        <div class="p-15 p-b-0">
        </div>
        <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Main</div>
        <ul class="pcoded-item pcoded-left-item">

          <li class="">
                <a href="/dashboard-admin" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
              <a href="/profil" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                  <span class="pcoded-mtext" data-i18n="nav.dash.main">Profile</span>
                  <span class="pcoded-mcaret"></span>
              </a>
          </li>
        </ul>
        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Master Data</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="/master-data" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Koperasi & UKM</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Pengarsipan</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="/arsip-pendirian" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Arsip Pendirian</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="/arsip-pad" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Arsip PAD</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>        
        </ul>
    </div>
</nav>
@endsection

@section('konten')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Daftar Kota dan Kabupaten</h5>
                        <p class="m-b-0">Pilih Kota atau Kabupaten terlebih dahulu</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Daftar Kota & Kabupaten</a>
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
                              <h5>Tabel Wilayah Sumatera Barat</h5>
                              <span
                                >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores adipisci pariatur odit omnis atque architecto ipsa quas neque eveniet cumque.</span
                              >
                              <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                  <li>
                                    <i class="fa fa fa-wrench open-card-option"></i>
                                  </li>
                                  <li>
                                    <i class="fa fa-window-maximize full-card"></i>
                                  </li>
                                  <li><i class="fa fa-minus minimize-card"></i></li>
                                  <li><i class="fa fa-refresh reload-card"></i></li>
                                  <li><i class="fa fa-trash close-card"></i></li>
                                </ul>
                              </div>
                            </div> 
                            <div class="card-block table-border-style">
                              <div class="table-responsive">
                                <table class="table table-hover" id="myTable">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Wilayah</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($dataWilayah as $dw)
                                    <tr>
                                      <td scope="row">{{$loop->iteration}}</td>
                                      <td>{{ $dw->Jenis }} {{ $dw->Nama }}</td>
                                      <td><a href="/detail-master-data/{{ $dw ->ID }}">Detail</a></td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <!-- Hover table card end -->
    <div class="main-body">
        <div class="page-wrapper">
        </div>
        <div id="styleSelector"> </div>
    </div>
  </div>
  </div>
@endsection