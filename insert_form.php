<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Data</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	 	<div class="text text-center text-success display-4">Category Add Form</div>
	  <form action="insert.php" method="post">
	  	 <?php 
	  	 // show message for make sure data properly adder or not
          echo $_REQUEST['msg']??"";
	   ?>
		  	   <div class="form-group row">
				    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
				    <div class="col-sm-8">
	      			<input type="text" class="form-control" name="name" id="inputName" placeholder="Name">
	    	 </div>
	    </div>
		    <div class="form-group row">
					    <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
					    <div class="col-sm-8">
		      			<textarea name="description" class="form-control" placeholder="Write your category description here..." rows=""></textarea>
		    	 </div>
		    </div>
		    <div class="form-group row">
					    <label for="inputMobile" class="col-sm-2 col-form-label">Slug</label>
					    <div class="col-sm-8">
		      			<input type="text" name="slug" class="form-control" placeholder="example-slug">
		    	 </div>
		    </div>
		    
		     <div class="form-group row">
		    <button type="submit" value="Save" name="submit" class="btn btn-primary col-sm-2 offset-3 btn-lg">Submit</button>
		     <button type="reset" value="reset" name="reset" class="btn btn-warning col-sm-2 ml-2 btn-lg">Reset</button>
		    </div>	    
	  </form>
	 </div>
</body>
</html>