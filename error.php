<?php
$message="";
session_start();
$message = $_SESSION['message'];
?>
<span><?php echo $message; ?></span>