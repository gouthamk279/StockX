<!-- <html>
    <title>Admin Login</title>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password">
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<div class="social-login">  
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</html> -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="../login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" action="login.php">
					<label for="chk" aria-hidden="true">LOGIN</label>
					<input type="email" name="email" id="email" placeholder="Email" required>
					<input type="password" name="pswd" id="pswd" placeholder="Password" required>
					<button>login</button>
				</form>
			</div>
	</div>
	
	
</body>
</html>
<?php
include '../dbconnect.php';

if (isset($_POST["email"]) && isset($_POST["pswd"])) {
    $email = $_POST["email"];
    $password = md5($_POST["pswd"]);
    $sql = "SELECT * FROM admin WHERE username = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: index.php");
        include '../logincheck.php';
    } else {
        header("Location: login.php");
    }
}
if (isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}

$conn->close();
?>