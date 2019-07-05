<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "mysuru";
$conn = new mysqli("localhost", "root", "", "mysuru");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
// else{
// 	echo "Hi, its me!!!";
// }
?>


