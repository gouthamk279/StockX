<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function checkPasswordMatch() {
        var password = $("#pswd").val();
        var confirmPassword = $("#cfpswd").val();
        if (password != confirmPassword){
            $("#CheckPasswordMatch").html("Passwords does not match!");
            $('#submit').prop('disabled',true);
         } else{
        $("#CheckPasswordMatch").html("");
        $('#submit').prop('disabled',false);
    }
    }
    $(document).ready(function () {
       $("#cfpswd").keyup(checkPasswordMatch);
    });

    function checkemail(){
        $(document).ready(function() {
            $('#email').on('blur', function() {
                var email = $(this).val();
                if (email !== '') {
                    $.ajax({
                        url: 'ajaxfile.php',
                        method: 'POST',
                        data: {
                            user_email: email
                        },
                        success: function(response) {
                            $('#email_status').html(response);
                            var isEmailExists = response.includes('Email already exists');
                            $('#submit').prop('disabled', isEmailExists);
                        }
                    });
                }
            });
        });
    }
</script>
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
				<form method="post" action="signup.php" >
					<label for="chk" aria-hidden="true">SIGNUP</label>
                    <input type="text" name="name" id="name" placeholder="Full Name" required onkeydown="return /[a-zA-Z\s]+/i.test(event.key)"">
					<input type="email" name="email" id="email" placeholder="Email" required onkeyup="checkemail();">
                    <center><span style="color: white;" id='email_status'></span></center> 
					<input type="password" name="pswd" id="pswd" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <input type="password" name="cfpswd" id="cfpswd" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					<button id="submit" name="submit">Signup</button>   
				</form>
                
<?php
include 'dbconnect.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["pswd"])) {

    $Name = $_POST["name"];
    $email = $_POST["email"];
    $password = md5($_POST["pswd"]);
    $sql = "INSERT INTO users (name, email, password) VALUES ('$Name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<center>Sign up successful!</center>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  
    $conn->close();
?>
    <center><div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch"></div></center>
    <center>Already Have an account?<a href="login.php">Login</a></center>
            </div>
      </div>
  </body>
</html>