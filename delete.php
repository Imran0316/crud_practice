<?php

  $pt_id=$_GET['id'];
  $connection =mysqli_connect("localhost","root","","patients");
  $sql = "DELETE FROM pt_details WHERE id = $pt_id ";
  $run = mysqli_query($connection,$sql);
  if($run){
    header("Location:display.php");
  }else{
    echo"not";
  }

?>