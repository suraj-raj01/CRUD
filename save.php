<?php
$empno = $_POST["empno"];
$name = $_POST["name"];
$email = $_POST["email"];
$salary = $_POST["salary"];

$con = new mysqli("localhost", "root", "", "suraj");
$qry = "insert into employee(empno, name, email, salary) values('$empno','$name','$email','$salary')";
$con->query($qry);
$con->close();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include "include/navbar.php";
    ?>
    <div id="hero">
        <h1>Data successfully save!!</h1>
    </div>
    <?php
    include "include/footer.php";
    ?>
    <script src="src.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>