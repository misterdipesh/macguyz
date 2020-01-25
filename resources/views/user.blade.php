<!DOCTYPE html>
<html>
<head>
	<title>this is user </title>
</head>
<body>

<form action="{{ route('user.checkfile')}}" method="get">
  file id:<br>
  <input type="text" name="fid" value="123"><br>
  file pin:<br>
  <input type="text" name="fpin" value="123">
  <br>

  <button type="submit">login</button>


</form> 

  

</body>
</html>