<?php
	session_start();
	
	unset($_SESSION['email']);
	unset($_SESSION['password']);

	if (isset($_POST['submit'])) {
		$_SESSION['task']=$_POST['task'];
		 $id=time().uniqid();
		 $t=$_POST['task'];
		 $n=$_SESSION['name'];
		 $d=date("d-m-y");
			  
$arr=compact('id','t','n','d');


$_SESSION[time().uniqid()]=$arr;
}
if (isset($_POST['Update'])) {
	echo "<h6>Open modal to continue</h6>";

echo "<h6><button type='submit' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>MODAL</button></h6>
<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle aria-hidden='true'>
	<div class='modal-dialog modal-dialog-centered' role='document'>
		<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title' id='exampleModalLongTitle'>
					Update Task</h5>
				<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>		
				</button>
			</div>
			<div class='modal-body'>
				<form method='POST'>
					<input type='text' name='t'>
			
			</div>
			<div class='modal-footer'>
				
				<button type='button'  class='btn btn-secondary' data-dismiss='modal'>Close</button>
				<a href='?$task'><button type='submit class='btn btn-primary' name='up' >Save Changes</button></a></form>
				
			</div>
		</div>
	</div>
</div>";
	
}
if (!empty($_SESSION)) {
	

echo "<table>";
if (isset($_POST['submit']) || isset($_POST['delete']) || isset($_POST['Update'])|| isset($_POST['up'])) {
echo "<tr>
		<th>IDENTITY - NUMBERS</th>
		<th>Task</th>
		<th>Name</th>
		<th>Date</th>
		<th>Update/Delete</th>
	</tr>";
}
foreach ($_SESSION as $key => $value) {
echo "<tr>";
	foreach ($value as $key1 => $value1) {
	echo "<td>";
	
		echo"$value1";

	echo "</td>";
}

if (!empty($value1) ) {
	echo "<td>";
	echo "<form method='POST'>";
		echo   "<a href='?$key'> <button type='submit'name='Update' value='$key' style='background-color:blue;margin-top:12px;border-radius:6px'>Update</button></a>";
			  
		echo "		<a href='?$key'> <button type='submit' name='delete' value='$key' style='background-color:red;margin-top:12px;border-radius:6px'>Delete</button></a>";
		echo "	  </form>";
	echo "</td>";
}
}


echo "</tr>";
}
echo "</table>";

	

	
if (isset($_POST['delete'])) {
     echo "<h6>Refresh Page to Delete</h6>";
     $g=$_POST['delete'];
	unset($_SESSION["$g"]);
		
	}


if (isset($_POST['Update'])) {
	$g=$_POST['Update'];
	$_SESSION["g"]=$g;
	

    }

if (isset($_POST['up'])) {
		$_SESSION [$_SESSION["g"]]['t']=$_POST['t'];
		echo "<h6>Refresh page to Update</h6>";
		unset($_SESSION["g"]);
	}

?>





<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!- Bootstrap CDN -!>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style type="text/css">
		table{
			margin: auto;
			border: 1px solid black;
		}
		
		table th{
			border: 1px solid black;
			padding-left: 60px;
			padding-right: 52px;
		}
		table td{
			border: 1px solid black;
			padding-left: 50px;
			padding-right: 50px;
		}
		h6{
			text-align: right;
			margin-right: 200px;
		}
		
	</style>
</head>

<body>
<table>
	

</table>

	<form action="" method="POST">
 	<p class="mt-5" style="text-align: center;">TO DO <input  type="text" name="task"  required>
 	<a href=""> <input type="submit" name="submit" value="OK"> </p></a>
 </form>
 	


 	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">L</button>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role='document'>
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">
					Update Task</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>		
				</button>
			</div>
			<div class="modal-body">
				<form method="POST">
					<input type="text" name="t">
			
			</div>
			<div class="modal-footer">
				
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a href="?$task"><button type="submit" class="btn btn-primary" name="update">Save Changes</button></a></form>
				
			</div>
		</div>
	</div>
</div>





</body>
</html>
