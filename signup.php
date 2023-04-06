<!DOCTYPE html>
<html lang="en">
	<?php    
        if(isset($_POST['register'])){        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "signup_login_page";
        $fname = $_POST['fname'];
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $pnum = $_POST['pnum'];
        $upass = $_POST['upass'];
        $dob = $_POST['dob'];

        $pic = $_FILES['pic']['name'];
        $tmp_pic = $_FILES['pic']['tmp_name'];
        $folder = "Upload/";
        move_uploaded_file($tmp_pic,$folder.$pic); 
        $secque = $_POST['secque'];
        $sans = $_POST['sans'];
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));
        $age = $diff->format('%y');

        $verifyPassword = strlen($upass);
        if($verifyPassword >=8){
          if( $age>18) {
              $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                  }
                  $sql = "INSERT INTO user_data (fullname, username, email, phone_number, u_password, dob, pic, security_questions, security_answer)
                  VALUES('$fname', '$uname', '$email', '$pnum', '$upass','$dob','$pic','$secque','$sans')";
            
              if ($conn->query($sql) === TRUE) {
                  echo "<script>alert('Record add Successfuly...')</script>";
                  // header('Location: login.php');
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                  echo "<script>alert('<Enter Valid information...')</script>";
                }
                $conn->close();
                header("Location: index.php");
      }
      else{
        echo "<script>alert ('Your age is less 18')</script>";
      }
      }
      else{
        echo "<script>alert ('Password is at least 8 character')</script>";
      }
  }
 
	?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel = "icon" href="images/gujaratlogo.jpg"></link>
    
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
}

body {
	background-image: url(images/gujaratlogo-2.png);
	background-repeat: no-repeat;
	background-size: contain;
	background-position: center center;
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
}

.screen {		
	position: relative;	
	height: 650px;
	width: 500px;	
	box-shadow: 0px 0px 24px #5C5696;	
	opacity: .8;
	padding: 15px;
}

.screen__content {
	z-index: 1;
	position: relative;	
	height: 100%;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
}

.screen__background__shape1 {
	height: 520px;
	width: 520px;
	background: #FFF;	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: white;	
	top: -172px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, white, white);
	top: -24px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: white;	
	top: 420px;
	right: 50px;	
	border-radius: 60px;
}

.screen__content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 7px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}

 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 50%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
  margin: 20px;
   height: 45px;
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  opacity: 1;
  color: black;
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}

form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
    </style>
</head>
<body>
  <div class="container">
        <div class="screen">
            <div class="screen__content">
			<form action="#" method="post" enctype="multipart/form-data">
        <b><p style="text-align: center; font-size: 25px;">SignUp</p></b>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="fname" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="uname" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="pnum" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="upass" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password"  required>
          </div>
          <div>
          <span class="details">Date Of Birth</span>
          <input type="date"  name="dob" required>
        </div>
        </div>
        
        <div class="photo">
        <input type="file" style="margin:10px;"  id="PhotoToUpload"  name="pic" required>
        </div>
        <div>
                <select name="secque" required>
                <option>select your security question</option>
                 <option>Which is your favorite colour?</option>
                 <option>who is your favorite actor?</option>
                  <option>Which is your favorite bike?</option> 
              </select>
              <input type="text" placeholder="Your Answer" name="sans"></input>
   
        </div>
        <div class="button">
          <input type="submit" value="Register" name="register">
        </div>
          <table>
						<tr>
							<td>
								<p>Already Have Account?</p>
							</td>
						</tr>
						<tr>
							<td>
								<a href="Login.php">Login Here</a>
							</td>
						</tr>
				  </table>
      </form>
                
            </div>
              <div class="screen__background">
                  <span class="screen__background__shape screen__background__shape4"></span>
                  <span class="screen__background__shape screen__background__shape3"></span>		
                  <span class="screen__background__shape screen__background__shape2"></span>
                  <span class="screen__background__shape screen__background__shape1"></span>
              </div>		
            </div>
    </div>
</body>
</html>