<?php 
include "connection.php";
$rno = $_GET['di'];
$q = "delete from sports where id = '$rno'";
$data= mysqli_query($conn, $q);
if($data){
	echo "<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/ppp/admin.php">
	<?php
 }
 else{
 	echo "record not deleted";
 }
 ?>

