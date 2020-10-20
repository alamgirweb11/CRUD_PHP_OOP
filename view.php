<?php
include("crud.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show All Data</title>
	<!-- bootstrap link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
	/* use custom bootstrap css table */
.customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.customers td, .customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
	<?php
	//echo $obj->getById("categories","name,description,slug","id=1")->getTable("table table-bordered table-hover table-condensed table-striped");

	//echo $obj->getAll("categories","name,description,slug")->getTable("table table-bordered table-hover table-condensed table-striped");
/*echo "<pre>";
	print_r($obj->getAll("categories","*"));
echo "</pre>";*/
	
echo $_REQUEST['msg']??"";	
// show all data in getTable function
echo $obj->getAll("categories","id,name,description,slug")->getTable("customers");
	?>
</body>
</html>

