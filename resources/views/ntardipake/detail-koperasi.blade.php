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
        <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
        <ul class="pcoded-item pcoded-left-item">

          <li class="">
                <a href="dashboard-admin" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
              <a href="index.html" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                  <span class="pcoded-mtext" data-i18n="nav.dash.main">Profile</span>
                  <span class="pcoded-mcaret"></span>
              </a>
          </li>
        </ul>
        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Master Data</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="form-elements-component.html" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Koperasi & UKM</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Pengarsipan</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="arsip-pendirian" class="waves-effect waves-dark">
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
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body breadcrumb-page">
                    <!-- Card start -->
                    <div class="card card-style">
                        <div class="card-header">
                            <div class="breadcrumb-header">
                                <h4>Koperasi Solidarity Infinity</h4>
                                <a href="#">
                                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 outer-ellipsis"><i class="ti-arrow-up"></i>
                                    </div>
                                    <img class="card-header-right" src="assets/images/edit.png" width="30dp">
                                </a>
                                <h6><b>Kota Padang</b></h6>
                            </div>
                            <div class="page-header-breadcrumb">
                                <ul>
                                    <a href="https://goo.gl/maps/jbfMD3LRk2d3QhJP6" target="blank" title="Maps">Jl. Andam Dewi, Kubu Marapalam, Kec. Padang Tim
                                    <li class="breadcrumb-item">
                                            <i class="icofont icofont-location-pin"></i>
                                    </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>File Pendirian</h4>
                    <div class="card card-style">
                        <div class="card-header">
                            <h6 class="text-underline"><a href="assets/images/pdf.png">nama_file_pendirian.pdf</a></h6>
                        </div>
                    </div>
                    <h4>File PAD</h4>
                    <div class="card card-style">
                        <div class="card-header">
                            <a href="#">
                                <img class="card-header-right" src="assets/images/tambah.png" width="30dp">
                            </a>
                            <p class="text-underline"><a href="assets/images/pdf.png">nama_file_pad_2020.pdf</a></p>
                            <p class="text-underline"><a href="assets/images/pdf.png">nama_file_pad_2021.pdf</a></p>
                            <p class="text-underline"><a href="assets/images/pdf.png">nama_file_pad_2022.pdf</a></p>
                        </div>
                    </div>
                    <!-- Card end -->
                </div>


            </div>
        </div>
    </div>
</div>

<!-- Modal start -->
<div class="modal fade modal-icon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Themify Icons</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="icon-list-demo">
                            <i id="icon" class="fa fa-wpbeginner fa-lg"></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            Name
                            <input class="form-control" type="text" id="name" value="fa fa-wpbeginner">
                        </div>
                        <div class="form-group">
                            Code
                            <input class="form-control" type="text" id="code" value='<i class="fa fa-wpbeginner"></i>'>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
    
@endsection