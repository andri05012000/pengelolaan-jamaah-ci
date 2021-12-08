      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <a href="<?php echo base_url('kepalacabang/beranda'); ?>" class="nav-link">
              <ion-icon name="home-outline" ></ion-icon>
              <p>
                Beranda
              </p>
            </a>
            <a href="<?php echo base_url('kepalacabang/user'); ?>"  class="nav-link">
              <ion-icon name="person-outline"></ion-icon>
              <p>
                User
              </p>
            </a>
            <a href="<?php echo base_url('kepalacabang/upload'); ?>"  class="nav-link  active">
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
              <li class="breadcrumb-item"><a href="<?php echo base_url('kepalacabang/beranda'); ?>">Beranda</a></li>
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
                <form action="<?=base_url('kepalacabang/Upload/update')?>" method="post" enctype="multipart/form-data">
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama_jamaah" value="<?=$upload->nama_jamaah?>" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>No Handphone</label>
                  <input type="number" class="form-control"  name="no_hp" value="<?=$upload->no_hp?>"required>
                </div>

                <div class="form-group">
                <label>Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" data-style="btn-white">
                    <option value="Laki - Laki" <?=$upload->jenis_kelamin == 'Laki - Laki' ? 'selected="selected"' : '' ?>>Laki - Laki</option>
                    <option value="Perempuan"  <?=$upload->jenis_kelamin == 'Perempuan' ? 'selected="selected"' : '' ?>>Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>NIK</label>
                  <input type="number" class="form-control" name="nik" value="<?=$upload->nik?>" required>
                </div>

                <div class="row">
                      <div class="col-md-12">
                      <label>Nomor Rekening</label>
                      <div class="input-group input-group-lg  mb-3">
                        <div class="input-group-prepend">
                          <select class="form-control"  name="nama_bank" data-style="btn-info">
                                    <option value="Mandiri"  <?=$upload->nama_bank == 'Mandiri' ? 'selected="selected"' : '' ?>>Mandiri</option>
                                    <option value="BCA" <?=$upload->nama_bank == 'BCA' ? 'selected="selected"' : '' ?>>BCA</option> 
                                    <option value="BRI" <?=$upload->nama_bank == 'BRI' ? 'selected="selected"' : '' ?>>BRI</option> 
                                    <option value="BSI" <?=$upload->nama_bank == 'BSI' ? 'selected="selected"' : '' ?>>BSI</option> 
                          </select>
                        </div>
                          <!-- /btn-group -->
                          <div class="col-md-9">
                          <div class="form-group">
                            <input type="text" class="form-control"  value="<?=$upload->no_rek?>" name="no_rek" required>
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
                      <option value="1. Lunas" <?=$upload->jenis_pembayaran == '1. Lunas' ? 'selected="selected"' : '' ?>>1. Lunas</option>
                      <option value="2. Booking Sheat" <?=$upload->jenis_pembayaran == '2. Booking Sheat' ? 'selected="selected"' : '' ?>>2. Booking Sheat</option>
                      <option value="3. Booking Sheat" <?=$upload->jenis_pembayaran == '3. Booking Sheat' ? 'selected="selected"' : '' ?>>3. Booking Sheat</option>
                      <option value="4. Perlengkapan" <?=$upload->jenis_pembayaran == '4. Perlengkapan' ? 'selected="selected"' : '' ?>>4. Perlengkapan</option>
                    </select>
                </div>

                <div class="form-group">
                <label>Upload Bukti Pembayaran</label>
                  <div>
                    <input type="file" name="image">
                  </div>
                  <td></td>
                  <div>
                    <img src="<?=base_url()?>assets/upload/images/<?=$upload->image?>" width="160px" alt="<?=$upload->image?>">
                  </div>
                </div>

                 <input type="hidden" name="verifikasi" value="<?=$upload->verifikasi?>">
                <!-- /.form-group -->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         <div class="card-footer">
                <input type="hidden" name="id" value="<?=$upload->idtabel_jamaah?>">
                <td></td>
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