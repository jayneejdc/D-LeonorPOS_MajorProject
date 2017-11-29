<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'pos';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
$query = "SELECT * FROM history";
$result = mysqli_query($mysqli, $query);

//entrance
$ekid = $_POST['ekid'];
$eadult = $_POST['eadult'];
$edisc = $_POST['edisc'];
//pools
$wpkid = $_POST['wpkid'];
$wpadult = $_POST['wpadult'];
$wpdisc = $_POST['wpdisc'];
$gskid = $_POST['gskid'];
$gsadult = $_POST['gsadult'];
$gsdisc = $_POST['gsdisc'];
//rides
$akid = $_POST['akid'];
$aadult = $_POST['aadult'];
$adisc = $_POST['adisc'];
$bbkid = $_POST['bbkid'];
$bbadult = $_POST['bbadult'];
$bbdisc = $_POST['bbdisc'];
$bckid = $_POST['bckid'];
$bcadult = $_POST['bcadult'];
$bcdisc = $_POST['bcdisc'];
$bkkid = $_POST['bkkid'];
$bkadult = $_POST['bkadult'];
$bkdisc = $_POST['bkdisc'];
$cckid = $_POST['cckid'];
$ccadult = $_POST['ccadult'];
$ccdisc = $_POST['ccdisc'];
$gkkid = $_POST['gkkid'];
$gkadult = $_POST['gkadult'];
$gkdisc = $_POST['gkdisc'];
$skid = $_POST['skid'];
$sadults = $_POST['sadults'];
$sdisc = $_POST['sdisc'];
$zkid = $_POST['zkid'];
$zadult = $_POST['zadult'];
$zdisc = $_POST['zdisc'];

if ($ekid==""){
	$ekid="0";
}
if ($eadult==""){
	$eadult="0";
}
if ($edisc==""){
	$edisc="0";}
	
if ($gskid==""){
	$gskid="0";
}
if ($gsadult==""){
	$gsadult="0";
}
if ($gsdisc==""){
	$gsdisc="0";
}
if ($wpkid==""){
	$wpkid="0";
}	
if ($wpadult==""){
	$wpadult="0";
}
if ($wpdisc==""){
	$wpdisc="0";
}
if ($bckid==""){
	$bckid="0";
}
if ($bcadult==""){
	$bcadult="0";
}
if ($bcdisc==""){
	$bcdisc="0";
}
if ($bkkid==""){
	$bkkid="0";
}	
if ($bkadult==""){
	$bkadult="0";
}
if ($bkdisc==""){
	$bkdisc="0";
}
if ($zkid==""){
	$zkid="0";
}
if ($zadult==""){
	$zadult="0";
}
if ($zdisc==""){
	$zdisc="0";
}	
if ($cckid==""){
	$cckid="0";
}	
if ($ccadult==""){
	$ccadult="0";
}
if ($ccdisc==""){
	$ccdisc="0";
}
if ($akid==""){
	$akid="0";
}	
if ($aadult==""){
	$aadult="0";
}
if ($adisc==""){
	$adisc="0";
}	
if ($skid==""){
	$skid="0";
}
if ($sadults==""){
	$sadults="0";
}
if ($sdisc==""){
	$sdisc="0";
}	
if ($gkkid==""){
	$gkkid="0";
}	
if ($gkadult==""){
	$gkadult="0";
}
if ($gkdisc==""){
	$gkdisc="0";
}
if ($bbkid==""){
	$bbkid="0";
}	
if ($bbadult==""){
	$bbadult="0";
}
if ($bbdisc==""){
	$bbdisc="0";
}


while ($row = mysqli_fetch_array($result)) {
	$sql = "INSERT INTO history(ekid, eadult, edisc, gskid, gsadult, gsdisc, wpkid, wpadult, wpdisc, bckid, bcadult, bcdisc, bkkid, bkadult, bkdisc, zkid, zadult, zdisc, cckid, ccadult, ccdisc, akid, aadult, adisc, skid, sadult, sdisc, gkkid, gkadult, gkdisc, bbkid, bbadult, bbdisc) VALUES ('$ekid','$eadult','$edisc','$gskid','$gsadult','$gsdisc','$wpkid','$wpadult','$wpdisc','$bckid','$bcadult','$bcdisc','$bkkid','$bkadult','$bkdisc','$zkid','$zadult','$zdisc','$cckid','$ccadult','$ccdisc','$akid','$aadult','$adisc','$skid','$sadults','$sdisc','$gkkid','$gkadult','$gkdisc','$bbkid','$bbadult','$bbdisc')";
	if ( $mysqli->query($sql) ){
		echo "yes!";
		break;
	}
	else{
		echo "hays";
		break;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="insert.css">
	<title>Receipt</title>
</head>
<body>
	<h2><center>Receipt</center></h2>
	<br><br>

	<p> <?php if(!empty($ekid)){echo "Entrance(kid):".$ekid; }?></p>
	<p> <?php if(!empty($eadult)){ echo "Entrance(adult):".$eadult;} ?></p>
	<p> <?php if(!empty($edisc)){ echo "Entrance(discounted):".$edisc;} ?></p>
	<?php $sum = ($edisc * 1000)+($ekid * 100)+($eadult * 500)?>
	<p><?php echo "Entrance(total):".$sum;?></p>

	<p> <?php if(!empty($wpkid)){echo "Wavepool(kid):".$wpkid;} ?></p>
	<p> <?php if(!empty($wpadult)){echo "Wavepool(adult):".$wpadult;} ?></p>
	<p> <?php if(!empty($wpdisc)){echo "Wavepool(discount):".$wpdisc;} ?></p>

	<p> <?php if(!empty($gskid)){echo "Giant Slide(kid):".$gskid;} ?></p>
	<p> <?php if(!empty($gsadult)){echo "Giant Slide(discount):".$gsadult;} ?></p>
	<p> <?php if(!empty($gsdisc)){echo "Giant Slide(discount):".$gsdisc;} ?></p>

	<p> <?php if(!empty($akid)){echo "ATV Truck(kid):".$akid;} ?></p>
	<p> <?php if(!empty($aadult)){echo "ATV Truck(adult):".$aadult;} ?></p>
	<p> <?php if(!empty($adisc)){echo "ATV Truck(discount):".$adisc;} ?></p>

	<p> <?php if(!empty($bbkid)){echo "Bump Boat(kid):".$bbkid;} ?></p>
	<p> <?php if(!empty($bbadult)){echo "Bump Boat(adult):".$bbadult;} ?></p>
	<p> <?php if(!empty($bbdisc)){echo "Bump Boat(discount):".$bbdisc;} ?></p>

	<p> <?php if(!empty($bckid)){echo "Bump Car(kid):".$bckid;} ?></p>
	<p> <?php if(!empty($bcadult)){echo "Bump Car(adult):".$bcadult;} ?></p>
	<p> <?php if(!empty($bcdisc)){echo "Bump Car(discount):".$bcdisc;} ?></p>

	<p> <?php if(!empty($bkkid)){echo "Buggy Kart(kid):".$bkkid;} ?></p>
	<p> <?php if(!empty($bkadult)){echo "Buggy Kart(adult):".$bkadult;} ?></p>
	<p> <?php if(!empty($bkdisc)){echo "Buggy Kart(discount):".$bkdisc;} ?></p>

	<p> <?php if(!empty($cckid)){echo "Cable Car(kid):".$cckid;} ?></p>
	<p> <?php if(!empty($ccadult)){echo "Cable Car(adult):".$ccadult;} ?></p>
	<p> <?php if(!empty($ccdisc)){echo "Cable Car(discount):".$ccdisc;} ?></p>

	<p> <?php if(!empty($gkkid)){echo "Go Kart(kid):".$gkkid;} ?></p>
	<p> <?php if(!empty($gkadult)){echo "Go Kart(adult):".$gkadult;} ?></p>
	<p> <?php if(!empty($gkdisc)){echo "Go Kart(discount):".$gkdisc;} ?></p>

	<p> <?php if(!empty($skid)){echo "Segway(kid):".$skid;} ?></p>
	<p> <?php if(!empty($sadult)){echo "Segway(adult):".$sadult;} ?></p>
	<p> <?php if(!empty($sdisc)){echo "Segway(discount):".$sdisc;} ?></p>

	<p> <?php if(!empty($zkid)){echo "Zipline(kid):".$zkid;} ?></p>
	<p> <?php if(!empty($zadult)){echo "Zipline(adult):".$zadult;} ?></p>
	<p> <?php if(!empty($zdisc)){echo "Zipline(discount):".$zdisc;} ?></p>
	<br><br>
</body>
</html>