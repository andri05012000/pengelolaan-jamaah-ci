<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>FTI - Travel Umroh dan Haji Plus</title>

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>logo.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>Admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>Admin/dist/css/adminlte.min.css">
</head>
<?php 
    $reset_key = $this->uri->segment(3);
  ?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?php echo base_url('login'); ?>" class="h1"><b>TRAVEL</b>UMROH</a>
    </div>
    <div class="modal-body">
    <div class="card-body">
      <p class="login-box-msg">Anda hanya selangkah lagi dari kata sandi baru Anda, pulihkan kata sandi Anda sekarang.</p>
      <?= validation_errors() ?>
      <?=form_open('login/reset_password_validation')?>
		<div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="field-3" class="control-label">Password Baru<br/></label>
               <?= form_input('pass', $this->input->post('pass'))?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="field-3" class="control-label">Confirm Password</label>
                <?= form_input('retype_password', $this->input->post('confirm_password'))?>
            </div>
          </div>
        </div>
     
       <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="field-3" class="control-label">Reset Key (Jangan hapus reset key !!)</label>
                <?= form_input('reset_key', set_value('reset_key', $reset_key))?><br/> 
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ganti kata sandi</button>
          </div>
          <!-- /.col -->
      </div>
        </div>
      </form>
 
      <p class="mt-3 mb-1">
        <a href="<?php echo base_url('login'); ?>">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>Admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>Admin/dist/js/adminlte.min.js"></script>
</body>
</html>
