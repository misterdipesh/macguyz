<!DOCTYPE html>
<html>
<head>
	<title>this i</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


	<style type="text/css">
		
		body{
			background-color: blue;
		}
	</style>
</head>
<body >
	<h1> click here  to register file id and file pin  </h1>
	<br />
	 @php  


	 $fileid=100;
	 
	
	 

	 
		$pin=rand(110,999);
			   

	@endphp

<form action="{{ route('fileinfo.store')}}" method="post" class="form-inline" role="form"  >
	@csrf
	  <b>Fileid:</b><br>
	  <input type="text" name="fid" value="<?php echo(" $fileid"); ?> " >  
	   <br>

	  <b> Filepin: </b>
	  <br>
	  <input type="text" name="fpin" value="<?php  echo(" $pin"); ?>" >
	  <br>
	  <input type="hidden" name="place" value="0">
	  <input type="hidden" name="problem" value="0">
	  <input type="hidden" name="problem_desc" value="0">
	  

	  <button type="submit" class="btn btn-success">register</button
</form> 



	

</body>
</html>