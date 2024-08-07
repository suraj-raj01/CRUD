<?php
$empno = $_POST["empno"];
$name = $_POST["name"];
$email = $_POST["email"];
$salary = $_POST["salary"];
$con = new mysqli("localhost","root","","suraj");
$qry = "update employee set name='$name', email='$email', salary='$salary' where empno='$empno'";
$con->query($qry);
$con->close();
header("location: update.php?update=yes");
?>