<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>hello users   </h1> 

<br>

	@foreach( $results as $result)
       
  fileid:{{ $result->fid }} <br>
  file place:{{ $result->place }} <br>
  <br>
  file problem:{{ $result->problem }}
  <br>

  file problem description:{{ $result->problem_desc }}
  
       




  @endforeach()
 
</body>
</html>