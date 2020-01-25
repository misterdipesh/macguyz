<!DOCTYPE html>
<html>
<head>
	<title>this is edit</title>
</head>
<body>

	<div class="card">
                       

              <div class="card-header">
                <h4 class="card-title"> edit Teams</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">                    
                  <div class="container">
                      <h2>edit </h2>
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