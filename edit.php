<?php
   $empno=$_GET["empno"];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard-Edit</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include "include/navbar.php";
    ?>

    <div id="hero">
    <?php
    $con = new mysqli("localhost","root","","suraj");
    $qry = "select * from employee where empno=$empno";
    $result = $con->query($qry);
    while($row=$result->fetch_assoc())
    {
        // echo "<form method='post' action='updatesave.php' >";
        // echo "<table id='editdata'>";
        //     echo "<tr>";
        //     echo "<td>Employee no.</td>";
        //     echo "<td>  <input type='text' value='".$row["empno"]."' name='empno'></td>";
        //     echo "</tr>";

        //     echo "<tr>";
        //     echo "<td>Employee Name</td>";
        //     echo "<td><input type='text' value='".$row["name"]."' name='name'></td>";
        //     echo "</tr>";

        //     echo "<tr>";
        //     echo "<td>Employee Email</td>";
        //     echo "<td><input type='text' value='".$row["email"]."' name='email'></td>";
        //     echo "</tr>";

        //     echo "<tr>";
        //     echo "<td>Employee Salary</td>";
        //     echo "<td><input type='text' value='".$row["salary"]."' name='salary'></td>";
        //     echo "</tr>";

        //     echo "<tr>";
        //     echo "<td></td>";
        //     echo "<td><input type='submit' value'update'></td>";
        //     echo "</tr>";

        // echo "</table>";
        // echo "</form>";
      echo ' <form method="post" action="updatesave.php" id="form">
            <h4>Update Employee Details</h4>
            <div class="form-group">
                <input type="text" value="'.$row["empno"].'" class="form-control" placeholder="Enter employee no." name="empno">
            </div>

            <div class="form-group">
                <input type="text" value="'.$row["name"].'" class="form-control" placeholder="Enter name" name="name">
            </div>

            <div class="form-group">
                <input type="text" value="'.$row["email"].'" class="form-control" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
                <input type="text" value="'.$row["salary"].'" class="form-control" placeholder="Enter salary" name="salary">
            </div>
            <button type="submit" name="submit" value="update" class="form-control" style="background-color: deepskyblue; font-weight:bold;">Submit</button>
        </form>';
    }
    ?>
    </div>
    <?php
    include "include/footer.php";
    ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>