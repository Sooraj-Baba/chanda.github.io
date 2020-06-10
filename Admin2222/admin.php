

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap 3.4.1/css/bootstrap.min.css"><!--this is link bootstrap library-->
	<link rel="stylesheet" href="admin.css"><!--this is link admin.css file-->
	<title>admin</title>
</head>
<body>
	<div class="container-fluid cbox">
	<form method="POST">
		<div class="row login">
	    <div class="col-md-12">
	    	<label>USERNAME</label>
			<div class="form-group input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
			     <input type="text" name="username" class="form-control input-lg" placeholder="username">
		    </div>
		    	   <label>PASSWORD</label>
		           <div class="form-group input-group">
		           	<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					   <input type="text" name="password" class="form-control input-lg" placeholder="password">
				   </div>
		<center><button type="submit" name="button" class="btn btn-success">LOGIN</button></center>
		</div>
		</div>
	    </div>
	</form>
	<script src="sweetalert/sweetalert.min.js"></script><!--this is link sweetalert popup message of your browser if you registration then registration success of registration unsuccess popup message your browser-->
	<script src="jquery/jquery.js"></script>
    <script src="bootstrap 3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
session_start();
include("connection.php");
if(isset($_POST['button']))/*if click login button then action performmed*/
{
	$username=$_POST['username'];
    $password=$_POST['password'];
	$sql=("select * from admin where username='$username' && password='$password'");/*your database admin table check your username and password correct or not correct if correct then true value if not correct then false value if correct value then you success login*/
	$data=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($data);
	if($rowcount==true)

	{
		echo "login successfull";
             $_SESSION['username'] = $username;
            header('location:adminmainpage.php');
	}
	else
	{
		echo "login failles";
				/*sweetalert popup message your browser login unsuccess swal accepted three parameter*/
	}
}
?>		            				            