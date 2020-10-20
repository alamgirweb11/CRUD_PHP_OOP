<?php
include("crud.php");
// update data recording to user own info
if(isset($_REQUEST['id'])){
$cat_id=$_REQUEST['id'];
extract($obj->getById("categories","id,name,description,slug","id=$cat_id")->values);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- title -->
	<title>Edit Data</title>
	<!-- bootstrap link -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	 	<div class="text text-center text-success display-4">Category Edit Form</div>
	  <form action="update.php" method="post">
		  	   <div class="form-group row">
				    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
				    <div class="col-sm-8">
	      			<input type="text" class="form-control" value="<?=$name??'';?>" name="name" id="inputName" placeholder="Name">
	    	 </div>
	    </div>
		    <div class="form-group row">
					    <label for="inputEmail" class="col-sm-2 col-form-label">Description</label>
					    <div class="col-sm-8">
		      			<textarea name="description" class="form-control" placeholder="Write your category description here..." rows=""><?=$description??'';?></textarea>
		    	 </div>
		    </div>
		    <div class="form-group row">
					    <label for="inputMobile" class="col-sm-2 col-form-label">Slug</label>
					    <div class="col-sm-8">
		      			<input type="text" name="slug" value="<?=$slug??'';?>" class="form-control" placeholder="example-slug">
		    	 </div>
		    </div>
		    <input type="hidden" name="cat_id" value="<?=$cat_id??'';?>">
		     <div class="form-group row">
		    <button type="submit" value="Save Value" name="submit" class="btn btn-primary col-sm-2 offset-4 btn-lg">Update</button>
		    </div>	    
	  </form>
	 </div>
</body>
</html>