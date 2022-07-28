<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Associative Arrays</title>
  </head>
  <body>
    
    <?php $assoc = array("first_name" => "Pete", "last_name" => "Sampras"); ?>
    <?php echo $assoc["first_name"]; ?><br />
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php $assoc["first_name"] = "John"; ?>
    <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />

    <?php // echo $assoc[0]; is not possible with associative arrays?><br />

    <?php $numbers = array(5,8,43,16,23,52); ?>
    <?php $numbers = array(0 => 4, 1 => 8, 2 => 43, 3 => 16, 4 => 23, 5 => 42); ?>
    <?php echo $numbers[0]; ?>
    
  </body>
</html>
