<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<table >
        <thead >
            <tr>
                 <th>Sr.No</th>
                <th>Password Associated with<th></th> </th>
                <th>Password  <th></th></th>
      
                <th >Saved On </th>
            </tr>
        </thead>
<?php
session_start();
require "conn.php";
$uid = $_SESSION['uid'];
$i=1;


$sql = " SELECT * FROM `passwords` WHERE uid = $uid ";
$res = mysqli_query($con,$sql);

if (mysqli_num_rows($res) > 0) 
{
    while($row = mysqli_fetch_assoc($res))
    {

        echo ' <tr><th> '.$i.'</th><th>'.$row["assoc_to"].'</th><th></th><th>'.$row["password"] .'</th><th></th><th>'.$row["date"] .'</th></tr>'   ;

        $i+=1;
    }
}
else{
    echo "<h2>You have not stored any passwords yet </h2>";
}

?>
 <br>
<button><a href="home.php"><- Go Back</a></button>
    </center>
</body>
</html>