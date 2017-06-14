<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form</title>
     <!--link the bootstrap css file-->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo base_url()."assets/";?>css/bootstrap.min.css" rel="stylesheet">
     <style type="text/css">
     .colbox {
          margin-left: 0px;
          margin-right: 0px;
     }
     </style>
</head>
<body background="<?php echo base_url()."assets/";?>images/12.jpg">
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('login/masuk'); ?>
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-default">
<?php
if($this->session->flashdata('pesan') <> ''){
 ?>
 <div class="alert alert-dismissible alert-danger">
      <?php echo $this->session->flashdata('pesan');?>
 </div>
 <?php
 }?>
     <div class="panel-body">
     <h4 align="center" class="italic">Masukkan Username dan Password</h4><br><br>
               <div class="row form-group">
                    <label class="col-md-3" for="usernamr">username</label>
                    <div class="col-md-9">
                         <input type="text" name="username" class="form-control input-sm" id="username" required>
                    </div>   
          </div>
          <div class="row form-group">
                    <label class="col-md-3" for="usernamr">Password</label>
                    <div class="col-md-9">
                         <input type="password" name="password" class="form-control input-sm" id="password" required>
                    </div>   
          </div>
          <div class="row form-group">
                    <label class="col-md-3" for="usernamr"></label>
                    <div class="col-md-9">
                         <button type="Submit" class="btn btn-info btn-sm">Login</button>
                    </div>   
          </div>
     </div>
</div>
</div>
  </form>   
<script src="<?php echo base_url()."assets/";?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()."assets/";?>js/bootstrap.min.js"></script>
</body>
</html>