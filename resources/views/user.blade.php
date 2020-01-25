<!DOCTYPE html>
<html>
<head>
	<title>this is user </title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

<form action="{{ route('user.checkfile')}}" method="get" class="form-group">
  file id:<br>
  <input type="text" name="fid" value="123" class="form-control"><br>
  file pin:<br>
  <input type="text" name="fpin" value="123" class="form-control">
  <br>

  <button type="submit" class="btn btn-info">login</button>


</form> 

  

</body>
</html>