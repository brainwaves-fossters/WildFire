<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fire Alarm</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="jumbotron">
    <h1>Fire Report</h1><br>
    <p>Please enter the details to alert the fire department</p> 
  </div>
  <form method="post" action="success.php">
    <div class="form-group">
    <label><h3 style="float:left;<margin-left:20px></margin-left:10px>">Are you safe?</h3>
      <input type="radio" value="" name="abc" style="width:30px; height:30px;float:left;margin-top:15px;margin-left:20px"><h3 style="float:left;<margin-left:20px></margin-left:10px>">Yes</h3>
      <input type="radio" value="" name="abc" style="width:30px; height:30px;float:left;margin-top:15px;margin-left:20px"><h3 style="float:left;<margin-left:20px></margin-left:10px>">No</h3></label>
      <label for="comment"><h3>Description (Optional)</h3></label>
      <textarea class="form-control" rows="5" id="comment"></textarea><br>
      <center>
      <button type="submit" class="btn btn-danger btn-lg"><h3>Alert Fire Department</h3></button>
      </center>
    </div>
  </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>