<?php
class Crud{
	private $conn;
	public $values;
	// database connection
	public function __construct($host,$user,$pass,$db){
		$this->conn=new mysqli($host,$user,$pass,$db);
		// check database connection
		if($this->conn->connect_errno>0){
			die("Connection Fail! ".$this->conn->connect_error());
		}
	}
  // show all data from database
	public function getAll($table,$cols){
		$sql="SELECT $cols FROM $table";
		// echo $sql;
		$result=$this->conn->query($sql);
		if($result->num_rows>0){
			$this->values= $result->fetch_all(MYSQLI_ASSOC);
			return $this;
		//return $this->values;
		}
		return false;
	}
   // to get the specific data from database against user id
	public function getById($table,$cols,$condition){
		$sql="SELECT $cols FROM $table WHERE $condition";
		//echo $sql;
		$result=$this->conn->query($sql);
		if($result->num_rows>0){
			$this->values= $result->fetch_assoc();
			return $this;
		}
		return false;

	}
   // show all data in a table 
	public function getTable($css_classes=''){
		$table="<table class='$css_classes'>";
		  // this condition check the single array
			if(count($this->values)==count($this->values,1)){
				foreach($this->values as $key=>$val){
					$table.="<tr>";
						$table.="<th>$key</th><td>$val</td>";
					$table.="</tr>";
				}
			}
			else{
				$table.="<tr>";
                // this condition check for nested array
				foreach($this->values[0] as $key=>$row){
					$table.="<th>".ucfirst($key)."</th>";
				}
				$table.="<th>Action</th>";
				$table.="</tr>";
				foreach($this->values as $row){
					$table.="<tr>";
						foreach($row as $val){
							$table.="<td>$val</td>";
						}
						// add two button for edit and delete data
						$table.="<td><a class='btn btn-info' href='edit.php?id=$row[id]'>Edit</a> <a class='btn btn-danger mt-1' href='delete.php?delid=$row[id]'>Delete</a></td>";
					$table.="</tr>";
				}
				// ceate a new row for add new data  
				$colspan=count($this->values)+1;
				$table.="<tr><td class='text-center' colspan='$colspan'><a class='btn btn-primary' href='insert_form.php'>Add New Value</a></td></tr>";
			}

		$table.="</table>";
		return $table;
	}
 // data insert in database
	public function Insert($table,$cols){
		$sql="INSERT INTO $table SET $cols";
		$result=$this->conn->query($sql);
		if($this->conn->affected_rows>0){
			return true;
		}
		return false;
	}
  // update or edit pre-input data
	public function Update($table,$cols,$condition){
		$sql="UPDATE $table SET $cols WHERE $condition";
		//echo $sql;
		$result=$this->conn->query($sql);
		if($this->conn->affected_rows>0){
			return true;
		}
		return false;
	}
  // delete data from database one by one 
	public function Delete($table,$condition){
		$sql="DELETE FROM $table WHERE $condition";
		//echo $sql;
		$result=$this->conn->query($sql);
		if($this->conn->affected_rows>0){
			return true;
		}
		return false;
	}
}
// create object and make database connection
$obj=new Crud("localhost","root","","myshop");