<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel or Consonant Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Vowel or Consonant Checker</h2>
        <form method="post" class="mt-3">
            <div class="mb-3">
                <label for="letter" class="form-label">Enter a Single Letter:</label>
                <input type="text" class="form-control" id="letter" name="letter" required>
            </div>
            <button type="submit" class="btn btn-primary" name="checkLetter">Check</button>
        </form>

        <?php
        if (isset($_POST['checkLetter'])) {
            $input = $_POST['letter'];

            if (strlen($input) == 1 && ctype_alpha($input)) {
                $letter = strtolower($input);
                if (in_array($letter, ['a', 'e', 'i', 'o', 'u'])) {
                    $result = "The letter '$input' is a Vowel.";
                    $alertType = "success";
                } else {
                    $result = "The letter '$input' is a Consonant.";
                    $alertType = "info";
                }
            } else {
                $result = "Error: Please enter a single letter only.";
                $alertType = "danger";
            }

            echo "<div class='alert alert-$alertType mt-3'>$result</div>";
        }
        ?>
    </div>
</body>

</html>