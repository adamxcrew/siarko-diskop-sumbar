
<nav class="pcoded-navbar">
  <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
  <div class="pcoded-inner-navbar main-menu">
      <div class="">
          <div class="main-menu-header">
              <img class="img-80 img-radius" src={{ asset("assets/images/avatar-4.jpg") }} alt="User-Profile-Image">
              <div class="user-details">
                  <span id="more-details">Admin</span>
              </div>
          </div>
      </div>
      <div class="p-15 p-b-0">
      </div>
      <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Main</div>
      <ul class="pcoded-item pcoded-left-item">

        <li class="{{ ($title === "Dashboard") ? 'active' : '' }}">
              <a href="/dashboard-admin" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                  <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                  <span class="pcoded-mcaret"></span>
              </a>
          </li>
          <li class="{{ ($title === "Profile") ? 'active' : '' }}">
            <a href="/profil" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                <span class="pcoded-mtext" data-i18n="nav.dash.main">Profile</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
      </ul>
      <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Master Data</div>
      <ul class="pcoded-item pcoded-left-item">
          <li class="{{ ($title === "Wilayah") ? 'active' : '' }}">
              <a href="/wilayah" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                  <span class="pcoded-mtext" data-i18n="nav.form-components.main">Wilayah</span>
                  <span class="pcoded-mcaret"></span>
              </a>
          </li>
          <li class="{{ ($title === "Koperasi & UKM") ? 'active' : '' }}">
            <a href="/koperasi" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Koperasi & UKM</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
      </ul>

        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Lihat File Pengarsipan</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ ($title === "Arsip Pendirian Koperasi & UKM") ? 'active' : '' }}">
                <a href="#" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Wilayah</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ ($title === "Tester") ? 'active' : '' }}">
                <a href="/arsip-pendirian" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Arsip PAD</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>  
            <li class="{{ ($title === "Arsip Perubahan Anggaran Dasar Koperasi & UKM") ? 'active' : '' }}">
                <a href="arsip-pad" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Arsip Pendirian</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>       
        </ul>
    </div>
</nav>