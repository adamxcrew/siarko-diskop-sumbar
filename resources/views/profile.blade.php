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
          <li class="active">
            <a href="/profil" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Profile</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
      </ul>
      <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Master Data</div>
      <ul class="pcoded-item pcoded-left-item">
          <li>
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
                      <h5 class="m-b-10">Profil</h5>
                      <p class="m-b-0">Dinas Koperasi & UKM Provinsi Sumatera Barat</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <ul class="breadcrumb-title">
                      <li class="breadcrumb-item">
                          <a href="index.html"> <i class="fa fa-home"></i> </a>
                      </li>
                      <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- Page-header end -->
<div class="pcoded-inner-content">
  <!-- Main-body start -->
  <div class="main-body">
      <div class="page-wrapper">
          <!-- Page-body start -->
          <div class="page-body">
              <div class="row">
                  <!-- task, page, download counter  start -->
                  <div class="col-xl-3 col-md-6">
                      <div class="card">
                          <div class="card-block">
                              <div class="row align-items-center">
                                  <div class="col-8">
                                      <h4 class="text-c-purple">5400</h4>
                                      <h6 class="text-muted m-b-0">Jumlah Penjungjung</h6>
                                  </div>
                                  <div class="col-4 text-right">
                                      <i class="fa fa-bar-chart f-28"></i>
                                  </div>
                              </div>
                          </div>
                          <div class="card-footer bg-c-purple">
                              <div class="row align-items-center">
                                  <div class="col-9">
                                      <p class="text-white m-b-0">% change</p>
                                  </div>
                                  <div class="col-3 text-right">
                                      <i class="fa fa-line-chart text-white f-16"></i>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card">
                          <div class="card-block">
                              <div class="row align-items-center">
                                  <div class="col-8">
                                      <h4 class="text-c-green">475</h4>
                                      <h6 class="text-muted m-b-0">Jumlah Koperasi & UKM</h6>
                                  </div>
                                  <div class="col-4 text-right">
                                      <i class="fa fa-file-text-o f-28"></i>
                                  </div>
                              </div>
                          </div>
                          <div class="card-footer bg-c-green">
                              <div class="row align-items-center">
                                  <div class="col-9">
                                      <p class="text-white m-b-0">% change</p>
                                  </div>
                                  <div class="col-3 text-right">
                                      <i class="fa fa-line-chart text-white f-16"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card">
                          <div class="card-block">
                              <div class="row align-items-center">
                                  <div class="col-8">
                                      <h4 class="text-c-red">475</h4>
                                      <h6 class="text-muted m-b-0">Jumlah Arsip Pendirian</h6>
                                  </div>
                                  <div class="col-4 text-right">
                                      <i class="fa fa-file-text-o f-28"></i>
                                  </div>
                              </div>
                          </div>
                          <div class="card-footer bg-c-red">
                              <div class="row align-items-center">
                                  <div class="col-9">
                                      <p class="text-white m-b-0">% change</p>
                                  </div>
                                  <div class="col-3 text-right">
                                      <i class="fa fa-line-chart text-white f-16"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card">
                          <div class="card-block">
                              <div class="row align-items-center">
                                  <div class="col-8">
                                      <h4 class="text-c-blue">500</h4>
                                      <h6 class="text-muted m-b-0">Jumlah Arsip PAD</h6>
                                  </div>
                                  <div class="col-4 text-right">
                                      <i class="fa fa-file-text-o f-28"></i>
                                  </div>
                              </div>
                          </div>
                          <div class="card-footer bg-c-blue">
                              <div class="row align-items-center">
                                  <div class="col-9">
                                      <p class="text-white m-b-0">% change</p>
                                  </div>
                                  <div class="col-3 text-right">
                                      <i class="fa fa-line-chart text-white f-16"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- task, page, download counter  end -->

                  <!--  sale analytics start -->
                  <div class="col col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h5>View Analytics</h5>
                              <span class="text-muted">Grafik jumlah pengunjung website dalam satuan waktu</span>
                              <div class="card-header-right">
                                  <ul class="list-unstyled card-option">
                                      <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                      <li><i class="fa fa-window-maximize full-card"></i></li>
                                      <li><i class="fa fa-minus minimize-card"></i></li>
                                      <li><i class="fa fa-refresh reload-card"></i></li>
                                      <li><i class="fa fa-trash close-card"></i></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-block">
                              <div id="sales-analytics" style="height: 400px;"></div>
                          </div>
                      </div>
                  </div>
                  <!--  sale analytics end -->
              </div>
          </div>
          <!-- Page-body end -->
      </div>
      <div id="styleSelector"> </div>
  </div>
</div>
</div>
@endsection