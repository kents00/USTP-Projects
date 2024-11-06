<?php
require_once 'classadd.php';

if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Instantiate the Addition class
    $addition = new Addition($num1, $num2);

    // Get the result of the addition
    $result = $addition->calculateSum();
    echo "<h3>Result of Adding {$num1} and {$num2} is: $result</h3>";
} else {
    echo "<p>Error: Both numbers are required.</p>";
}
?>