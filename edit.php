<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $connection =mysqli_connect("localhost","root","","patients");
    $id = $_GET['id'];
    $sql = "SELECT * FROM pt_details WHERE id = '{$id}'";
    $run=mysqli_query($connection,$sql);
    $row=mysqli_fetch_assoc($run);
    ?>
    <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">  <br>
    <input type="text" name="name" value="<?php echo $row['patientname'];?>"> <br>
    <input type="email" name="email" value="<?php echo $row['email'];?>"> <br>
    <input type="tel" name="phone" value="<?php echo $row['phone'];?>"> <br>
    <input type="number" name="age" value="<?php echo $row['age'];?>"> <br>
    <input type="text" name="address" value="<?php echo $row['adress'];?>"> <br>

    <input type="submit" value="update" name="update">
    </form>
</body>
</html>