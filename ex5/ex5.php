<!DOCTYPE html>
<html>
<body>

<link rel="stylesheet" type="text/css" href="style.css">

<?php
echo "<h1 class='middle'>";

$numbers = array( 1, 2, 3, 4, 5,6,7,8,9,10);

foreach( $numbers as $value )
{
echo "Value is $value <br />";
}

echo "</h1>";
?>
</body>
</html>