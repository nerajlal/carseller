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


<!-- 
<div style="display:flex">
	<div >
		<form action="" method="POST" >

			<table   style="padding:10px; margin-left:30px; margin-top: 20px;column-width: 10px" >
				
        <tr ><td><b>Select Body Type</b></td></tr>
        
          <td>
            <select name="cbody" class="form-control" style="margin:2% 0">
              <option >--Select--</option>
            <option  value="HATCHBACK">Hatch Back</option>
            <option  value=" SEDAN">Sedan</option>
            <option  value="VAN">Van</option>
            <option  value="SUV">Suv</option>
            <option  value=" MUV">muv</option>

          </select>
          
        </td>
      </tr>
    
  
      <tr><td><b>Select Price Range</b></td></tr>
        <tr>
          <td>
            <select name="cprice" class="form-control" style="margin:2% 0">
              <option>--Select--</option>
              <option  value="1-2">Less than 2 Lakh</option>
              <option  value="2-4">2 Lakh to 4 Lakh</option>
              <option  value="4-6">4 lakh to 6 lakh</option>
              <option  value="6">More than 6 Lakh</option>

            </select>
          </td>
        </tr>


        <tr><td><b>Select Fuel Type</b></td></tr>
    <tr class="tabletr">
      <td>  
         <select name="fuel" class="form-control" style="margin:2% 0">
            <option >---Select--</option>
            <option value="cng">CNG</option>
            <option value="lpg">LPG</option>
                <option value="diesel">DIESEL</option>
              <option value="petrol">PETROL</option>
            </select></td>
    </tr>

    
        

  
        <tr><td><b>Select City</b></td></tr>
        

          
          <tr>
              <td>
                 <select name="city" class="form-control" style="margin:2% 0">
                  <option>---Select---</option>
            <?php
           
              $q="SELECT city FROM CARS";
              //echo $q;
              $m=mysql_query($q,$conn);
              while($row=mysql_fetch_assoc($m)){


              ?>
          
            <option ><?php echo $row['city']?>    
          <?php
            }
          ?>
          </option></select> </td>
        </tr>


      <tr>
        <td><br><br></td>
      </tr><tr>
      <td><input type="submit" name="filter" value="filter" class="form-control" style="margin:2% 0; background: grey;color: white">
        
      </td></tr>
      </table>
    </form>

  </div>
  
 -->
  

<?php
								$count=1;
                  $q="SELECT * fROM CARS where status='1'";
                  //echo $q;
                  $m=mysql_query($q,$conn);
                  // if($m){
                  //  echo "good";
                  // }
                  
                  while($r=mysql_fetch_assoc($m))
                    {

?>

          <br>
              <div class="col-md-4">
                <div class="product-item">
                  <?php $key=$r['carid']?>
                  <a href="car-details.php?id=<?php echo $key?>">
                    <img src="car/assets/images/product-1-370x270.jpg" alt="" ></a>
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
$count++;

             }
             ?>

           
              
          </div>
        </div>
      </div>
    </div>