<?php $db= new mysqli('localhost','root','','pos'); 
extract($_POST);
$id=$db->real_escape_string($id);
$user=$db->real_escape_string($status);
$sql=$db->query("UPDATE user SET status='$status' WHERE id='$id'");
echo $sql;
?>