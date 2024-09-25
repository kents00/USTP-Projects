<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator with Bootstrap</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center">PHP Basic Calculator</h1>
        <h3 class="text-center">Kent Edoloverio</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="num1">Enter First Number:</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>
            <div class="form-group">
                <label for="num2">Enter Second Number:</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Calculate</button>
        </form>

        <?php

        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            $addition = $num1 + $num2;
            $subtraction = $num1 - $num2;
            $multiplication = $num1 * $num2;
            $division = ($num2 != 0) ? $num1 / $num2 : "undefined";

            echo "<h3 class='mt-4'>Results:</h3>";
            echo "<div class='alert alert-success'>Addition: <strong>$addition</strong></div>";
            echo "<div class='alert alert-success'>Subtraction: <strong>$subtraction</strong></div>";
            echo "<div class='alert alert-success'>Multiplication: <strong>$multiplication</strong></div>";
            echo "<div class='alert alert-success'>Division: <strong>$division</strong></div>";
        }
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
