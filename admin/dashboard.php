<?php
require("../controller/includer.php");
confirm_logged_in();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Nordic Telematics</title>
    <?php include '../includes/head.php'?>
    <link rel="stylesheet" href="/style/css/admin.css">
</head>
<body>
    <header>
        <?php include '../includes/nav.php'?>
    </header>

    <!-- <?php echo $_SESSION['pass'] ?> -->

    <div class="main">
      <div class="velkommen">
        <p>Velkommen: <strong> <?php echo $_SESSION['user'] ?> </strong></p>
        <a class="logud" href="../controller/userlogout.php">Logud</a>
      </div>
      <h1>Admin Panel</h1>
      <?php include 'newsupload.php'?>
    </div>
    
    
</body>
</html>