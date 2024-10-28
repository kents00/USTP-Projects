<?php
$sum = 0;
for ($i = 2; $i <= 30; $i += 2) {
    $sum += $i;
}
echo "<div class='alert alert-info mt-3'>The sum of all even integers between 1 and 30 is: <strong>$sum</strong></div>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Even Integers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Sum of All Even Integers Between 1 and 30</h2>
    </div>
</body>

</html>