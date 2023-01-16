<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Login</title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link
     href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous"
   />
   <style> 
        .navbar-light {
            background-color: #036D19;
        }
   </style>
</head>
<body>
    <nav class="navbar navbar-light bg-green">
        <div class="container-fluid">
          <a class="navbar-brand,navbar-collapse" href="/">
            <img style="margin-right:10px;" src="assets/images/LAMBANG-KOPERASI.png" alt="" width="50" height="48" style="left: 20px;"  >
            <img style="margin-right:30px;" src="assets/images/logo sumbar.png" alt="" width="45" height="51.45" right="20" style="left: 20px;" >
            <span style="color: rgb(255, 255, 255);"> <b> DINAS KOPERASI & UKM PROVINSI SUMATERA BARAT</b></span>
            
        </a>
        </div>
      </nav>
      <section >
        <div class="container py-5">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="assets/images/IMG_6151.png"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                      @if(Session::has('status'))
                      <div class="alert alert-danger" role="alert">
                          {{ Session::get('message') }}
                      </div>
                      @endif
                      <form method="POST" action="">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">SISTEM INFORMASI PENGARSIPAN DINAS KOPERASI & UKM</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Welcome back! Please login to your account.</h5>
      
                        <div class="form-outline mb-4">
                          <input type="email" name="email" id="email" class="form-control form-control-lg" required/>
                          <label class="form-label" for="form2Example17">Email address</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                          <label class="form-label" for="form2Example27">Password</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                        </div>
    
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="text-center text-white fixed-bottom" style="background-color: #036D19;">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          Sistem Informasi Pengarsipan Dinas Koperasi & UKM
          <b>Created by Mahasiswa KP Sistem Informasi Unand</b>
          © 2023
        </div>
        <!-- Copyright -->
      </footer>

</body>
</html>