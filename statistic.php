<link href="main.css" type="text/css" rel="stylesheet" />

<?php

include "module-config.php";
$id = $_GET['id'];
$sql = mysql_query("SELECT * FROM victim_members WHERE id=$id");
$show = mysql_fetch_array($sql);





?><center>
<table width="180" class="card">
  <tr>
    <td width="180" height="180"><center><img src="img/<?php echo $show['id']; ?>.jpg" width="180" height="180" /></center></td>
  
  </tr>
  
   <tr> <td width="250"><?php echo  "<b>".$show['nama']."</b><br/>"; ?></td></tr>
  <tr>
    <td><?php echo "Total Poin: ". $show['EloPoint']."<br/>"; ?></td>
  </tr>
  <tr>
    <td><?php echo "Menang: ". $show['W']." kali<br/>"; ?> </td>
  </tr>
  <tr>
    <td><?php echo "Kalah: ". $show['L']." kali<br/>"; ?> </td>
  </tr>
  <tr>
    <td><?php echo "Seri: ". $show['D']." kali<br/>"; ?></td>
  </tr>
</table></center>
<a href="result.php"><div class="button orange">kembali ke hasil</div></a>


