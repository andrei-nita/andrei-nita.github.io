<!DOCTYPE html>

<html lang="en">
<head>
    <title>Variables</title>
</head>
<body>
<?php

$var1 = 10;
echo $var1; // 10

echo "<br />";

$var1 = "Ten";
echo $var1; // Ten

echo "<br />";

$var2 = "💻";
echo $var2; // 💻

$var1copy = $var1;
$var1 = 200;

echo "<br />";
echo $var1copy; // Ten

$var1ref = &$var1;
$var1 = 1000;

echo "<br />";
echo $var1ref; // 1000
?>
</body>
</html>