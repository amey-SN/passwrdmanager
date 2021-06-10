<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
 <center>   
<!-- form to get user credentials  -->
<form action="index.php" method="post">
    <label for="">Input Username :</label>
    <input type="text" name="uname"><br> <br>   
    <label for="">Input Password :</label>
    <input type="password" name="pass"><br> <br>
    <button type="submit">LogIn</button>
</form>

<!-- php script validating the username and password  -->
<?php 
require "conn.php" ;
session_start(); 
if(isset($_POST["pass"]))
{

$uname = $_POST['uname'];
$pass = $_POST['pass'];
// echo $uname." ".$pass;


$sql = "SELECT * FROM `psm_userdata` WHERE  pass='$pass' AND uname='$uname' ";
$res  = mysqli_query($con, $sql);


if (mysqli_num_rows($res) === 1) 
{
    $row = mysqli_fetch_assoc($res);
    if ($row['uname'] === $uname && $row['pass'] === $pass)
     {
        $_SESSION['uname'] = $row['uname'];
        $_SESSION['uid'] = $row['uid'];
echo "Done !!";
header("Location: home.php");
exit();

    
}
}
else
{

    echo '<script>alert("Wrong Username/Password  OR Empty field. Please try again ");</script>';
    // header("Location: index.php");
    // exit();
}
}
// else
// {
//     echo '<script>alert("Empty field");</script>' ;
// }

?>
</center>

</body>
</html>