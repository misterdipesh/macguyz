<!DOCTYPE html>
<html>
<head>
	<title>this is result</title>
</head>
<body>
	<h1>hello users   </h1> <br>

	@foreach( $fileinfos as $fileinfo)
       
  fileid:{{ $fileinfo->fid }}
  filepin:{{ $fileinfo->fpin }}
  
       




  @endforeach()
 
  
    


</body>
</html>