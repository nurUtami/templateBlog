<div class="container">
    <div class="row">
        <div class="col-md-7">
        <h1 class="text-center">Welcome to my page</h1><br>
                <p>.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p><br><br>
            
            <p><font color="gray">News latter</font></p>
            <h5>Subscribe for the lates</h5>
            <form>
                <div class="form-group col-xs-6" >
                    <input type="text" class="form-control">        
                </div>
                <div>
                    <button type="submit" class="btn btn-default">Subscribe Now</button>
                </div>
            </form>
        </div>
        <!-- form login -->
        <div class="col-md-5">
          <div class="panel panel-default">
          <?php echo validation_errors(); ?>
            <?php echo form_open_multipart('signup/create'); ?>
            <?php
              if($this->session->flashdata('pesan') <> ''){
            ?>
          <div class="alert alert-dismissible alert-danger">
          <?php echo $this->session->flashdata('pesan');?>
          </div>
          <?php
          }?>
     <div class="panel-body">
          <div class="row form-group">
                    <label class="col-md-3" for="usernamr">Username</label>
                    <div class="col-md-9">
                         <input type="text" name="username" class="form-control input-sm" id="username" required="">
                    </div>   
          </div>
          <div class="row form-group">
                    <label class="col-md-3" for="usernamr">Password</label>
                    <div class="col-md-9">
                         <input type="password" name="password" class="form-control input-sm" id="password" required="">
                    </div>   
          </div>
          <div class="row form-group">
                    <label class="col-md-3" for="usernamr">Password Confirm</label>
                    <div class="col-md-9">
                         <input type="password" name="password2" class="form-control input-sm" id="password2" required="">
                    </div>   
          </div>
           <div class="row form-group">
                    <label class="col-md-3" for="usernamr">Nama Lengkap</label>
                    <div class="col-md-9">
                         <input type="text" name="namaLngkap" class="form-control input-sm" id="namaLngkap" required="">
                    </div>   
          </div>
          <div class="row form-group">
                    <label class="col-md-3" for="usernamr">Email</label>
                    <div class="col-md-9">
                         <input type="email" name="email" class="form-control input-sm" id="email" required="">
                    </div>   
          </div>
          <div class="row form-group">
                    <label class="col-md-3" for="usernamr"></label>
                    <div class="col-md-9">
                         <button type="Submit" class="btn btn-info btn-sm"><b>Sign Up</b></button>
                    </div>   
          </div>
     </div>
        <!-- end sigup -->
    </div><br><br><br>
    </div><hr>
  <div class="container"><br>
    <div class="row">
     <h3 class="text-center">Start typing at any time to search for and add widgets</h3><br>
    </div>

    <div class="col-md-6"><br>
      <div class="media">
        <a class="pull-left" href="#">
          <img class="media-object" src="<?php echo base_url()."assets/";?>images/corel.jpg" alt="Media Object" width="100">
        </a>
        <div class="media-body">
          <h4 class="media-heading">Tutorial Corel</h4>
          CorelDraw adalah editor grafik vektor yang dikembangkan oleh Corel, sebuah perusahaan perangkat lunak yang bermarkas <br><a href="#">read more ...</a> 
        </div><br>
     </div>

     <div class="media">
       <a class="pull-left" href="#">
         <img class="img-circle media-object" src="<?php echo base_url()."assets/";?>images/ps.png" alt="Media Object" width="100">
       </a>
       <div class="media-body">
         <h4 class="media-heading">Tutorial Photoshop</h4>
         Adobe Photoshop, atau biasa disebut Photoshop, adalah perangkat lunak editor citra buatan Adobe Systems yang dikhususkan <br><a href="#">read more ...</a>

       </div><br>
     </div>

     <div class="media">
       <a class="pull-left" href="#">
         <img class="media-object" src="<?php echo base_url()."assets/";?>images/dw.png" alt="Media Object" width="100">
       </a>
       <div class="media-body">
          <h4 class="media-heading">Tutorial Dreamweaver</h4>
          Adobe Dreamweaver merupakan program penyunting halaman web keluaran Adobe Systems yang dulu dikenal sebagai Macromedia <br><a href="#">read more ...</a>
       </div>
     </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <h3 class="text-center">More Articel</h3>
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#"> Kiat Belajar Corel </a></li>
          <li class="active"><a href="#"> Membuat Vektor dengan Photoshop </a></li>
          <li class="active"><a href="#"> Membuat Logo Sederhana </a></li>
          <li class="active"><a href="#"> Mahir Dreamwheaver </a></li>
          <li class="active"><a href="#"> Kupas Tuntas Adobe Premiere </a></li>
        </ul>
   </div><br><br>
  </div>
  <hr>
   
  <div class="container">
    <h4 class="text-center">Game Seru</h4>
    <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url()."assets/";?>images/angri.jpg" alt="Paris">
        <p><strong>Angry Bird</strong></p>
        <p>Fri. 27 November 2015</p>
        <button class="btn">Install now</button>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url()."assets/";?>images/zombi.jpg" alt="New York">
        <p><strong>Plants Vs Zombies 2</strong></p>
        <p>Sat. 28 November 2015</p>
        <button class="btn">Install now</button>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="<?php echo base_url()."assets/";?>images/car.jpg" alt="San Francisco">
        <p><strong>3D Rally Racing </strong></p>
        <p>Sun. 29 November 2015</p>
        <button class="btn">Install now</button>
      </div>
    </div>
    </div>
  </div><br>