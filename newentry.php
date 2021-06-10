<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
</head>
<body>
<center>
    <form action="./newentry.php" method="post">
    <label for="">Enter the sitename for which password is Associated </label>
    <input type="text" name="assoc_to"><br><br>
    <label for="">Enter the password </label>
    <input type="password" name="newpass"><br><br>
    <button type="submit">Save</button>
    </form>

    <?php
    require 'conn.php';
    session_start();

    if(isset($_POST['newpass']))
    {
    $assoc = $_POST['assoc_to'];
    $npass = $_POST['newpass'];
    $uid = $_SESSION['uid'] ;
    // echo $assoc.$npass.$uid;

    $sql = " INSERT INTO `passwords`(`uid`,`assoc_to` , `password`, `date` ) VALUES ('$uid','$assoc', '$npass' , current_timestamp()); ";
    
    $res= mysqli_query($con,$sql);
    // echo $res;
    if($res)
    {
        echo '<script>alert("Password saved to the database !");</script>';
        header("Location: home.php");
        exit();
    }
    }
    ?>
     <br>
<button><a href="home.php"><- Go Back</a></button>
</center>
</body>
</html>