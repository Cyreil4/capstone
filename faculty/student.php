
<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Faculty Dashboard</title>


    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <link href="../css/dashboard.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <li style="float:right"><a onclick="return confirm('Go back to the main page?')"<a class="navbar-brand" href="../main/main.php">Faculty Dashboard</a></li>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="student.php">Student List</a></li>
            <li><a href="prof.php">Your Profile</a></li>
            <li style="float:right"><a onclick="return confirm('Are you sure you want to logout?')" href="admin.php?logout='1'"  style="color:red;">Logout</a></li>

          </ul>
          <form class="navbar-form navbar-right">
            
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Add Student Account<span class="sr-only">(current)</span></a></li>
             <li><a href="title.php">Create Exam</a></li>
            <li><a href=""></a></li>
            <li><a href="#"></a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Student</h1>

          <div class="table-responsive">
            <table class="table table-striped">
  <link rel="stylesheet" type="text/css" href="../admin/st.css">

  <?php
    $connection = mysqli_connect('localhost', 'root', '', 'registration')or die(mysqli_error($connection));
    $result = $connection->query("SELECT * FROM users") or die($connection->error);
    //pre_r($result);
    ?>
	<div class="container">
	<div class="row justify-content-center">
	<h2></h2>
		<table class="table "> 
		<thead> 
			<tr> 
				<th>Username List</th> 
				<th>Email</th>
				<th>Delete Account</th>
			</tr> 
		</thead> 

		<?php 
		 	while ($row = $result->fetch_assoc()): ?>
		 	<tr>
		 		
		 		<td><?php echo $row['username']; ?></td>
		 		<td><?php echo $row['email']; ?></td>
		 		<td>
				
					<a href="student.php?delete=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-remove" name="delete" aria-hidden="true"></span></a>
				</td>

		 	</tr>
		 <?php endwhile; ?>

        

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
