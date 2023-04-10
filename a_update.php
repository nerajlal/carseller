
<?php
      include('a_header.php');
      include('db_connect.php');
    ?>




 <section id="main-content">
      <section class="wrapper">
        
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
			<div class="card-header card-header-border-bottom">
				<h2>Update Username / Password</h2>
			</div>

           <?php

              include 'db_connect.php';
              $p=1;
			  //$uname=$_GET['id'];
			  //$uname=$_SESSION['username']; 
              $result = mysql_query("SELECT * FROM login where user='admin'");

              while($row = mysql_fetch_array($result))
              {
              ?>
     
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">User Name</label>
				<div class="input-group mb-2">

					<input type="email" class="form-control" id="hname" name="email" value="<?php echo $row['email'];?>" 
					>
				</div>
			</div>
			
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for="">Password</label>
				<div class="input-group mb-2">

					<input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password'];?>" 
					pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
					title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required
					>
				</div>
			</div>
			
		
			<div class="col-sm-12">
				<label class="text-dark font-weight-medium" for=""></label>
				<div class="input-group mb-2">
			<button class="my-1 btn btn-sm btn-success" name="submit"  type="submit">Update</button>
		</div>
	</div>

			<?php
			  }
?>
		</div>
	</div></form>
<?php
							  //include 'includes/dbconnect.php';
							 if(isset($_POST['submit']))
							 {
								 
								
								  


								 $sql="update login set email='$_POST[email]',password='$_POST[password]' where user='admin'";
								 //echo"$sql";
								 $result=mysql_query($sql,$conn);
								if($result)
								{
									echo "<script>alert('Password updated!');location.href='a_profile.php';</script>";
								}
							 	else
								{
									echo "<script>alert('Not updated!');location.href='a_profile.php';</script>";
								}
							 }	
								
						 
							
						?>

	
</div>


	

		

		

		





      </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
    
    
    <!-- Footer -->
   

    </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
 
    <script src='assets/plugins/charts/Chart.min.js'></script>
    <script src='assets/js/chart.js'></script>

    
    

    <script src='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
    <script src='assets/js/vector-map.js'></script>

    <script src='assets/plugins/daterangepicker/moment.min.js'></script>
    <script src='assets/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='assets/js/date-range.js'></script>

    

    
    
    
    

    <script src='assets/plugins/toastr/toastr.min.js'></script>

    

    
    
    

    
    

    

    <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet">
<script src="assets/options/optionswitcher.js"></script>
</body>
</html>

