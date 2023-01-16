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
          <li class="">
              <a href="/master-data" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                  <span class="pcoded-mtext" data-i18n="nav.form-components.main">Koperasi & UKM</span>
                  <span class="pcoded-mcaret"></span>
              </a>
          </li>
      </ul>

        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Pengarsipan</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="/arsip-pendirian" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Arsip Pendirian</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="active">
                <a href="arsip-pad" class="waves-effect waves-dark">
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
                      <h5 class="m-b-10">Arsip Perubahan Anggaran Dasar</h5>
                      <p class="m-b-0">Temukan file arsip perubahan anggaran dasar secara cepat disini</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <ul class="breadcrumb-title">
                      <li class="breadcrumb-item">
                          <a href="index.html"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">Arsip PAD</a>
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
                            <h5>Tabel Arsip Perubahan Anggaran Dasar</h5>
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
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Koperasi</th>
                                    <th>Kota/Kabupaten</th>
                                    <th>File 1</th>
                                    <th>File 2</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td>@twitter</td>
                                  </tr>
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