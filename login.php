<?php
	include('head.php');
	include('db_connect.php');

?>

<div id="sticky_header"></div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Wrapper ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 <div class="site_wrapper bg_white"> 
  <section id="home" class="section_scroll welcome_area" data-scroll-index="0"> 
  	<div class="bg_overlay bg_image page_cover" style="background-image:url('zman/images/bg/2.jpg')"></div>
            <div id="particles-js"></div>
            <div class="home_wrapper_info"> 
              <div class="container"> <div class="row justify-content-center"> 
                <div class="col-lg-12">
                 <div class="home_text_block text-center">
<center>
	<b><h1 style="color: white">Login</h1></b><br>
	<form method="POST">
		<table>
			<tr>
				<td style="margin-right: 30px">Email :</td><td><input type="email" name="email" class="form-control" style="margin-bottom: 20px; margin-left: 20px"></td>
			</tr>
			<tr>
				<td style="margin-right: 30px">Password :</td><td><input type="password" name="password" class="form-control" style="margin-bottom: 20px; margin-left: 20px"></td>

			</tr>
			<tr>
				<td></td><td><input type="submit" name="submit" style="padding: 10px 20px"></td>
			</tr>
		</table>
	</form>
</center>
</section>
</div>
<?php
include('footer.php');
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$user=0;
	$id=0;

	$q="SELECT * from login WHERE email='$email' and password='$password' ";
	 //echo $q;
	 //break;
	 $m=mysql_query($q,$conn);
	if($m)
	{
	
		while($r=mysql_fetch_array($m)){
				$id=$r['lid'];
				$user=$r['user'];
				$status=$r['status'];
				 if($status==1)
	       {
	        $flag=1;
	  	    session_start();
	        //$type=$r['type'];
	  	    $_SESSION['user'] = $user;
	  	    $_SESSION['lkey'] = $id;
	  	   // $_SESSION[$id];
	      }
			

			}
	
			
				
			
			// echo $user;
		if( $user=='user' && $status=='1' ){
				echo "<script>
					location.href='uhome.php';
				</script> ";
			}
		else if( $status=='3'){
				echo "<script>
				location.href='a_home.php';
				</script>";
			}
	

		else{
				echo "<script> alert('user not registered ');
				location.href='login.php';
				</script>";
}
}
}

?>

