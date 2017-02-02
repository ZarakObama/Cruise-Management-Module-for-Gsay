<?php
include ("config1.php");


$c=new config();
$conn=$c->getConnexion();
$req="select * from users ";
$liste=$conn->query($req);
$test=$liste->fetchAll();
echo '<select id="select" onChange="tabb()">';
foreach ($test as $t ) {
	
echo '<option>'. $t[1] .'</option>';
	
}
echo '</select>';

