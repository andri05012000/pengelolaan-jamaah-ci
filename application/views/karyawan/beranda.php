<?php
include 'koneksi.php';
$karyawan = mysqli_query($koneksi,"SELECT * FROM tabel_user WHERE level='Karyawan'");
$jumlahkaryawan = mysqli_num_rows($karyawan);
$cabang = mysqli_query($koneksi,"SELECT * FROM tabel_user WHERE level='Kepala Cabang'");
$jumlahcabang = mysqli_num_rows($cabang);
$mitra = mysqli_query($koneksi,"SELECT * FROM tabel_user WHERE level='Mitra'");
$jumlahmitra = mysqli_num_rows($mitra);
$jamaah = mysqli_query($koneksi,"SELECT * FROM tabel_jamaah");
$jumlahjamaah = mysqli_num_rows($jamaah);
?>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <a href="<?php echo base_url('karyawan/beranda'); ?>" class="nav-link active">
              <ion-icon name="home-outline" ></ion-icon>
              <p>
                Beranda
              </p>
            </a>
            <a href="<?php echo base_url('karyawan/user'); ?>"  class="nav-link ">
              <ion-icon name="person-outline"></ion-icon>
              <p>
                User
              </p>
            </a>
            <a href="<?php echo base_url('karyawan/upload'); ?>"  class="nav-link">
              <ion-icon name="create-outline"></ion-icon>
              <p>
                Jamaah
              </p>
            </a>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Beranda</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h5 class="mb-2">Informasi</h5>
        <div class="row">
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-secondary"><ion-icon name="people-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Karyawan</span>
                <span class="info-box-number"><?php echo $jumlahkaryawan; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-warning"><ion-icon name="people-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Kepala Cabang</span>
                <span class="info-box-number"><?php echo $jumlahcabang; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-danger"><ion-icon name="people-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mitra</span>
                <span class="info-box-number"><?php echo $jumlahmitra; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-success"><ion-icon name="accessibility-outline"></ion-icon></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jamaah</span>
                <span class="info-box-number"><?php echo $jumlahjamaah; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

  </div>