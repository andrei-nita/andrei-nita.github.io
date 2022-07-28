<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Arrays</title>
  </head>
  <body>
    <?php
    
      $numbers = array(4,8,15,16,23,42);
      echo $numbers[0];
    ?>
    <br />
    
    <?php $mixed = array(6, "dog", "cat", array("a", "b", "c")); ?>
    <?php echo $mixed[2];  ?><br />
    <?php //echo $mixed[3]; ?><br />
    <?php //echo $mixed ?><br />
    
    <?php echo $mixed[3][1]; ?><br />
    
    <?php $mixed[2] = "lion"; ?>
    <?php $mixed[4] = "mouse"; ?>
    <?php $mixed[] = "chicken"; ?>
    
    <pre>
    <?php echo print_r($mixed); ?>
    </pre>
    
    <?php 
      //PHP 5.4 added the short array syntax.
      $array = [1,2,3];
    ?>
    
  </body>
</html>
