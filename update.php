<?php
if(isset($_POST['update'])){
    $pid=$_POST['id'];
    $pname=$_POST['name'];
    $pemail=$_POST['email'];
    $pphone=$_POST['phone'];
    $page=$_POST['age'];
    $padd=$_POST['address'];

    $connection =mysqli_connect("localhost","root","","patients");
    $sql="UPDATE `pt_details` SET `patientname`='{$pname}',`email`='{$pemail}',`phone`='{$pphone}',`age`='{$page}',`adress`='{$padd}' WHERE id = '{$pid}'";

    $run=mysqli_query($connection,$sql);
    if($run){
        header("Location:display.php");
    }
}
?>