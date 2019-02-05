<?php
include("users.php");
$username=$_SESSION['username'];
$profile=new users;
$profile->users_profile($username);
$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Online Cite Exam System</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Account</a></li>
    <li><a data-toggle="tab" href="#menu2">History</a></li>
   <li style="float:right"><a onclick="return confirm('Are you sure you want to logout?')" href="../main/main.php?logout='1'"  style="color:red;">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3></h3>

	  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start the Exam</button></center>       
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">

		  <form  method="post" action="../qus_show.php">
		  <select class="form-control" id="" name="cat">
		  <?php foreach($profile->cat as $category){  ?>  

      <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
      <?php   }?>

		  </select><br>
		  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
		</form>
	 </hr>

	  </div>
	  </div>
	  <div class="col-sm-4"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Profile</h3>
	  
	  <table class="table">
    <thead>
      <tr>
        
        <th>username</th>
        <th>email</th>
     
      </tr>
    </thead>
    <tbody>
	
	<?php 
	foreach($profile->data as $prof)
	{?>
      <tr>
      
        <td><?php echo $prof['username'];?></td>
        <td><?php echo $prof['email'];?></td>

       
      </tr>
    </tbody>
	<?php 	}?>
  </table>
	  	 
      </div>
    <div id="menu2" class="tab-pane fade">
      <h3>History</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>

  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
