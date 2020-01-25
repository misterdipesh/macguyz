<!DOCTYPE html>
<html>
<head>
	<title>this i</title>
</head>
<body>
	<h1> click generate to generate file id and file pin  </h1>
	<br />
	 @php  


	 $fileid=100;
	 
	
	 

	 
		$pin=rand(110,999);
			   

	@endphp

<form action="{{ route('fileinfo.store')}}" method="post">
	@csrf
	  fileid:<br>
	  <input type="text" name="fid" value="<?php echo(" $fileid"); ?> " >  
	   <br>

	  filepin:
	  <br>
	  <input type="text" name="fpin" value="<?php  echo(" $pin"); ?>" >
	  <br>
	  <input type="hidden" name="place" value="0">
	  <input type="hidden" name="problem" value="0">
	  <input type="hidden" name="problem_desc" value="0">
	  

	  <button type="submit"> register </button>
</form> 



	

</body>
</html>