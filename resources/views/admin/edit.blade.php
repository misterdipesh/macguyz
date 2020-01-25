<!DOCTYPE html>
<html>
<head>
	<title>this is edit</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="card">
                       

              <div class="card-header">
                <h4 class="card-title"> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">                    
                  <div class="container">
                      <h2>edit here </h2>
                      <form class="form" role="form" action="{{route('admin.update',$admin) }}"  method="POST" enctype="multipart/form-data">
                               @csrf
                               @method('PUT')


                       <form class="form-inline" role="form">
                        <div class="form-group">
                        	
                          <label for="name">place</label>
                          <input type="text" class="form-control" id="place" name="place" value="{{ $admin->place }}">
                        </div>

                        <form class="form-inline" role="form">
                        <div class="form-group">
                          <label for="name">problem</label>
                          <input type="text" class="form-control" id="problem" name="problem" value="{{$admin->problem }}" >
                        </div>
                         <form class="form-inline" role="form">
                        <div class="form-group">
                          <label for="name">problem description</label>
                          <input type="text" class="form-control" id="links" name="problem_desc" value="{{$admin->problem_desc}}">
                        </div>
                        
                        
                        
                      

                        
                        
                        

                        
                        
                      

                        
                        
                      

                        
                        <button type="submit" class="btn btn-primary">update</button>
                      </form>
                 </div>







                </div>
              </div>
</div>
                    


</body>
</html>