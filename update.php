<?php
include("crud.php");
/*echo "<pre>";
print_r($_REQUEST);
echo "</pre>";*/
if(isset($_REQUEST['id'])){
extract($_REQUEST);
if($obj->Update("categories","name='$name',description='".htmlentities($description, ENT_QUOTES)."',slug='$slug'","id=$id")){
	header("location:view.php?msg=Update Success");
}
else{
	header("location:view.php?msg=Update Fail");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Informatiom</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php
		if(isset($_REQUEST['cat_id'])){
			extract($_REQUEST);
			// show a popup to make sure before update
			echo "<span class='text-danger'>Do You Want to Update?</span>";
			echo "<a href='update.php?id=$cat_id&name=$name&description=$description&slug=$slug' class='btn btn-danger'>Yes</a>"."&nbsp;<a href='view.php' class='btn btn-info'>No</a>";

		}
	?>
</body>
</html>