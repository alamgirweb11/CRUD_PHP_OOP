<?php
include("crud.php");
/*echo "<pre>";
print_r($_REQUEST);
echo "</pre>";*/
extract($_REQUEST); // extract function use for convert array element to variable
if($obj->Insert("categories","name='$name',description='$description',slug='$slug'")){
	header("location:view.php?msg=Insert Success");
}
else{
	header("location:insert_form.php?msg=Insert Fail");
}
?>
