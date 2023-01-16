<html lang="en">
    <head>
        <base target="_top">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.css">
         
        <?!= include('table-css'); ?>
        <?!= include('table-js'); ?>
        
        <style> 
            .navbar-light {
                background-color: #036D19;
            }
        </style>
        
    </head>
    
    
    <body>
        <nav class="navbar navbar-light bg-green fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand,navbar-collapse" href="/">
                <img style="margin-right:10px;" src="assets/images/LAMBANG-KOPERASI.png" alt="" width="50" height="48" style="left: 20px;"  >
                <img style="margin-right:30px;" src="assets/images/logo sumbar.png" alt="" width="45" height="51.45" right="20" style="left: 20px;" >
                <span style="color: rgb(255, 255, 255);"> <b> DINAS KOPERASI & UKM PROVINSI SUMATERA BARAT</b></span>  
            </a>
            </div>
        </nav>

        <div class="container" style="padding-top: 100px">
            <img style="margin-right:10px; left:20px ; block-size:150px" src="assets/images/logo_padang.png" alt="" >
            <span style="color: rgb(0, 0, 0); font-size:40px"> <b> Daftar Koperasi dan UKM Kota Padang</b></span>
    
            <table id="table" 
                 data-toggle="table"
                 data-search="true"
                 {{-- data-filter-control="true"  --}}
                 {{-- data-show-export="true" --}}
                 data-click-to-select="true"
                 data-toolbar="#toolbar">
                 
                <thead>
                    <tr>
                        <th data-field="prenom" data-filter-control="input" data-sortable="true">Nama Koperasi/UKM</th>
                        <th data-field="location" data-filter-control="select" >Lokasi</th>
                        <th data-field="date" data-filter-control="select" >File Arsip Pendirian </th>
                        <th data-field="examen" data-filter-control="select">File Arsip PAD</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Koperasi Pol PP</td>
                        <td>Jl. Linggar Jati 2</td>
                        <td>
                            <a href="/detail-pendirian"><img src="assets/images/pdf.png" alt="" width="30px">Cek File Arsipnya disini</a>
                        </td>
                        <td>
                            <a href="/daftar-PAD"><img src="assets/images/info.png" alt="" width="30px">Cek File Arsipnya disini</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Koperasi PPNI</td>
                        <td>Jalan Linggar Jati 2</td>
                        <td>
                            <a href="/detail-pendirian"><img src="assets/images/pdf.png" alt="" width="30px">Cek File Arsipnya disini</a>
                        </td>
                        <td>
                            <a href="/daftar-PAD"><img src="assets/images/info.png" alt="" width="30px">Cek File Arsipnya disini</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Koperasi Polri</td>
                        <td>Jalan Linggar Jati 2</td>
                        <td>
                            <a href="/detail-pendirian"><img src="assets/images/pdf.png" alt="" width="30px">Cek File Arsipnya disini</a>
                        </td>
                        <td>
                            <a href="/daftar-PAD"><img src="assets/images/info.png" alt="" width="30px">Cek File Arsipnya disini</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Koperasi Affah Iyah</td>
                        <td>Affan tuh</td>
                        <td>
                            <a href="/detail-pendirian"><img src="assets/images/pdf.png" alt="" width="30px">Cek File Arsipnya disini</a>
                        </td>
                        <td>
                            <a href="/daftar-PAD"><img src="assets/images/info.png" alt="" width="30px">Cek File Arsipnya disini</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Koperasi Mahasiswa</td>
                        <td>Universitas Andalas</td>
                        <td>
                            <a href="/detail-pendirian"><img src="assets/images/pdf.png" alt="" width="30px">Cek File Arsipnya disini</a>
                        </td>
                        <td>
                            <a href="/daftar-PAD"><img src="assets/images/info.png" alt="" width="30px">Cek File Arsipnya disini</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <footer class="text-center text-white" style="background-color: #036D19;">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              Sistem Informasi Pengarsipan Dinas Koperasi & UKM
              <b>Created by Mahasiswa KP Sistem Informasi Unand</b>
              © 2023
            </div>
            <!-- Copyright -->
        </footer>

    </body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.js"></script>
    <script>
      init({
        title: 'Filter Control',
        desc: 'Use Plugin: bootstrap-table-filter-control to filter table fields.',
        links: [
          'bootstrap-table.min.css'
        ],
        scripts: [
          'bootstrap-table.min.js',
          'extensions/filter-control/bootstrap-table-filter-control.min.js'
        ]
      })
    </script>

</html>
    