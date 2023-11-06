<?php
session_start();
include('server.php');

if (!isset($_SESSION['usename'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['usename']);
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="homeheader">
        <h2>Home Page</h2>
    </div>

    <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])): ?>
            <div class="success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['usename'])): ?>
            <p>Welcome <strong>
                    <?php echo $_SESSION['usename']; ?>
                </strong></p><br><br>
            <div class="col-md-3 text-end">
                <a href="index.php?logout='1">
                    <button type="button" class="btn btn-outline-primary me-2">logout</button></a>
            </div>
            <!--<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>-->
        <?php endif ?>
    </div>

</body>

</html>