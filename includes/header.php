<?php
require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php $bk_amt ?>favicon/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/074a81184f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php $bk_amt ?>styles/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <title><?php echo $title ?></title>
</head>

<body>
    <!--first container-->

    <div class="container-fluid pl-sm-4 pr-sm-4 c1">
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <a class="navbar-brand" href="index.php">Car Data Analyser</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="visualizer.php">See Report</a>
                </li>
            </ul>
        </nav>
    </div>