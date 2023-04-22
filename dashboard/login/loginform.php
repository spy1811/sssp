
<?php
include('../config.php');
session_start();

if(isset($_POST['signup']))
{

	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$user_type=$_POST['user_type'];
	$password=$_POST['password'];
	

   if($name != "" || $usename != "" || $email !="" || $user_type != "" || $password != "")
   {
		$result = mysqli_query($conn, "SELECT * FROM login where email='".$email."'");
		$num_rows = mysqli_num_rows($result);
		if($num_rows >= 1){
			echo '<script type="text/javascript">
           alert("Email Already Existed"); 
           window.location.href="loginform.php";
           </script>';
		}else{
		$sql="insert into login (name, username, email, user_type, password) values ('$name','$username','$email', '$user_type','$password')";
		$run=mysqli_query($conn, $sql);
		if($run == TRUE)
		{
			echo '<script type="text/javascript">
			alert("Sign-In profile created Successfully"); 
			window.location.href="loginform.php";
			</script>';
		}    
		else{
			echo '<script type="text/javascript">
			alert("Sign-In profile not created");
			</script>';
			}
		}
   }
   else{
       echo '<script type="text/javascript">
       alert("PLease Fill All Credential Properly");
       </script>';
       }
   }
?>

<?php 

if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=$_POST['password'];
   $count=0;
   $sql="select * from login";
   $rs=mysqli_query($conn,$sql);
   while($rw=mysqli_fetch_array($rs))
   {
        if($rw['email']==$email && $rw['password']==$password)
        {
			$nameuser=$rw['name'];
            $count++;
        }
	}      
        if($count>0)
		{
           	
            $_SESSION['username']=$email;
			$_SESSION['nameuser']=$nameuser;
			$uid=$_SESSION['username'];
			$sql1="select * from login where email='$uid'";
			$rl=mysqli_query($conn,$sql1);
			$rt=mysqli_fetch_row($rl);
			$type=$rt[4];
			$_SESSION["utype"] = $type;
			if($type=="admin")
			{
				echo '<script type="text/javascript">
            alert("Successfully Logged IN");
            window.location.href="../index.php";
            </script>';
			}
			else if($type=="sales")
			{
				echo '<script type="text/javascript">
            alert("Successfully Logged IN");
            window.location.href="../index.php";
            </script>';
			}
			
            
        }

        else
		{
            echo '<script type="text/javascript">
            alert("Invalid credentials");
            </script>';
        }
   }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginform.css">
    <title>Document</title>
</head>
<body>
    <div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
			<!-- SIGN UP -->
			<div class="col align-items-center flex-col sign-up">
				<div class="form-wrapper align-items-center">
					<div class="form sign-up">
						<form action="" method="post">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="name" placeholder="Full Name">
						</div>
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="username" placeholder="Username">
						</div>
						<div class="input-group">
							<i class='bx bx-mail-send'></i>
							<input type="email" name="email" placeholder="Email">
						</div>
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<select name="user_type" class="bx bxs-user">
								<option value="">Select User Type</option>
								<option value="admin">Admin</option>
								<option value="sales">Sales</option>
							</select>
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="password" placeholder="Password">
						</div>
						
						<button type="submit" name="signup">
							Sign up
						</button>
						<p>
							<span>
								Already have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign in here
							</b>
						</p>
						</form>
					</div>
				</div>
			
			</div>
			<!-- END SIGN UP -->
			<!-- SIGN IN -->
			<div class="col align-items-center flex-col sign-in">
				<div class="form-wrapper align-items-center">
					<div class="form sign-in">
						<form action="" method="post">
						<div class="input-group">
							<i class='bx bxs-user'></i>
							<input type="text" name="email" placeholder="Email">
						</div>
						<div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="password" placeholder="Password">
						</div>
						<button tyep="submit" name="login">
							Sign in
						</button>
						<!-- <p>
							<b>
								Forgot password?
							</b>
						</p> -->
						<!-- <p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
						</p> -->
						</form>
					</div>
				</div>
				<div class="form-wrapper">
		
				</div>
			</div>
			<!-- END SIGN IN -->
		</div>
		<!-- END FORM SECTION -->
		<!-- CONTENT SECTION -->
		<div class="row content-row">
			<!-- SIGN IN CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="text sign-in">
					<h2>
						Welcome
					</h2>
	
				</div>
				<div class="img sign-in">
		
				</div>
			</div>
			<!-- END SIGN IN CONTENT -->
			<!-- SIGN UP CONTENT -->
			<div class="col align-items-center flex-col">
				<div class="img sign-up">
				
				</div>
				<div class="text sign-up">
					<h2>
						Join with us
					</h2>
	
				</div>
			</div>
			<!-- END SIGN UP CONTENT -->
		</div>
		<!-- END CONTENT SECTION -->
	</div>
</body>
<script src="loginform.js"></script>
</html>

