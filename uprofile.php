 <?php
    include('uhead.php');
    ?>

<div class="page-heading about-heading header-text" style="background-image: url(car/assets/images/heading-1-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Buy</h4>
              <h2> From our company</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


 <section id="main-content">
      <section class="wrapper">
       
        <!-- <div class="row mb"> -->
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>
                  <tr>
<div>.</div>
<div>.</div>
  <div class="row">
  <div class="col-lg-6">
  
       <form action="" method="POST">
    <div class="card card-default">
      <div class="card-header card-header-border-bottom">
        <h2>My Profile</h2>
      </div>



          <?php
              include 'db_connect.php';
              //$p=1;
        //$id=$_COOKIE['lid'];
        //$uname=$_SESSION['username'];
             session_start();
       $lid=$_SESSION['lkey']; 
              $result = mysql_query("SELECT * FROM customer where loginid=$lid");
//echo $result;
               while($row = mysql_fetch_array($result))
              {
                ?>
                <div class="col-sm-12">
        <label class="text-dark font-weight-medium" for="">Name</label>
        <div class="input-group mb-2">

          <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['name'];?>" 
          disabled="disabled">
        </div>
      </div>

       <div class="col-sm-12">
        <label class="text-dark font-weight-medium" for="">Address</label>
        <div class="input-group mb-2">

          <input type="text" class="form-control" id="aname" name="aname" value="<?php echo $row['address'];?>" 
          disabled="disabled">
        </div>
      </div>

       <div class="col-sm-12">
        <label class="text-dark font-weight-medium" for="">Phone Number</label>
        <div class="input-group mb-2">

          <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $row['phno'];?>" 
          disabled="disabled">
        </div>
      </div>






            <?php
              }
              ?>


           <?php

              include 'db_connect.php';
              $p=1;
        //$uname=$_GET['id'];
        $lkey=$_SESSION['lkey']; 
              $result = mysql_query("SELECT * FROM login where lid=$lkey");
// echo $result;
              while($row = mysql_fetch_array($result))
              {
              ?>
             
      <div class="col-sm-12">
        <label class="text-dark font-weight-medium" for="">User Name</label>
        <div class="input-group mb-2">

          <input type="text" class="form-control" id="hname" name="hname" value="<?php echo $row['email'];?>" 
          disabled="disabled">
        </div>
      </div>
        
      <div class="col-sm-12">
        <label class="text-dark font-weight-medium" for="">Password</label>
        <div class="input-group mb-2">

          <input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password'];?>" 
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
          title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required
          disabled="disabled">
        </div>
      </div>
      
      
      <div class="col-sm-12">
        <label class="text-dark font-weight-medium" for=""></label>
        <div class="input-group mb-2">
      <a href="uupdate.php?id=<?php echo $row['email'];?>" id="approve"><input type='button' value='update'></a>
    </div>
  </div>
  <div>.</div>
  <div>.</div>
  <div>.</div>
      <?php
        }
?>
    </div>
  </div></form>


  
</div>



<?php
include('ufoot.php');
  ?>