<?php
session_start();/*session started*/
session_destroy();/*session destroy*/
header("Location:admin.php");/*session destroy then page redirect admin.php page*/
?>