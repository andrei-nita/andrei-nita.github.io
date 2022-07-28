<!DOCTYPE html>

<html lang="en">
<head>
    <title>Hello World</title>
</head>
<body>

<?php
// single-line comments are like this
# or like this (less common)
/* double-line comments are written
   like this, so that you can keep typing
   and typing
*/
?>

<?php
// Prints Hello World! to stdout.
// Stdout is the web page if running in a browser.
echo('Hello World!');

print('Hello World!'); // The same as echo

// echo and print are language constructs,
// and the parentheses are optional.
echo 'Hello World!';
print 'Hello World!';

echo 100; // Echo scalar variables directly
?>

<br>
<?php echo "Hello World with line break!"; ?><br/>
<?php echo "Hello" . " World with concatenation!"; ?><br/>
<?php echo 1 + 1; // arithmetic?> <br/>

<?php
// Variable
$paragraph = '🧑‍💻👩‍💻🧑🏻‍💻👩🏻‍💻🧑🏼‍💻👩🏼‍💻🧑🏽‍💻👩🏽‍💻🧑🏾‍💻👩🏾‍💻🧑🏿‍💻👩🏿‍💻';
?>

<?php echo $paragraph; // output the variable content ?><br/>
<?php echo '$paragraph'; // output $paragraph ?><br/>
<?php echo "$paragraph"; // output the variable content ?><br/>
</body>
</html>