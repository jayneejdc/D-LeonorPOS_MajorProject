<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pos';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM entrance";
$result = mysqli_query($mysqli, $query);

$entrance_kids = $_POST['entrance_kids'];
$entrance_adults = $_POST['entrance_adults'];
$entrance_discounted = $_POST['entrance_discounted'];

while ($row = mysqli_fetch_array($result)) {
	if (empty($row[1])) {
		$temp=$row[0];
		$sql = "UPDATE suite SET entrance_kids='$entrance_kids'WHERE num='$temp'";
		if ( $mysqli->query($sql) ){
			if ( $mysqli->query($sql2) ){
				break;
			}
		}
	}
}
?>