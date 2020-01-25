<!DOCTYPE html>
<html>
<head>
	<title>this is user result</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
div {
  background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}
</style>

</head>
<body>
<h1>Hello users   </h1>

<a href="/user">  <button class="btn btn-primary"> logout</button>   </a> 

<div >
	<br>

	@foreach( $results as $result)
       
  fileid:{{ $result->fid }} <br>
  file place:{{ $result->place }} <br>
  <br>
  file problem:{{ $result->problem }}
  <br>

  file problem description:{{ $result->problem_desc }}

  <?php



  ?>
  
       




  @endforeach()

</div>


 
</body>
</html>