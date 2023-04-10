
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
				<h2>View Profile</h2>
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
			<a href="a_update.php?id=<?php echo $row['email'];?>" id="approve"><input type='button' value='update'></a>
		</div>
	</div>
			<?php
			  }
?>
		</div>
	</div></form>


	
</div>