<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h2>Admin Login</h2>
  </div>

   
  <form method="post" action="">
    <?php include('errors.php'); ?>
    <?php if (isset($_SESSION['success1'])) : ?>
      <div class="error success" >
        <h4>
          <?php 
            echo $_SESSION['success1']; 
            unset($_SESSION['success1']);
          ?>
        </h4>
      </div>
    <?php endif ?>

    <div class="input-group">
      <label>Username:</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password:</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      
    </p>
  </form>
</body>
</html>