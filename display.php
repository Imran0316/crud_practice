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
    $sql_quer="SELECT * FROM pt_details";
    if(isset($_GET["searchbtn"])){
      $sql="SELECT * FROM pt_details WHERE id = " . $_GET["search"];
    }
    $run=mysqli_query($connection,$sql_quer);
    if(mysqli_num_rows($run)>0){
    ?>
    
    <form action="" method="get">
        <label for="">Search:</label>
        <input type="number" value="0" require name="search">

        <input type="submit" value="search" name="searchbtn">
    </form>




    <table>
        <thead>
            <tr>
                <th>Patient Name</th>
                <th>Patient Email</th>
                <th>Patient Phone</th>
                <th>Patient Age</th>
                <th>Patient Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            while($data=mysqli_fetch_assoc($run)){
            ?>

            <tr>
                <td><?php echo $data['patientname'] ;?></td>
                <td><?php echo $data['email'] ;?></td>
                <td><?php echo $data['phone'] ;?></td>
                <td><?php echo $data['age'] ;?></td>
                <td><?php echo $data['adress'] ;?></td>

                <td><a href="edit.php?id=<?php echo $data['id'];  ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $data['id'];  ?>">Delete</a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>

    <a href="form.php">add new name</a>

    
    <?php }?>
</body>
</html>