 <?php
      include('uhead.php');
      include('db_connect.php');
    ?>



    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i></h3>
        <!-- <div class="row mb"> -->
          <!-- page start-->
          <div>.</div>
           <div>.</div>
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>
                  <tr>


     <div class="row">
     <div class="col-lg-6">
     
       <form action="" method="POST">
          <div class="card card-default">
               <div class="card-header card-header-border-bottom">
                    <h2>Notifications</h2>
               </div>

           <?php

              include 'db_connect.php';
              $p=1;
                 //$uname=$_GET['id'];
                 //$uname=$_SESSION['username']; 
              session_start();
              $id=$_SESSION['lkey'];
              $result = mysql_query("SELECT * FROM reply where senderid='$id'");

              while($row = mysql_fetch_array($result))
              {
              ?>
             
               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for="">Author</label>
                    <div class="input-group mb-2">

                         <input type="text" class="form-control" id="hname" name="hname" value="<?php echo $row['author'];?>" 
                         disabled="disabled">
                    </div>
               </div>
                    
               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for="">Subject</label>
                    <div class="input-group mb-2">

                         <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['subject'];?>" 
                         disabled="disabled">
                    </div>
               </div>
               
               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for="">Message</label>
                    <div class="input-group mb-2">

                         <input type="text" class="form-control" id="sub" name="sub" value="<?php echo $row['message'];?>" 
                         disabled="disabled">
                    </div>
               </div>

               
               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for=""></label>
                    <div class="input-group mb-2">
          <!-- <a href=".php"
               <button class="my-1 btn btn-sm btn-success" name="submit"  type="submit">REPLY</button> -->
          </a>
          </div>
     </div>
     <div>
          .
     </div>
     <div>
          .
     </div>
     <div>
          .
     </div>
     <div>
          .
     </div>


              

               
               <?php
                 }
?>
          </div>
     </div></form>


     
</div>