<?php
$empno = $_GET["empno"];
$con = new mysqli("localhost","root","","suraj");
$qry = "delete from employee where empno=$empno";
$con->query($qry);
$con->close();
header("location: update.php");
?>