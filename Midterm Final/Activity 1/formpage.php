<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition Form - Edoloverio</title>
</head>

<body>
    <div class="container">
        <h2>Enter Two Numbers for Addition</h2>
        <form action="collection.php" method="POST">
            <div class="input-group">
                <label for="num1">Number 1:</label>
                <input type="number" id="num1" name="num1" required>
            </div>
            <div class="input-group">
                <label for="num2">Number 2:</label>
                <input type="number" id="num2" name="num2" required>
            </div>
            <button type="submit">Add</button>
        </form>
    </div>
</body>

</html>