<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ $title }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
  <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
  <meta name="author" content="codedthemes" />
  @include('partials/style')
</head>

<body>
  <!-- Pre-loader start -->
  @include('partials/preloader')
  <!-- Pre-loader end -->

  <!-- Container -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">

          <!-- Navbar -->
          @include('partials/navbar')
          <!-- Navbar End-->

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">

                  <!-- Sidebar -->
                  @include('partials/sidebar')
                  <!-- Sidebar End -->

                  <!-- Isi Konten -->
                    @yield('konten')
                  <!-- Isi Konten End -->
              </div>
            </div>
          </div>
      </div>
    
@include('partials/script')
</body>
</html>
