
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

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
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
            <li style="float:right"><a onclick="return confirm('Are you sure you want to logout?')" href="../main/main.php?logout='1'"  style="color:red;">Logout</a></li>

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


          <div class="table-responsive">
            <table class="table table-striped">
      
            <?php require_once 'connect.php'; ?> 
      <link rel="stylesheet" type="text/css" href="../admin/st.css">

            <!DOCTYPE html>
            <html lang="en">
            <head>

               <div class="container">
              <div class="row">
                <form action="title.php" method="post" class="form-horizontal">
                <h2>Exam Title</h2>
                <hr>
      <?php
      if(isset($_GET['msg']) && !empty($_GET['msg']))
      {
        echo "<p>Data Insert Successfully</p>";
      }
      
      ?>
                  <div class="form-group">
                      <label for="input1" class="">Subject Code:</label>
                      <div>
                        <input type="text" name="tit" class="form-control" id="input1" placeholder="Title" required/>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="input1" class="">Instructions:</label>
                      <div>
                        <input type="text" name="ins"  class="form-control1" id="input1" placeholder="Instructions" required/>
                 
                 <select name="forma" class="forma" onchange="location = this.value;">
                   <option value="../facultyadd/index.php">Multiple Choice</option>
                   <option value="">True or False</option>
                   <option value="">Identification</option>
                 </select>
                      </div>
                  </div>
                    <div class="form-group">
                      <label for="input1" class="">Subject:</label>
                      <div>
                        <input type="text" name="cat"  class="form-control" id="input1" placeholder="Subject Name" required />
                      </div>
                  </div>
                    <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" name="save" value="submit" />   
                    </form>
                  </div>
    
                 
    </div>
  </body>
</html>

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
