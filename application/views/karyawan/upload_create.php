      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <a href="<?php echo base_url('karyawan/beranda'); ?>" class="nav-link">
              <ion-icon name="home-outline" ></ion-icon>
              <p>
                Beranda
              </p>
            </a>
            <a href="<?php echo base_url('karyawan/user'); ?>"  class="nav-link">
              <ion-icon name="person-outline"></ion-icon>
              <p>
                User
              </p>
            </a>
            <a href="<?php echo base_url('karyawan/upload'); ?>"  class="nav-link  active">
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DATA JAMAAH</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('karyawan/beranda'); ?>">Beranda</a></li>
              <li class="breadcrumb-item active">Jamaah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">INPUT DATA JAMAAH</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                 <form action="<?=base_url('karyawan/upload/create')?>" method="post" enctype="multipart/form-data">
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama_jamaah" placeholder="Nama Sesuai Dengan KTP" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>No Handphone</label>
                  <input type="number" class="form-control"  name="no_hp" placeholder="Nomor Handphone" required>
                </div>

                <div class="form-group">
                <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" data-style="btn-white">
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>NIK</label>
                  <input type="number" class="form-control" name="nik" placeholder="Nomor Induk Kependudukan" required>
                </div>

                <div class="row">
                      <div class="col-md-12">
                      <label>Nomor Rekening</label>
                      <div class="input-group input-group-lg  mb-3">
                        <div class="input-group-prepend">
                          <select class="form-control"  name="nama_bank" data-style="btn-info">
                                    <option value="Mandiri">Mandiri</option>
                                    <option value="BCA">BCA</option> 
                                    <option value="BRI">BRI</option> 
                                    <option value="BSI">BSI</option> 
                          </select>
                        </div>
                          <!-- /btn-group -->
                          <div class="col-md-9">
                          <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Nomor Rekening" name="no_rek" required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <!-- /.form-group -->
              </div>
              <!-- /.col -->
             <div class="col-md-6">
                 <div class="form-group">
                  <label>Jenis Pembayaran</label>
                    <select class="form-control" name="jenis_pembayaran" data-style="btn-white">
                      <option value="Lunas</br>&nbsp;&nbsp;13.000.000">Lunas 13.000.000</option>
                      <option value="Perlengkapan & Booking Seat</br>&nbsp;&nbsp;8.000.000">Perlengkapan & Booking Seat 8.000.000</option>
                      <option value="Booking Seat</br>&nbsp;&nbsp;6.500.000">Booking Seat 6.500.000</option>
                      <option value="Perlengkapan</br>&nbsp;&nbsp;1.500.000">Perlengkapan 1.500.000</option>
                    </select>
                </div>


                <div class="form-group">
                <label>Upload Bukti Pembayaran</label>
                  <div>
                    <input type="file" name="image">
                  </div>
                </div>

                 <div class="form-group">
                  <label>Verifikasi</label>
                    <select class="form-control"  name="verifikasi" data-style="btn-white">
                      <option value="Sudah">Sudah</option>
                      <option value="Belum">Belum</option>
                    </select>
                </div>
                <input type="hidden" class="form-control" name="idtabel_user" value='<?php echo $this->session->userdata('id')?>'>
                <input type="hidden" name="tanggal" value="<?php echo date("d-m-Y H:i:s"); ?>">
                <!-- /.form-group -->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
            <!-- /.card -->
          </div>  
          <br>
          <br>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>