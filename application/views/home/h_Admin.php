
<nav class="navbar navbar-default navbar-static" role="navigation" id="navbar">
            <!-- navbar header -->
        <div class="container-fluid">
            <div class="navbar-header" bgcolor="background-color">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
            </button>
        <a class="navbar-brand" href="#"><img src="<?php echo base_url()."assets/";?>images/logo1.png" width="100"></a>
      </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><img class="icon-bar" src="<?php echo base_url()."assets/";?>images/icon1.jpg"></a></li>
            <li><a href="#"><img class="icon-bar" src="<?php echo base_url()."assets/";?>images/icon2.jpg"></a></li>
            <li><a href="#"><img class="icon-bar" src="<?php echo base_url()."assets/";?>images/icon3.jpg"></a></li>
        </ul>
        </div><br>
    </div>

  <div class="navbar navbar-inverse">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>index.php/Home">Home</a></li>
        <li><a href="#">About</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articel
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Corel Draw</a></li>
              <li><a href="#">After Effect</a></li>
              <li><a href="#">Photoshop</a></li>
            </ul>
        </li>
        <li><a href="#">Contact</a></li>
        <li>
          <form class="navbar-form navbar-left" role="search">
            <input type="text" name="search" placeholder="Search..">
          </form>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>index.php/Signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/Login/keluar"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </div> </nav>