<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
				<form method="post" action="signup.php">
					<label for="chk" aria-hidden="true">SIGNUP</label>
                    <input type="text" name="name" id="name" placeholder="Full Name">
					<input type="email" name="email" id="email" placeholder="Email" required>
					<input type="password" name="pswd" id="pswd" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <input type="password" name="cfpswd" id="cfpswd" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					<button>login</button>
				</form>
			</div>
	</div>

</body>
</html>
<?php
include 'dbconnect.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["pswd"])) {

    $Name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pswd"];
    $sql = "INSERT INTO users (name, email, password) VALUES ('$Name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Sign up successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>