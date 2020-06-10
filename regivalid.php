<?php
include 'connection.php';
error_reporting(0);

if(isset($_POST['button'])){

    $us = $_POST['username'];
    $em = $_POST['email'];
    $mn = $_POST['mobiless'];
    $ps = $_POST['password'];

$sel = "SELECT * FROM chanda WHERE usernames='$us' && emails='$em'";
$det = mysqli_query($conn,$sel);
$chk = mysqli_num_rows($det);
if($chk == 1){
    
     ?>

<script>
    alert('Same data not inserted');
</script>
  
    <?php


}else{

    $ins = "INSERT INTO chanda (usernames,emails,mobile,passs) VALUES ('$us','$em','$mn','$ps')";

    mysqli_query($conn,$ins);

    header('location:HOME.html');


}











}


?>