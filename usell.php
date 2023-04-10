   <?php
  include('uhead.php');
  include('db_connect.php');

  ?>

  <div class="page-heading about-heading header-text" style="background-image: url(car/assets/images/heading-1-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Sell</h4>
              <h2> From our company</h2>
            </div>
          </div>
        </div>
      </div>
    </div>






<form action="" method="POST" style="margin:2% 25%" enctype="multipart/form-data" >
  <table>
    
    <tr class="tabletr">
      <td>Car company :</td><td> <input type="text" name="carcompany" class="form-control" style="margin:2% 0"></td>
    </tr>
    <tr class="tabletr">
      <td>Car Model :</td><td> <input type="text" name="carmodel" class="form-control" style="margin:2% 0"></td>
    </tr>
    <tr class="tabletr">
      <td>Year :</td><td> <input type="text" name="caryear" class="form-control" style="margin:2% 0"></td>
    </tr>
    <tr class="tabletr">
      <td>Owner No. :</td><td> <input type="text" name="owner" class="form-control" style="margin:2% 0"></td>
    </tr>
    <tr class="tabletr">
      <td>Price :</td><td> <input type="text" name="price" class="form-control" style="margin:2% 0"></td>
    </tr>
    <tr class="tabletr">
      <td>City :</td><td> <input type="text" name="city" class="form-control" style="margin:2% 0"></td>
    </tr>
    <tr class="tabletr">
      <td>Fuel Type :</td><td> <select name="fuel" class="form-control" style="margin:2% 0"><option value="#">---SELECT--</option><option value="cng">CNG</option><option value="lpg">LPG</option> <option value="diesel">DIESEL</option>
        <option value="petrol">Petrol</option></select></td>
    </tr>
    <tr class="tabletr">
      <td>Body Type :</td><td> <select name="body" class="form-control" style="margin:2% 0"><option value="#">---SELECT--</option>
        <option value="suv">SUV</option>
        <option value="sudan">SUDAN</option><option value="van">VAN</option>
        <option value="muv">MUV</option><option value="hatchback">HATCHBACK</option></select></td>
    </tr>

    <tr class="tabletr">
      <td>Description :</td><td> <input type="text" name="description" class="form-control" style="margin:2% 0"></td>
    </tr>
    <tr class="tabletr">
      <td>Seller Phone no :</td><td> <input type="text" name="s_ph" class="form-control" style="margin:2% 0"></td>
    </tr>
    <tr class="tabletr">
      <td>Registeration Number :</td><td> <input type="text" name="reg_no" class="form-control" style="margin:2% 0"></td>
    </tr>
    <tr class="tabletr">
      <td>Kilometer driven :</td><td> <input type="text" name="km" class="form-control" style="margin:2% 0"></td>
    </tr>
    <tr class="tabletr">
      <td> PHOTO :</td><td> <input type="file" class="form-control" id="photo" name="photo" style="margin:2% 0"></td>
    </tr>
    
    
    <tr><td><br><br></td></tr><br><br>
    <tr>
      <td></td><td> <input type="submit" name="submit"  style="padding: 10px 25px"></td>
    </tr>


    
  </table>

</form>
<?php

  if(isset($_POST['submit']))
  {
    $company=$_POST['carcompany'];
    $model=$_POST['carmodel'];
    $year=$_POST['caryear'];
    $owner=$_POST['owner'];
    $price=$_POST['price'];
    $city=$_POST['city'];
    $fuel=$_POST['fuel'];
    $body=$_POST['body'];
    $description=$_POST['description'];
    $s_ph=$_POST['s_ph'];
    $reg_no=$_POST['reg_no'];
    $km=$_POST['km'];
    

//        $target_dir = "carpic/";
// //echo $target_dir;
// $target_file = $target_dir . basename($_FILES["photo"]["$reg_no"]);
// //echo $target_file; 
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // echo $imageFileType;
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"]))
// {
//     $check = getimagesize($_FILES["photo"]["$reg_no"]);
//     //echo $check;
//     if($check !== false) 
//   {
//     echo "File is an image - " . $check["mime"] . ".";
//     move_uploaded_file($_FILES["photo"]["$reg_no"], $target_file) or die('Error'.mysql_error());
//     $uploadOk = 1;
//   }
//   else 
//   {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }
// echo $check;
    $target_dir = "carpic/";
    $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
    $new_file_name = $reg_no . "." . $imageFileType;
    $target_file = $target_dir . $new_file_name;

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". $new_file_name . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  

      

    session_start();
    $lid=$_SESSION['lkey']; 

    $q="INSERT INTO CARS(sellerid,company,model,year,owner_no,price,city,fuel_type,body_type,description,seller_ph,Registration_no,km,photo)
     values('$lid','$company','$model','$year','$owner','$price','$city','$fuel','$body','$description','$s_ph','$reg_no','$km','$new_file_name')";
     //echo $q;
     $m=mysql_query($q,$conn);
     if($m)
     {
      echo "<script>alert('Car successfully inserted')</script>";
     }
  }






   
include('ufoot.php');
  ?>