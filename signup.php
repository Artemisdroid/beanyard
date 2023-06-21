<?php 
session_start();
?>
<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'connect.php' ?>
    <style>
        /* Google Font Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-image: url('images/byg.jpg');
  padding: 30px;
}
.container{
  position: relative;
  max-width: 850px;
  width: 100%;
  background: transparent;
  padding: 40px 30px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  perspective: 2700px;
}
.container .cover{
  position: absolute;
  top: 0;
  left: 50%;
  height: 100%;
  width: 50%;
  z-index: 98;
  transition: all 1s ease;
  transform-origin: left;
  transform-style: preserve-3d;
}
.container #flip:checked ~ .cover{
  transform: rotateY(-180deg);
}
 .container .cover .front,
 .container .cover .back{
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}
.cover .back{
  transform: rotateY(180deg);
  backface-visibility: hidden;
}
.container .cover::before,
.container .cover::after{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  background: #AF804F;
  opacity: 0.5;
  z-index: 12;
}
.container .cover::after{
  opacity: 0.3;
  transform: rotateY(180deg);
  backface-visibility: hidden;
}
.container .cover img{
  position: absolute;
  height: 100%;
  width: 100%;
  object-fit: cover;
  z-index: 10;
}
.container .cover .text{
  position: absolute;
  z-index: 130;
  height: 100%;
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.cover .text .text-1,
.cover .text .text-2{
  font-size: 26px;
  font-weight: 600;
  color: #FA9C0F;
  text-align: center;
}
.cover .text .text-2{
  font-size: 15px;
  font-weight: 500;
}
.container .forms{
  height: 100%;
  width: 100%;
  background: transparent;
  backdrop-filter: blur(16px) saturate(100%);
}
.container .form-content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.form-content .login-form,
.form-content .signup-form{
  width: calc(100% / 2 - 25px);
}
.forms .form-content .title{
  position: relative;
  font-size: 24px;
  font-weight: 500;
  color: #AF804F;
}
.forms .form-content .title:before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 25px;
  background: #AF804F;
}
.forms .signup-form  .title:before{
  width: 20px;
}
.forms .form-content .input-boxes{
  margin-top: 30px;
}
.forms .form-content .input-box{
  display: flex;
  align-items: center;
  height: 50px;
  width: 100%;
  margin: 10px 0;
  position: relative;
}
.form-content .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  padding: 0 30px;
  font-size: 16px;
  font-weight: 500;
  border-bottom: 2px solid rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}
.form-content .input-box input:focus,
.form-content .input-box input:valid{
  border-color: #fff;
}
.form-content .input-box i{
  position: absolute;
  color: #AF804F;
  font-size: 17px;
}
.forms .form-content .text{
  font-size: 14px;
  font-weight: 500;
  color: #fff;
}
.forms .form-content .text a{
  text-decoration: none;
}
.forms .form-content .text a:hover{
  text-decoration: underline;
}
.forms .form-content .button{
  color: #fff;
  margin-top: 40px;
}
.forms .form-content .button input{
  color: #FFF;
  background:#AF804F;
  border-radius: 6px;
  padding: 0;
  cursor: pointer;
  transition: all 0.4s ease;
}
.forms .form-content .button input:hover{
  background:#AF804F;
}
.forms .form-content label{
  color: #fff;
  cursor: pointer;
}
.forms .form-content label:hover{
  text-decoration: underline;
}
.forms .form-content .login-text,
.forms .form-content .sign-up-text{
  text-align: center;
  margin-top: 25px;
}
.container #flip{
  display: none;
}
@media (max-width: 730px) {
  .container .cover{
    display: none;
  }
  .form-content .login-form,
  .form-content .signup-form{
    width: 100%;
  }
  .form-content .signup-form{
    display: none;
  }
  .container #flip:checked ~ .forms .signup-form{
    display: block;
  }
  .container #flip:checked ~ .forms .login-form{
    display: none;
  }
}
    </style>
   </head>
<body>
<?php

if(isset($_POST['submit']))
{
    $username = mysqli_real_escape_string($conn, $_POST['nusername']);
    $email = mysqli_real_escape_string($conn, $_POST['nemail']);
    $password = mysqli_real_escape_string($conn, $_POST['npassword']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    $contact = mysqli_real_escape_string($conn, $_POST['ncontact']);


    $emailquery = "select * from signup where email = '$email'"; 
    $emailquery_run = mysqli_query($conn, $emailquery);
    $emailquery_num = mysqli_num_rows($emailquery_run);
    if($emailquery_num > 0)
    {
		?>
		<script>
			alert("Email Already Exists");
		</script>
		<?php
    }
	else 
	{
		if($password === $cpassword)
		{
			$insertquery = "insert into signup (name,email,password,cpassword,contact) values ('$username', '$email',  '$password', '$cpassword', '$contact')";
			$iquery = mysqli_query($conn, $insertquery);
			if($iquery)
            {
				?>
				<script>
					alert("Account Created Successfully");
					window.location.href = "success.php";
				</script>
				<?php
            }
            else
            {
               ?>
			   <script>
				alert("Error Occured");
				</script>
				<?php
            }
		}
		else
		{
			?>
			<script>
				alert("Passwords do not match");
			</script>
			<?php
		}
	}
}
?>

<?php
if(isset($_POST['login']))
{
    $email = $_POST['nemail'];
	$password = $_POST['npassword'];

	$loginquery = "select * from signup where email = '$email'";
	$query = mysqli_query($conn, $loginquery);
	
	$count = mysqli_num_rows($query);
	
	if($count)
	{
		$pass = mysqli_fetch_assoc($query);
    $_SESSION['user_id']=$pass['Id'];

		if($password === $pass["password"])

		{
			?>
		    <script>
			   alert("Login Successfull");
			   window.location.href = "index.php";
		    </script>
		    <?php
		}
		else
		{
			?>
		    <script>
			  alert("Invalid Password");
		    </script>
		    <?php
		}	
	}
	else
	{
		?>
		<script>
			alert("Invalid Email");
		</script>
		<?php
	}	
}
?>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="byg.jpg" alt="">
        <div class="text">
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
        </div>
      </div>
    </div>

    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="#" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="nemail" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password"name="npassword" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="forgot.php">Forgot password?</a></div><br>
              <div class="text"><a href="change.php">Change password?</a></div>
              <div class="button input-box">
                <input type="submit" name="login" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="#" method = "post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="nusername"placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email"name="nemail" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password"name="npassword" placeholder="Enter your password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password"name="cpassword" placeholder="Enter your password" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="text"name="ncontact" placeholder="Enter your contact" required>
              </div>
              <div class="button input-box">
                <input type="submit" name="submit" value="Submit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>