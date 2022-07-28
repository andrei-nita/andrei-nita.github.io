<!DOCTYPE html>

<html lang="en">
<head>
    <title>Booleans</title>
</head>
<body>

<?php
$bool1 = true;
$bool2 = false;
?>
bool1: <?php echo $bool1; ?><br/>
bool2: <?php echo $bool2; ?><br/>

bool2 is boolean? <?php echo is_bool($bool2); ?>
<br/>

<?php
$number = 3.14;
if (is_float($number)) {
    echo "It is a float.";
}

?>
</body>
</html>
