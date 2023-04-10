 <?php
      include('a_header.php');
      include('db_connect.php');
    ?>



    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"> Complaints</i></h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>
                  <tr>


     <div class="row">
     <div class="col-lg-6">
     
       <form action="" method="POST">
          <div class="card card-default">
               <!-- <div class="card-header card-header-border-bottom">
                    <h2>Complaints</h2>
               </div> -->

           <?php

              include 'db_connect.php';
              $p=1;
                 //$uname=$_GET['id'];
                 //$uname=$_SESSION['username']; 
              $result = mysql_query("SELECT * FROM contact ");

              while($row = mysql_fetch_array($result))
              {
              ?>
             
               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for="">Name</label>
                    <div class="input-group mb-2">

                         <input type="text" class="form-control" id="hname" name="hname" value="<?php echo $row['name'];?>" 
                         disabled="disabled">
                    </div>
               </div>
                    
               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for="">E mail</label>
                    <div class="input-group mb-2">

                         <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>" 
                         disabled="disabled">
                    </div>
               </div>
               
               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for="">Subject</label>
                    <div class="input-group mb-2">

                         <input type="text" class="form-control" id="sub" name="sub" value="<?php echo $row['subject'];?>" 
                         disabled="disabled">
                    </div>
               </div>

               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for="">Message</label>
                    <div class="input-group mb-2">

                         <input type="text" class="form-control" id="msg" name="msg" value="<?php echo $row['message'];?>" 
                         disabled="disabled">
                    </div>
               </div>

               <div class="col-sm-12">
                    <label class="text-dark font-weight-medium" for=""></label>
                    <div class="input-group mb-2">
          <a href="a_reply.php?id=<?php echo $row['senderid'] ?>"
               <button class="my-1 btn btn-sm btn-success" name="submit"  type="submit">REPLY</button>
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