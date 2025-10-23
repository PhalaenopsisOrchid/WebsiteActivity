<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Features Example</title>
</head>
<body>
 
<h2>1. String Concatenation</h2>
<?php
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo "Full Name: " . $fullName;
?>
 
<hr>
 
<h2>2. Math Functions</h2>
<?php
$num = -9.5;
echo "Absolute value of -9.5: " . abs($num) . "<br>";
echo "Square root of 25: " . sqrt(25) . "<br>";
echo "2 raised to the power of 3: " . pow(2, 3) . "<br>";
echo "Random number (1-100): " . rand(1, 100);
?>
 
<hr>
 
<h2>3. Loops</h2>
<?php
echo "<strong>For Loop:</strong><br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}
 
echo "<br><strong>While Loop:</strong><br>";
$j = 1;
while ($j <= 3) {
    echo "Count: $j<br>";
    $j++;
}
 
echo "<br><strong>Foreach Loop:</strong><br>";
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo "$fruit<br>";
}
?>
 
<hr>
 
<h2>4. Constants</h2>
<?php
define("SITE_NAME", "My PHP Practice Site");
define("PI", 3.14159);
echo "Welcome to " . SITE_NAME . "<br>";
echo "The value of PI is " . PI;
?>
 
<hr>
 
<h2>5. PHP Superglobals</h2>
<?php
echo "Current file path: " . $_SERVER['PHP_SELF'] . "<br>";
echo "Server name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Request method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
?>
 
<hr>
 
<h2>6. Sample Form Handling</h2>
<form method="post" action="">
    <label>Enter your name:</label>
    <input type="text" name="username">
    <input type="submit" value="Submit">
</form>
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    if (!empty($name)) {
        echo "Hello, " . $name . "!";
    } else {
        echo "Please enter your name.";
    }
}
?>
 
</body>
</html>
 