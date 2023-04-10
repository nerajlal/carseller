
    <?php
      include('a_header.php');
      include('db_connect.php');
    ?>

      <!-- <center><b><u><h1>Cars</h1></u></b></center> -->

    



<!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>QR Code</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered">
                <thead>
                  <tr>
                  
                    <!-- <th>Address</th> -->
                    <th class="hidden-phone">Company</th>
                    <th class="hidden-phone">Model</th>
                    <th class="hidden-phone">Year</th>
                    <th class="hidden-phone">Price</th>
                     <th class="hidden-phone">City</th>
                    <th class="hidden-phone">Fuel Type</th>
                       <th class="hidden-phone">Body Type</th>
                        <th class="hidden-phone">Seller Phone</th>
                         <th class="hidden-phone">Registration Number</th>
                          <th class="hidden-phone">Kilometer</th>
                           <th class="hidden-phone">Photo</th>
                        <!-- <th class="hidden-phone">Approve</th> -->
                        <th class="hidden-phone">QR Code</th>



                  </tr>
                </thead>
               <tbody>
                 <?php
                  $q="SELECT * fROM CARS where status='1'";
                  // echo $q;
                  $m=mysql_query($q,$conn);
                  // if($m){
                  //  echo "good";
                  // }
                  while($r=mysql_fetch_assoc($m))
                    {

                  ?>
                    <tr>
                  
                    <!-- <td>mm<?php ?></td>               -->
                      <td><?php echo $r['company']?></td>
                      <td><?php echo $r['model']?></td>
                      <td><?php echo $r['year']?></td>

                      <td><?php echo $r['price']?></td>
                      <td><?php echo $r['city']?></td>
                      <td><?php echo $r['fuel_type'] ?></td>
                        <td><?php echo $r['body_type'] ?></td>
                          <td><?php echo $r['seller_ph'] ?></td>
                            <td><?php echo $r['Registration_no'] ?> </td>
                              <td><?php echo $r['km']?></td>
                               <td><?php  echo $r['photo']?></td>

                               <!-- <td><a href="a_capprove.php?key={$d.loginkey}"><button type="button" style="background: green;color: white">Approve</button></a></td> -->
                             <td><a href="createqr.php?id=<?php echo $r['Registration_no'];?>" <form><input type='button' value="Generate" style="background: green;color: white"></input></form></a></td><td>

                             <!--  {if $d.status==0}
                              <td><a href="admin_approvecontroller.php?key={$d.loginkey}"><button type="button" style="background: green;color: white">Approve</button></a></td>
                             <td> <a href="admin_rejectcontroller.php?key={$d.loginkey}"><button type="button" style="background: red; color: white">Reject</button></a></td>
                             {elseif $d.status==1}
                              <td>Approved</a></td>
                             <td> <a href="admin_rejectcontroller.php?key={$d.loginkey}"><button type="button" style="background: red; color: white">Reject</button></a></td>
                             {else}

                              <td><a href="admin_approvecontroller.php?key={$d.loginkey}"><button type="button" style="background: green;color: white">Approve</button></a></td>
                             <td> Rejected</a></td>
                              -->


                 </tr>
                 <?php

             }
             ?>
                 
               </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->





            <a href="advanced_table.php" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>

   <?php
      include('a_footer.php');
    ?>
  