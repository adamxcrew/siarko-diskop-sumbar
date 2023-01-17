@extends('layouts.index')

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
                              {{-- <ul class="list-unstyled card-option">
                                <li>
                                  <i class="fa fa fa-wrench open-card-option"></i>
                                </li>
                                <li>
                                  <i class="fa fa-window-maximize full-card"></i>
                                </li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                                <li><i class="fa fa-refresh reload-card"></i></li>
                                <li><i class="fa fa-trash close-card"></i></li>
                              </ul> --}}
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