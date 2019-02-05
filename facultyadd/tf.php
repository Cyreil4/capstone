<?php
include "../class/users.php";
$cat=new users;
$category=$cat->cat_shows();
//print_r($category);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Faculty Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

 
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  
  </head>

  <body>
<link rel="stylesheet" type="text/css" href="../admin/st.css">
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
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li style="float:right"><a onclick="return confirm('Are you sure you want to logout?')" href="../faculty/login.php?logout='1'"  style="color:red;">Logout</a></li>

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
            <li class="active"><a href="../faculty/index.php">Add Student Account<span class="sr-only">(current)</span></a></li>
            <li><a href="index.php">Create Exam</a></li>
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
          <h1 class="page-header">Create</h1>

          <div class="table-responsive">
            <table class="table table-striped">
			<?php
			if(isset($_GET['msg']) && !empty($_GET['msg']))
			{
				echo "<p>data insert successfully</p>";
			}
			
			?>
			
			
				  <form method="post" action="add_quiz.php">
					<div class="form-group">
					  <label for="text">Question</label>
					  <input type="text" class="form-control" name="qus"  placeholder="Enter question">
					</div>

					<div class="form-group">
					  <label for="text">Option1</label>
					  <input type="text" class="form-control"  name="op1"  placeholder="Enter option1">
					</div>
					<div class="form-group">
					  <label for="text">Option2</label>
					  <input type="text" class="form-control" name="op2"  placeholder="Enter option2">
					</div>
					
					<div class="form-group">
					  <label for="text">Option3</label>
					  <input type="text" class="form-control"  name="op3"  placeholder="Enter option3">
					</div>
					
					<div class="form-group">
					  <label for="text">Option4</label>
					  <input type="text" class="form-control"  name="op4" id="email" placeholder="Enter option4">
					</div>
					<div class="form-group">
					  <label for="text">Answer</label>
					  <input type="text" class="form-control" name="ans" id="email" placeholder="Enter answer">
					</div>
						<div class="form-group">
						   
						   <select class="form-control" id="sel1" name="cat">
						   
								<option value=""disable>choose category</option>
								<?php
								foreach($category as $c)
								{
									echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
								}
								
								?>								
						  </select>
						</div>
					<button type="submit" class="btn btn-default">Submit</button><br>
				  </form>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

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
