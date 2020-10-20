<?php
include("crud.php");
/*echo "<pre>";
print_r($_REQUEST);
echo "</pre>";*/
if(isset($_REQUEST['id'])){
$id=$_REQUEST['id'];
if($obj->Delete("categories","id=$id")){
	header("location:view.php?msg=Delete Success");
}
else{
	header("location:view.php?msg=Delete Fail");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--  title -->
	<title>Update Informatiom</title>
	<!-- bootstrap link -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<?php
		if(isset($_REQUEST['delid'])){
			$cat_id=$_REQUEST['delid'];
			// show a popup to make sure before delete
			echo "<span class='text-danger'>Do You Want to Delete?</span>";
			echo "<a href='delete.php?id=$cat_id' class='btn btn-danger'>Yes</a>"."&nbsp;<a href='view.php' class='btn btn-info'>No</a>";

		}
	?>
</body>
</html>