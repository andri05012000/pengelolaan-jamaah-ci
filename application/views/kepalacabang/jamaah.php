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
            <a href="<?php echo base_url('kepalacabang/user'); ?>"  class="nav-link ">
              <ion-icon name="person-outline"></ion-icon>
              <p>
                User
              </p>
            </a>
            <a href="<?php echo base_url('kepalacabang/upload'); ?>"  class="nav-link active">
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

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Data Jamaah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="toolbar" style="text-align: right; margin-bottom: 10px;">
                    <a href="<?php echo base_url('kepalacabang/upload/add'); ?>"  class="on-default edit-row btn btn-info" class="col-sm-6 col-md-4 col-lg-3"><ion-icon name="add"></ion-icon></a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Jamaah</th> 
                    <th>Nama</th> 
                    <th>No Hanphone</th> 
                    <th>Jenis Kelamin</th> 
                    <th>NIK</th> 
                    <th>No Rekening</th> 
                    <th>Nama Bank</th>
                    <th>Jenis Pembayaran</th>  
                    <th>Bukti Tranfer</th>
                    <th>Verifikasi</th> 
                    <th>Aksi</th>
                    <th>Cetak Struk</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      foreach($tabel_user->result() as $u)
                      { 
                        ?>
                      <tr>
                        <td><?=$u->idtabel_jamaah?></td>
                        <td><?=$u->nama_jamaah?></td>
                        <td><?=$u->no_hp?></td>
                        <td><?=$u->jenis_kelamin?></td>
                        <td><?=$u->nik?></td>
                        <td><?=$u->no_rek?></td>
                        <td><?=$u->nama_bank?></td>
                        <td><?=$u->jenis_pembayaran?>.<?=$u->idtabel_jamaah?></td>
                        <td style="text-align: center; vertical-align: middle;">
                          <a href="<?php echo base_url('assets/upload/images/' . $u->image) ?>" download>Download</a>
                          <img src="<?=base_url()?>assets/upload/images/<?=$u->image?>" width="100px" alt="<?=$u->image?>">
                        </td>
                        <td><?=$u->verifikasi?></td>
                        <td>
                          <a href ="<?php echo base_url('kepalacabang/upload/edit/'.$u->idtabel_jamaah); ?>" class="on-default edit-row btn btn-primary" class="col-sm-6 col-md-4 col-lg-3">
                          <ion-icon name="pencil-outline"></ion-icon></a>
                          <a href="<?php echo base_url('kepalacabang/upload/delete/'.$u->idtabel_jamaah); ?>" class="on-default default-row btn btn-danger" class="col-sm-6 col-md-4 col-lg-3">
                              <ion-icon name="trash-outline"></ion-icon></a>
                          </td>
                          <td>
                            <a href="<?php echo base_url('kepalacabang/upload/detail/'.$u->idtabel_jamaah); ?>" target="_BLANK" class="on-default default-row btn btn-primary" class="col-sm-6 col-md-4 col-lg-3">
                              <ion-icon name="document-outline"></ion-icon></a>
                          </td>
                      </tr>
                      <?php 
                      } 
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

  </div>