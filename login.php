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
			</div>
	</div>
	
	
</body>
</html>
<?php
include 'dbconnect.php';

if (isset($_POST["email"]) && isset($_POST["pswd"])) {
    $email = $_POST["email"];
    $password = $_POST["pswd"];
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        include 'logincheck.php';
    } else {
        header("Location: login.php");
    }
}
if (isset($_SESSION['email'])) {
    header('Location: dashboard.php');
    exit();
}

$conn->close();
?>