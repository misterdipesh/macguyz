<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>hello users   </h1> 

<br>

	@foreach( $results as $result)
       
  fileid:{{ $result->fid }}
  file place:{{ $result->place }}
  
       




  @endforeach()
 
</body>
</html>