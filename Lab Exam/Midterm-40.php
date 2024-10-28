<?php
// Display input fields based on the number of countries
if (isset($_POST['submitCount']) && is_numeric($_POST['country_count'])) {
    $countryCount = intval($_POST['country_count']);

    echo "<form method='post' class='mt-3'>";
    echo "<input type='hidden' name='country_count' value='$countryCount'>";

    for ($i = 1; $i <= $countryCount; $i++) {
        echo "<div class='mb-3'>";
        echo "<label class='form-label'>Country #$i:</label>";
        echo "<input type='text' class='form-control' name='countries[]' required>";
        echo "</div>";
    }
    echo "<button type='submit' class='btn btn-success' name='submitCountries'>Display Countries</button>";
    echo "</form>";
}

// Display the list of countries after they are submitted
if (isset($_POST['submitCountries']) && isset($_POST['countries'])) {
    $countries = $_POST['countries'];
    echo "<h3 class='mt-5'>You have visited the following countries:</h3>";
    echo "<ul class='list-group mt-3'>";
    foreach ($countries as $country) {
        echo "<li class='list-group-item'>" . htmlspecialchars($country) . "</li>";
    }
    echo "</ul>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries Visited</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Countries You've Visited</h2>

        <!-- Form to ask the number of countries -->
        <form method="post" class="mt-3">
            <div class="mb-3">
                <label for="country_count" class="form-label">How many countries have you been to?</label>
                <input type="number" class="form-control" id="country_count" name="country_count" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submitCount">Submit</button>
        </form>
    </div>
</body>

</html>