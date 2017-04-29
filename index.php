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
    <h1>Fire Report</h1><br><br>
    <p>Please enter the details to alert the fire department</p> 
  </div>
  <form>
    <div class="form-group">
      <label><input type="checkbox" value="" style="width:40px; height:40px;float:left;margin-top:15px"><h2 style="float:left;<margin-left:20px></margin-left:10px>">Are you safe?</h2></label>
      <label for="comment"><h2>Description (Optional)</h2></label>
      <textarea class="form-control" rows="5" id="comment"></textarea><br>
      <center>
      <button type="submit" class="btn btn-danger btn-lg">Alert Fire Department</button>
      </center>
    </div>
  </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>