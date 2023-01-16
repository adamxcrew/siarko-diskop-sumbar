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
            <li class="active">
                <a href="/arsip-pendirian" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Arsip Pendirian</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
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
                      <h5 class="m-b-10">Arsip Pendirian</h5>
                      <p class="m-b-0">Temukan file arsip pendirian secara cepat disini</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <ul class="breadcrumb-title">
                      <li class="breadcrumb-item">
                          <a href="index.html"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">Arsip Pendirian</a>
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
                            <h5>Tabel Arsip Pendirian</h5>
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
                              <table id="myTable" class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>Nama Koperasi dan UKM</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>File</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Koperasi Solidarity Infinity</td>
                                    <td>Padang</td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Koperasi Tani Jaya</td>
                                    <td>Padang</td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Koperasi Tukang Makmur</td>
                                    <td>Padang</td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">4</th>
                                    <td>Koperasi Kejujuran</td>
                                    <td>Padang</td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">5</th>
                                    <td>Koperasi Kekeluargaan</td>
                                    <td>Padang</td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">6</th>
                                    <td>Koperasi Harmonisasi</td>
                                    <td>Padang</td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">7</th>
                                    <td>Koperasi Harapan Bunda</td>
                                    <td>Padang</td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">8</th>
                                    <td>Koperasi Tadika Mesra</td>
                                    <td>Padang</td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">9</th>
                                    <td>Koperasi Mantap Oye</td>
                                    <td>Padang</td>
                                    <td><a href="#"><img src="assets/images/pdf.png" width="30dp"></a></td>
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