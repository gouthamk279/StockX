<!DOCTYPE html>
<html>
<head>
  <title>Shoe Shopping - Login</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }
    
    .container {
      width: 300px;
      margin: 0 auto;
      margin-top: 150px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    
    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
    
    .error {
      color: #FF0000;
      margin-bottom: 15px;
    }
  </style>
</head>
<body >
  <div class="container">
    <h2>Login</h2>
    <form method="post" action="login.php">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <?php if (isset($_SESSION['error'])): ?>
      <div class="error"><?php echo $_SESSION['error']; ?></div>
      <?php unset($_SESSION['error']); ?>
      <?php endif; ?>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
<?php
session_start();
$validUsername = 'admin';
$validPassword = 'admin';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $enteredUsername = $_POST['username'];
  $enteredPassword = $_POST['password'];
  if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
    $_SESSION['username'] = $enteredUsername;
    header('Location: dashboard.php');
    exit();
  } else {
    $_SESSION['error'] = 'Invalid login details';
    header('Location: login.php' );
    exit();
  }
}
?>
