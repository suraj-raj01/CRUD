<?php
if (isset($_POST["submit"])) {
    $empno = $_POST["empno"];
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard-Search</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include "include/navbar.php";
    ?>

    <div id="display">
        <form method="post" action="search.php">
            <input type="text" placeholder="enter employee no." name="empno" style="margin-top: 20px; padding:8px; border:1px solid deepskyblue">
            <input type="submit" name="submit" value="search" style="margin-top: 20px; padding:8px 15px; font-weight:500; background-color:deepskyblue; border:1px solid deepskyblue">
        </form>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th scope="col">Employee Number</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Employee Email</th>
                    <th scope="col">Employee Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST["submit"])) {
                    $con = new mysqli("localhost", "root", "", "suraj");
                    $qry = "select * from employee where empno=$empno";
                    $result = $con->query($qry);
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["empno"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["salary"] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>

            </tbody>
        </table>

    </div>
    <?php
    include "include/footer.php";
    ?>
    <script src="src.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>