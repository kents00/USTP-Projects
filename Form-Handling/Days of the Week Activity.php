<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Selector</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center">Days of the Week</h1>
        <h3 class="text-center">Kent Edoloverio</h3>
        <form method="POST" action="">
            <div class="btn-group-vertical w-100">
                <button type="submit" name="day" value="Monday" class="btn btn-primary">Monday</button>
                <button type="submit" name="day" value="Tuesday" class="btn btn-primary">Tuesday</button>
                <button type="submit" name="day" value="Wednesday" class="btn btn-primary">Wednesday</button>
                <button type="submit" name="day" value="Thursday" class="btn btn-primary">Thursday</button>
                <button type="submit" name="day" value="Friday" class="btn btn-primary">Friday</button>
            </div>
        </form>

        <?php
        if (isset($_POST['day'])) {
            $selectedDay = $_POST['day'];
            echo "<h3 class='mt-4, text-center'>You selected: <strong>$selectedDay</strong></h3>";
        }
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
