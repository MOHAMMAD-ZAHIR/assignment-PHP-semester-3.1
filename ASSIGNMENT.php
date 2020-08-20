<?php
$cars=array(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);

echo"<table border='1px' cellpadding='10px' cellspacing='0px'>

<tr>
<th>Name</th>
<th>Stock</th>
<th>Sold</th>
</tr>";

foreach($cars as list($Name,$Stock,$Sold)){
echo"<tr>
<td>$Name</td>
<td> $Stock</td>
<td> $Sold</td>
</tr>";
}
echo"</table>";
?>