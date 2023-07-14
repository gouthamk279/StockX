<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <script src="login.js"></script>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" action="login.php">
					<label for="chk" aria-hidden="true">LOGIN</label>
					<input type="email" name="email" id="email" placeholder="Email" required>
					<input type="password" name="pswd" id="pswd" placeholder="Password" required>
					<button>login</button>
				</form>
                    

<?php
include 'dbconnect.php';

if (isset($_POST["email"]) && isset($_POST["pswd"])) {
    $email = $_POST["email"];
    $password = md5($_POST["pswd"]);
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['Name'];
        header("Location: products.php");
        include 'logincheck.php';
    } else {
        header("Location: login.php?error=1");
    }
}
if(isset($_GET['error']))
{
    echo "<center><span style='color: white;'>Invalid Email or Password</span></center>";
}
if (isset($_SESSION['email'])) {
    header('Location: products.php');
    exit();
}

$conn->close();
?>
    <center>Don't Have an account?<a href="signup.php">Signup</a></center>
			</div>
	</div>
	
	
</body>
</html>