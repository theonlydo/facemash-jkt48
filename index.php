<?php
include("module-config.php");
include("elofunction.php");

$a=1;
$b=1;
$ekspektasi=0;
$ELOplayerA=0;
$ELOplayerB=0;
$P1=0;
$W1=0;
$D1=0;
$L1=0;
$P2=0;$
W2=0;
$D2=0;
$L2=0;

while($a==$b) {
	$a=rand(1,56);
	$b=rand(1,56);
}

if(isset($_POST['SKotak1']) or isset($_POST['SKotak2']) or isset($_POST['SKotak3'])) {
	$query="SELECT * FROM victim_members ORDER BY id";
	$perintah=mysql_query($query);
	while($d=mysql_fetch_array($perintah)){
		if($d['id']==$_POST['kotak1']) {
			$ELOplayerA = $d['EloPoint'];
			$P1 = $d['P'];
			$W1 = $d['W'];
			$D1 = $d['D'];
			$L1 = $d['L'];
		}
		if($d['id']==$_POST['kotak2']) {
			$ELOplayerB = $d['EloPoint'];
			$P2 = $d['P'];
			$W2 = $d['W'];
			$D2 = $d['D'];
			$L2 = $d['L'];
		}
	}
}	

$query="SELECT * FROM victim_members ORDER BY id";
$perintah=mysql_query($query);
while($d=mysql_fetch_array($perintah)){
	if($d['id']==$a) {
		$namaPlayerA = $d['nama'];
	}
	if($d['id']==$b) {
		$namaPlayerB = $d['nama'];
	}
}


if(isset($_POST['SKotak1'])) {
	$ekspektasiA = Ekspektasi($ELOplayerA, $ELOplayerB);
	$ekspektasiB = 1-$ekspektasiA;
	$ELOplayerA = $ELOplayerA + EloRating($ELOplayerA, 1, $ekspektasiA);
	$ELOplayerB = $ELOplayerB + EloRating($ELOplayerB, 0, $ekspektasiB);
	if($ELOplayerA < 0) { $ELOplayerA = 0; }
	if($ELOplayerB < 0) { $ELOplayerB = 0; }
	$P1++;$W1++;$P2++;$L2++;
	$kueri="UPDATE victim_members SET EloPoint='".$ELOplayerA."', P='".$P1."', W='".$W1."' WHERE id='".$_POST['kotak1']."'";
	$kueri2="UPDATE victim_members SET EloPoint='".$ELOplayerB."', P='".$P2."', L='".$L2."' WHERE id='".$_POST['kotak2']."'";
	$perintah=mysql_query($kueri);
	$perintah=mysql_query($kueri2);
}else if(isset($_POST['SKotak2'])) {
	$ekspektasiA = Ekspektasi($ELOplayerA, $ELOplayerB);
	$ekspektasiB = 1-$ekspektasiA;
	$ELOplayerA = $ELOplayerA + EloRating($ELOplayerA, 0, $ekspektasiA);
	$ELOplayerB = $ELOplayerB + EloRating($ELOplayerB, 1, $ekspektasiB);
	if($ELOplayerA < 0) { $ELOplayerA = 0; }
	if($ELOplayerB < 0) { $ELOplayerB = 0; }
	$P1++;$L1++;$P2++;$W2++;
	$kueri="UPDATE victim_members SET EloPoint='".$ELOplayerA."', P='".$P1."', L='".$L1."' WHERE id='".$_POST['kotak1']."'";
	$kueri2="UPDATE victim_members SET EloPoint='".$ELOplayerB."', P='".$P2."', W='".$W2."' WHERE id='".$_POST['kotak2']."'";
	$perintah=mysql_query($kueri);
	$perintah=mysql_query($kueri2);
}else if(isset($_POST['SKotak3'])) {
	$ekspektasiA = Ekspektasi($ELOplayerA, $ELOplayerB);
	$ekspektasiB = 1-$ekspektasiA;
	$ELOplayerA = $ELOplayerA + EloRating($ELOplayerA, 0.5, $ekspektasiA);
	$ELOplayerB = $ELOplayerB + EloRating($ELOplayerB, 0.5, $ekspektasiB);
	if($ELOplayerA < 0) { $ELOplayerA = 0; }
	if($ELOplayerB < 0) { $ELOplayerB = 0; }
	$P1++;$D1++;$P2++;$D2++;
	$kueri="UPDATE victim_members SET EloPoint='".$ELOplayerA."', P='".$P1."', D='".$D1."' WHERE id='".$_POST['kotak1']."'";
	$kueri2="UPDATE victim_members SET EloPoint='".$ELOplayerB."', P='".$P2."', D='".$D2."' WHERE id='".$_POST['kotak2']."'";
	$perintah=mysql_query($kueri);
	$perintah=mysql_query($kueri2);
}
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>FACEMASH JKT48</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.85">
    <link rel="stylesheet" href="css/style.css">
    
  </head>

  <body>

    <div id="header">
	<h1>FACEMASH JKT48</h1>
</div>
<div id="main">
	<h2>Click to Vote!</h2>
	<table>
		<tr>
			<td width="120" valign="top">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<input type="hidden" value="<?php echo $a; ?>" name="kotak1" />
					<input type="hidden" value="<?php echo $b; ?>" name="kotak2" />
					<input type="image" src="img/<?php echo $a; ?>.jpg" name="SKotak1" value="Submit" width="120" height="169" class="foto" />
				</form>
				<br><?php echo $namaPlayerA; ?>
			</td>
			<td><b>VS</b></td>
			<td width="120" valign="top">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<input type="hidden" value="<?php echo $a; ?>" name="kotak1" />
					<input type="hidden" value="<?php echo $b; ?>" name="kotak2" />
					<input type="image" src="img/<?php echo $b; ?>.jpg" name="SKotak2" value="Submit" width="120" height="169" class="foto" />
				</form>
				<br><?php echo $namaPlayerB; ?>
			</td>
		</tr>
	</table>
	<center>
		<a href="result.php"><div id="result">VIEW RESULT</div></a>
	</center>
</div>
<div id="footer">
	This vote using <a href="https://en.wikipedia.org/wiki/Elo_rating_system" target="_blank">Elo Rating System</a>
	<br />
	Powered By <a href="https://play.google.com/store/apps/details?id=com.circlebit.mblo" target="_blank">Mblo Chat Team</a>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
