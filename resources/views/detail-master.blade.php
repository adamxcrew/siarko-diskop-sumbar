@extends('layouts.index') 

@section('konten') 
<div class="pcoded-content">
  <!-- Page-header start -->
  <div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10">Daftar Koperasi & UKM</h5>
                    <p class="m-b-0">{{ $Wilayah -> Jenis}} {{ $Wilayah-> Nama}}</p>
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
    <!-- Hover table card start -->
    <div class="card">
      <div class="card-header">
        <h5>Daftar Koperasi & UKM {{ $Wilayah->Jenis}} {{ $Wilayah->Nama}}</h5>
        <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores adipisci pariatur odit omnis atque architecto ipsa quas neque eveniet cumque.</span>
        <div class="card-header-right">
          <button class="btn btn-primary"><i class="ti-plus"></i> Tambah Koperasi</button>
        </div>
      </div>
      <div class="card-block table-border-style">
        <div class="table-responsive">
          <table class="table table-hover" id="myTable">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              @foreach($Wilayah->Koperasi as $wh)
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $wh->nama_koperasi }}</td>
                <td>
                  <button class="btn btn-info"><i class="ti-info-alt"></i>Detail</button>
                  <button class="btn btn-danger"><i class="ti-trash"></i>Delete</button>
                </td>
              </tr>
              @endforeach
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