<!DOCTYPE html>
<html lang="en">
	<?php            
      
		if(isset($_POST['submit'])){
				$email = $_POST["email"];
				$secque = $_POST["secque"]; 
				$sans = $_POST["sans"];
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "signup_login_page";

				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				  }

			$sql = "select * from user_data where Email = '$email' and security_questions = '$secque' and security_answer='$sans'";  
			$result = mysqli_query($conn, $sql);  
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
			$count = mysqli_num_rows($result);
	
			
			if($count == 1){
				$ans = $row["u_password"] ;
				echo "<script>alert('$ans')</script>";  
			}  
			else{  
				echo "<script>alert ('Please enter valid details')</script>";
			}  
	   }
		
	?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot</title>
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
	height: 600px;
	width: 460px;	
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

.login {
	width: 320px;
	padding: 30px;
	padding-top: 156px;
}

.login__field {
	padding: 20px 0px;	
	position: relative;	
}

.login__icon {
	position: absolute;
	top: 30px;
	color: #7875B5;
}

.login__input {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #6A679E;
}

.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 80%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	border-color: #6A679E;
	outline: none;
}

.button__icon {
	font-size: 24px;
	margin-left: auto;
	color: #7875B5;
}

.social-login {	
	position: absolute;
	height: 140px;
	width: 160px;
	text-align: center;
	bottom: 0px;
	right: 0px;
	color: #fff;
}

.social-icons {
	display: flex;
	align-items: center;
	justify-content: center;
}

.social-login__icon {
	padding: 20px 10px;
	color: #fff;
	text-decoration: none;	
	text-shadow: 0px 0px 8px #7875B5;
}

.social-login__icon:hover {
	transform: scale(1.5);	
}
table{
	padding: 10px;
	margin: 10px;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="post">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="User Email" name="email" required>
                    </div>
					<div>
						<select name="secque" required>security question
						<option>Which is your favorite colour?</option>
						<option>who is your favorite actor?</option>
						<option>Which is your favorite bike?</option> 
						</select>
              			<input type="text" placeholder="Your Answer" name="sans"></input>
       				</div>
                    
					
                    <button class="button login__submit" name="submit">
                        <span class="button__text">Submit</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>	
								
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