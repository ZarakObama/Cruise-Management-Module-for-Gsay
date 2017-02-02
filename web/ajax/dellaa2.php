<?php
include ("config1.php");


$c=new config();
$conn=$c->getConnexion();
$name = $_GET['x'];
$req="select * from users where name like '$name' ";
$liste=$conn->query($req);
$test=$liste->fetchAll();
echo ' <table border = 1 >
<tr>  
<th> id </th>
<th> name </th> 
<th> firstname </th> 

</tr> ';
foreach ($test as $t ) {
	
echo '
<tr>
<td>'. $t[0] .'</td>
<td>'. $t[1] .'</td>
<td>'. $t[2] .'</td>




</tr>
</table>
';
	
}


