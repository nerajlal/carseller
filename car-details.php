<?php
  include('uhead.php');
  include('db_connect.php');
  ?>

<?php
     $id=$_GET['id'];
                  $q="SELECT * fROM CARS where carid=$id ";
                  echo $q;
                  $m=mysql_query($q,$conn);
                  // if($m){
                  //  echo "good";
                  // }
                  
                  while($r=mysql_fetch_array($m))
                    {

?>
            <div class="col-md-6">
            <form action="#" method="post" class="form" enctype="formdata/multipart">
              <ul class="list-group list-group-flush">
                
               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left"> </span>

                         <strong class="pull-right"> </strong>
                    </div>
               </li>

                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left"> </span>

                         <strong class="pull-right"> </strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left"> </span>

                         <strong class="pull-right"> </strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Company</span>

                         <strong class="pull-right"><?php echo $r['company']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left"> Model</span>

                         <strong class="pull-right"><?php echo $r['model']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Year</span>

                         <strong class="pull-right"><?php echo $r['year']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Owner Number</span>

                         <strong class="pull-right"><?php echo $r['owner_no']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">City</span>

                         <strong class="pull-right"><?php echo $r['city']?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Fuel Type</span>

                         <strong class="pull-right"><?php echo $r['fuel_type'] ?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Body Type</span>

                         <strong class="pull-right"><?php echo $r['body_type'] ?></strong>
                    </div>
               </li>


               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Description</span>

                         <strong class="pull-right"><?php echo $r['description'] ?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Phone number</span>

                         <strong class="pull-right"><?php echo $r['seller_ph'] ?></strong>
                    </div>
               </li>

               <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Kilometers</span>

                         <strong class="pull-right"><?php echo $r['km']?></strong>
                    </div>
               </li>

               <!-- <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Registration Number</span>

                         <strong class="pull-right"><?php echo $r['Registration_no'] ?></strong>
                    </div>
               </li> -->

                <li class="list-group-item">
                    <div class="clearfix">
                         <span class="pull-left">Registration Number</span>
<?php $ne=$r['Registration_no']; ?>
                         <strong class="pull-right"><img src=" qr/<?php echo $ne ?>.png"></strong>
                         <br><br><br><br><br><br><br><br><br><br><center>
                         <a href="test.php?id=<?php echo $ne?>"><button type="submit" name="submit" style="background: green;color: white">DECODE</button></a>
                         <!-- <input type="submit" value="DECODE" style="background: green;color: white" onclick="<?php echo "<script>alert('Registration number : ')</script>"; ?>"></input> -->

                    </center>
                    </div>
               </li>

              </ul>
              <br>
              <center>
              <a href="ucontact.php"><button type="button" style="background: green;color: white">Message</button></a></center>
            </form>
          </div>
        </div>
      </div>
    </div>

<?php

             }

             if(isset($_POST['submit'])){
                     echo "<script>alert('nil' ');
                                   location.href='car-details.php';
                         </script>";
                    }
             ?>