@extends('layouts.index')

@section('konten')
<!-- Isi Page-header Disini -->                  
<div class="pcoded-content">
  <!-- Page-header start -->
  <div class="page-header">
      <div class="page-block">
          <div class="row align-items-center">
              <div class="col-md-8">
                  <div class="page-header-title">
                      <h5 class="m-b-10">Tambah Koperasi</h5>
                      <p class="m-b-0">Lengkapi Arsip Pendirian dan Arsip Perubahan Anggaran Dasar untuk menambahkan Koperasi</p>
                  </div>
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
                <div class="col-sm-12">
                    <!-- Basic Form Inputs card start -->
                    <div class="card">
                        <div class="card-header">
                            <h3>Tambah Koperasi dan UKM</h3>
                        </div>
                        <div class="card-block">
                            
                            <form action="/koperasi-add" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_koperasi" id="nama_koperasi"
                                        placeholder="Masukkan Nama Koperasi dan UKM" required>
                                    </div>
                                </div>
                                {{-- <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                        placeholder="Pilih Alamat Koperasi">
                                    </div>
                                </div> --}}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Masukkan Arsip Pendirian</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="arsip_pendirian" id="arsip_pendirian"
                                        placeholder="Pilih Alamat Koperasi" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Masukkan Arsip PAD</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="arsip_pad" id="arsip_pad"
                                        placeholder="Pilih Alamat Koperasi" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ID Kota Kabupaten</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"  name="id_kotakab" id="id_kotakab"
                                        placeholder="Pilih Alamat Koperasi" required>
                                    </div>
                                </div>
                                {{-- <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">File Pendirian</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">File PAD</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control">
                                    </div>
                                </div> --}}
                                
                                    <!-- button Default -->
                                    <button type="submit" class="btn waves-effect waves-light btn-style btn-green" style="float: right; margin-left:20px">Tambah</button>
                                    <button type="reset" class="btn waves-effect waves-light btn-style btn-danger" style="float: right">Batal</button>
                                
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Basic Form Inputs card end -->
                </div>
          <!-- Page-body end -->
      </div>
      <div id="styleSelector"> </div>
  </div>
</div>
</div>
@endsection

{{-- @section('konten')

<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">

                </div>
            </div>
        </div>
    </div>
</div>
</div>
    
@endsection --}}