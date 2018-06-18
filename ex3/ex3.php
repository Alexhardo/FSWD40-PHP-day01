<!DOCTYPE html>
<html>
<body>

<link rel="stylesheet" type="text/css" href="style.css">

<?php

echo "<h1 class='middle'>";

$d=date("D");
if ($d=="Mon")
echo "Have a nice monday!";
elseif ($d=="Tue")
echo "Have a nice Sunday!";


echo "</h1>";
?>
</body>
</html>