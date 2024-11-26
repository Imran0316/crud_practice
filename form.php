<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  

  <form action="" method="POST" id="main_form">
    <input type="text" name="name" placeholder="NAME" > <br><br>
    <input type="email" name="email" placeholder="EMAIL" > <br><br>
    <input type="tel" name="phone" placeholder="PHONE" > <br><br>
    <input type="number" name="age" placeholder="AGE" > <br><br>
    <input type="text" name="address" placeholder="ADDRESS" > <br><br>

    <input type="submit" value="submit" name="sub">
  </form>


<?php
  if(isset($_POST["sub"])){
    $pname=$_POST["name"];
    $pemail=$_POST["email"];
    $pphone=$_POST["phone"];
    $page=$_POST["age"];
    $padd=$_POST["address"];

    $connection =mysqli_connect("localhost","root","","patients");
    if($connection){
      echo "working";
    }else{
      echo "not working";
    }

    $quer= "INSERT INTO `pt_details`( `patientname`, `email`, `phone`, `age`, `adress`) VALUES ('$pname','$pemail','$pphone','$page','$padd')";

    $run=mysqli_query($connection,$quer);

    if($run){
      echo "connect";
      header("Location:display.php");
    }else{
      echo "not connected";
    }
  }
?>

</body>
</html>