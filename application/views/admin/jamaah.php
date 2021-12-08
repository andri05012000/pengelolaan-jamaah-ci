      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <a href="<?php echo base_url('admin/Beranda'); ?>" class="nav-link">
              <ion-icon name="home-outline" ></ion-icon>
              <p>
                Beranda
              </p>
            </a>
            <a href="<?php echo base_url('admin/User'); ?>"  class="nav-link ">
              <ion-icon name="person-outline"></ion-icon>
              <p>
                User
              </p>
            </a>
            <a href="<?php echo base_url('admin/Upload'); ?>"  class="nav-link active">
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
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/beranda'); ?>">Beranda</a></li>
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
                    <a href="<?=base_url('admin/upload/add')?>" class="on-default edit-row btn btn-info" class="col-sm-6 col-md-4 col-lg-3"><ion-icon name="add"></ion-icon></a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID Jamaah</th> 
                    <th>ID User</th> 
                    <th>Nama</th> 
                    <th>No Hanphone</th> 
                    <th>Jenis Kelamin</th> 
                    <th>NIK</th> 
                    <th>Jenis Pembayaran</th> 
                    <th>No Rekening</th> 
                    <th>Nama Bank</th> 
                    <th>Bukti Tranfer</th>
                    <th>Verifikasi</th> 
                    <th>Aksi</th>
                    <th>Cetak Struk</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach($uploads as $upload) 
                        { 
                      ?>
                      <tr>
                        <td><?=$upload->idtabel_jamaah?></td>
                        <td><?=$upload->idtabel_user?></td>
                        <td><?=$upload->nama_jamaah?></td>
                        <td><?=$upload->no_hp?></td>
                        <td><?=$upload->jenis_kelamin?></td>
                        <td><?=$upload->nik?></td>
                        <td><?=$upload->jenis_pembayaran?>.<?=$upload->idtabel_jamaah?></td>
                        <td><?=$upload->no_rek?></td>
                        <td><?=$upload->nama_bank?></td>
                        <td style="text-align: center; vertical-align: middle;">
                          <a href="<?php echo base_url('assets/upload/images/' . $upload->image) ?>" download>Download</a>
                          <img src="<?=base_url()?>assets/upload/images/<?=$upload->image?>" width="100px" alt="<?=$upload->image?>">
                        </td>
                        <td><?=$upload->verifikasi?></td>
                        <td>
                          <a href ="<?php echo base_url('admin/upload/edit/'.$upload->idtabel_jamaah); ?>" class="on-default edit-row btn btn-primary" class="col-sm-6 col-md-4 col-lg-3">
                          <ion-icon name="pencil-outline"></ion-icon></a>
                          <a href="<?php echo base_url('admin/upload/delete/'.$upload->idtabel_jamaah); ?>" class="on-default default-row btn btn-danger" class="col-sm-6 col-md-4 col-lg-3">
                          <ion-icon name="trash-outline"></ion-icon></a>
                          </td>
                          <td>
                            <a href="<?php echo base_url('admin/upload/detail/'.$upload->idtabel_jamaah); ?>" target="_BLANK" class="on-default default-row btn btn-primary" class="col-sm-6 col-md-4 col-lg-3">
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
