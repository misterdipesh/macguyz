<!DOCTYPE html>
<html>
<head>
	<title>this is result</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</head>
<body>
	<h1>hello admin   </h1> <br>

	<a href="{{ route('mainpage') }}">
              
        <button type="button" class="btn btn-primary">return to mainpage </button>
              
  </a>  



<div class="container">
	<table  class="table" border="2px" >
		@foreach( $admins as $admin )

		<thead>
			<th> file id</th>
			<th> place</th>
			<th> problem</th>
			<th> problem description </th>

		</thead>

		<tr>
			<td>{{ $admin->fid }}</td>
			<td> {{ $admin->place }}</td>
			<td> {{ $admin->problem }}</td>
			<td>{{ $admin->problem_desc }}</td>
			 </td>
                    <td class="text-right">
                       <a href="{{ route('admin.edit',$admin->id) }}"  class=" btn btn-primary" > edit</a>
                        <form action="{{ route('admin.destroy',$admin->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                          <button class=" btn btn-danger" type="submit"> delete </button>
                       </form>

                  </td>


		</tr>


 @endforeach()
  </table>
</div>


 
  
    


</body>
</html>