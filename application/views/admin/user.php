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
            <a href="<?php echo base_url('admin/User'); ?>"  class="nav-link active">
              <ion-icon name="person-outline"></ion-icon>
              <p>
                User
              </p>
            </a>
            <a href="<?php echo base_url('admin/Upload'); ?>"  class="nav-link">
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
            <h1>DATA USER</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/beranda'); ?>">Beranda</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <h3 class="card-title">Daftar Data User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="toolbar" style="text-align: right; margin-bottom: 10px;">
                    <a href='#' class="on-default edit-row btn btn-info" data-toggle="modal" data-target="#modal-default" onClick="ResetInput()" class="col-sm-6 col-md-4 col-lg-3"><ion-icon name="add"></ion-icon></a>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID User</th> 
                    <th>Nama</th> 
                    <th>Alamat</th> 
                    <th>No HP</th>
                    <th>Jenis Kelamin</th>   
                    <th>NIK</th> 
                    <th>Email</th> 
                    <th>Level</th>    
                    <th>No Rekening</th>  
                    <th>Jenis Bank</th> 
                    <th>Jumlah Mitra</th> 
                    <th>Jumlah Jamaah</th>  
                    <th>Jumlah Bus</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      foreach($tabel_user->result() as $u){ 
                          echo"<tr>
                          <td>".$u->idtabel_user."</td>
                          <td>".$u->nama."</td>
                          <td>".$u->alamat."</td>
                          <td>".$u->no_hp."</td>
                          <td>".$u->jenis_kelamin."</td>
                          <td>".$u->nik."</td>
                          <td>".$u->email."</td>
                          <td>".$u->level."</td>
                          <td>".$u->no_rek."</td>
                          <td>".$u->nama_bank."</td>
                          <td>".$u->jumlah_mitra."</td>
                          <td>".$u->jumlah_jamaah."</td>
                          <td>".$u->jumlah_bus."</td>

                          <td>
                              
                              <a href ='#' class='on-default edit-row btn btn-primary' data-toggle='modal' data-target='#modal-default' onClick=\"SetInput('".$u->idtabel_user."','".$u->nama."','".$u->alamat."','".$u->no_hp."','".$u->jenis_kelamin."','".$u->nik."','".$u->email."','".$u->pass."','".$u->level."','".$u->no_rek."','".$u->nama_bank."')\" class='col-sm-6 col-md-4 col-lg-3'>
                              <ion-icon name='pencil-outline'></ion-icon></a>
                             
                            
                              <a href='#' class='on-default default-row btn btn-danger' data-toggle='modal' data-target='#modal-danger' onClick=\"setInput1('".$u->idtabel_user."')\" class='col-sm-6 col-md-4 col-lg-3' >
                              <ion-icon name='trash-outline'></ion-icon></a>
                          </td>
                      </tr>";
                      } 
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          <div class="modal fade" id="modal-default">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">DATA USER</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      <form action="<?php echo base_url('admin/user/add'); ?>" method="post">
                    </button>
                  </div>
                  <div class="modal-body">
                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="hidden" id="idtabel_user" name="idtabel_user">
                          <label for="field-3" class="control-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Sesuai KTP" required autofocus>
                        </div>
                      </div>
                    </div> 

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="field-3" class="control-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Sesuai KTP" required>
                        </div>
                      </div>
                    </div>   

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="field-3" class="control-label">Nomor Handphone</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Hanphone" required>
                        </div>
                      </div>
                    </div>  

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="field-3" class="control-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" data-style="btn-white"  >
                              <option value="Laki - Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                        </div>
                     </div>

                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="field-3" class="control-label">NIK</label>
                            <input type="number" class="form-control" id="nik" name="nik"  placeholder="Nomor Induk Kependudukan" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="field-3" class="control-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                      </div>
                    </div> 

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="field-3" class="control-label">Password</label>
                            <input type="text" class="form-control" id="pass" name="pass" placeholder="Password">
                        </div>
                      </div>
                    </div> 

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="field-3" class="control-label">Level User</label>
                            <select class="form-control" id="level" name="level" data-style="btn-white">
                              <option value="Admin">Admin</option>
                              <option value="Karyawan">Karyawan</option>
                              <option value="Kepala Cabang">Kepala Cabang</option>
                              <option value="Mitra">Mitra</option>
                            </select>
                          </div>
                        </div>
                     </div> 

                    <div class="row">
                      <div class="col-md-12">
                      <label for="field-3" class="control-label">Nomor Rekening</label>
                      <div class="input-group input-group-lg  mb-3">
                        <div class="input-group-prepend">
                          <select class="form-control" id="nama_bank" name="nama_bank" data-style="btn-info">
                                    <option value="Mandiri">Mandiri</option>
                                    <option value="BCA">BCA</option> 
                                    <option value="BRI">BRI</option> 
                                    <option value="BSI">BSI</option> 
                          </select>
                        </div>
                          <!-- /btn-group -->
                          <div class="col-md-9">
                          <div class="form-group">
                            <input type="text" class="form-control" id="no_rek" placeholder="Nomor Rekening" name="no_rek" required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
           </form>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

  </div>

  <div class="modal fade" id="modal-danger">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">Danger Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <form action="<?php echo base_url('admin/user/delete'); ?>" method="post" class="form-horizontal" role="form">
        </div>
        <div class="modal-body">
            <h4>Konfirmasi</h4>
            <p>Apakah anda yakin ingin menghapus data ini ?</p>
            <div class="form-group">
                 <input type="hidden" id="idtabel_user1" name="idtabel_user1">
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="submit" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-outline-light">Ya</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</form>

  


<script type="text/javascript">
      function SetInput(idtabel_user, nama, alamat, no_hp, jenis_kelamin, nik, email, pass, level, no_rek, nama_bank) {
        document.getElementById('idtabel_user').value = idtabel_user;
        document.getElementById('nama').value = nama;
        document.getElementById('alamat').value = alamat;
        document.getElementById('no_hp').value = no_hp;
        document.getElementById('jenis_kelamin').value = jenis_kelamin;
        document.getElementById('nik').value = nik;
        document.getElementById('email').value = email;
        document.getElementById('pass').value = pass;
        document.getElementById('level').value = level;
        document.getElementById('no_rek').value = no_rek;
        document.getElementById('nama_bank').value = nama_bank;
      }
      function setInput1(idtabel_user, nama, alamat, no_hp, jenis_kelamin, nik, email, pass, level, no_rek, nama_bank, jumlah_mitra, jumlah_jamaah, jumlah_bus) {
        document.getElementById('idtabel_user1').value = idtabel_user;
        document.getElementById('nama1').value = nama;
        document.getElementById('alamat1').value = alamat;
        document.getElementById('no_hp1').value = no_hp;
        document.getElementById('jenis_kelamin1').value = jenis_kelamin;
        document.getElementById('nik1').value = nik;
        document.getElementById('email1').value = email;
        document.getElementById('pass1').value = pass;
        document.getElementById('level1').value = level;
        document.getElementById('no_rek1').value = no_rek;
        document.getElementById('nama_bank1').value = nama_bank;
        document.getElementById('jumlah_mitra1').value = jumlah_mitra;
        document.getElementById('jumlah_jamaah1').value = jumlah_jamaah;
        document.getElementById('jumlah_bus1').value = jumlah_bus;
      }
      function ResetInput(idtabel_user, nama, alamat, no_hp, jenis_kelamin, nik, email, pass, level, no_rek, nama_bank) {
       document.getElementById('idtabel_user').value = "";
        document.getElementById('nama').value = "";
        document.getElementById('alamat').value = "";
        document.getElementById('no_hp').value = "";
        document.getElementById('jenis_kelamin').value = "";
        document.getElementById('nik').value = "";
        document.getElementById('email').value = "";
        document.getElementById('pass').value = "";
        document.getElementById('level').value = "";
        document.getElementById('no_rek').value = "";
        document.getElementById('nama_bank').value = "";
      }


</script>