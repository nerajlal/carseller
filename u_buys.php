<?php
  include('uhead.php');
  include('db_connect.php');
  $j=0;

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




<?php
                  $q="SELECT * fROM CARS where status='4'";
                  //echo $q;
                  $m=mysql_query($q,$conn);
                  // if($m){
                  //  echo "good";
                  // }
                  
                  while($r=mysql_fetch_assoc($m))
                    {

?>

        
              <div class="col-md-6">
                <div class="product-item">
                  <?php $key=$r['carid']?>
                  <a href="car-details.php?id=<?php echo $key?>">
                    <img style="width: 490px; height: 250px;" src="carpic/<?php echo $r['photo']?>" alt="" ></a>
                  <div class="down-content">
                    <a href="car-details.php"><h4><?php echo $r['company']?>
                      <?php echo $r['model']?></h4></a>
                    <h6><small><del> </del></small>  <?php echo $r['price']?></h6>

                    
                    <small>
                      <strong title="Author"><i class="fa fa-map-marker"></i>  <td><?php echo $r['city'] ?></td></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-calendar"></i>  <td><?php echo $r['year'] ?></td></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-filter"></i>  <td><?php echo $r['fuel_type'] ?></td></strong>&nbsp;&nbsp;&nbsp;&nbsp;

                    </small>
                    <small>
                      <strong title="Author"><i class="fa fa-dashboard"></i> <td><?php echo $r['km']?> km</td></strong> &nbsp;&nbsp;&nbsp;&nbsp;
                      <strong title="Author"><i class="fa fa-car"></i>  <td><?php echo $r['body_type'] ?></td></strong>&nbsp;&nbsp;&nbsp;&nbsp;
                      
                    </small>
                  </div>
                </div>
              </div>
            </div>

           <?php

             }
             ?>

           
              
          </div>
        </div>
      </div>
    </div>