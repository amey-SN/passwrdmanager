<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<center>
<?php
session_start();
?>
   
    <div>
    <h3>Welcome   <?php echo $_SESSION['uname']?> </h3>
    </div>
    <form action="alldata.php" method="post">
    <button type="submit">View all saved passwords</button>
    </form>
    <br>
    <form action="newentry.php" method="post">
    <button type="submit">Save a new password </button>
    </form>
    <br>
    <button><a href="index.php">Log Out</a></button>


  </center>
</body>
</html>