<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include "include/navbar.php";
    ?>

    <div id="hero">
        <form method="post" action="save.php" id="form">
            <h3>Insert Employee Details</h3>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter employee no." name="empno">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter name" name="name">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter salary" name="salary">
            </div>
            <button type="submit" class="form-control" style="background-color: deepskyblue;">Submit</button>
        </form>
    </div>
    <?php
    include "include/footer.php";
    ?>
    <script src="src.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>