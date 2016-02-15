<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.85">
    <title></title>
		<link rel="stylesheet" href="css/style.css">
		
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <div id="header">
	<h1><a href="index.html">FACEMASH JKT48</a></h1>
</div>
<div id="main">
	<h2>Match Result</h2>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped table-hover table-condensed">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Member Name
						</th>
						<th>
							Score
						</th>
						<th>
							Action
						</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
					include("module-config.php");
					
					$i=1;
					$query="SELECT * FROM victim_members ORDER BY EloPoint DESC";
					$perintah=mysql_query($query);
					while($d=mysql_fetch_array($perintah)){
					?>
					<tr>
						<td>
							<?php echo $i++.'.'; ?>
						</td>
						<td align="left">
							<?php echo $d['nama']; ?>
						</td>
						<td>
							<?php echo $d['EloPoint'];?>
						</td>
						<td>
							<a href="detail.php?id=<?php echo $d['id'];?>">detail</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


	<center>
		<a href="index.php"><div id="result">BACK TO DUEL</div></a>
	</center>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

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
