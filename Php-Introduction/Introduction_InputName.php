<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Program</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Enter Your Name</h2>

        <form method="post" class="mt-3">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if (isset($_POST['name'])) {
            $name = htmlspecialchars($_POST['name']);
            echo "<div class='alert alert-success mt-3'>Hello, I'm $name. <br> I'm from Colupan Bajo Sinacaban Misamis Occidental <br> 19 of age <br></div>";
        }
        ?>
    </div>
</body>

</html>