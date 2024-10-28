<?php
if (isset($_POST['checkRemark'])) {
    $grade = $_POST['grade'];
    $remark = '';

    if ($grade >= 90 && $grade <= 100) {
        $remark = "Excellent";
        $alertType = "success";
    } elseif ($grade >= 85 && $grade <= 89) {
        $remark = "Good";
        $alertType = "info";
    } elseif ($grade >= 80 && $grade <= 84) {
        $remark = "Fair";
        $alertType = "primary";
    } elseif ($grade >= 75 && $grade <= 79) {
        $remark = "Poor";
        $alertType = "warning";
    } elseif ($grade >= 60 && $grade <= 74) {
        $remark = "Fail";
        $alertType = "danger";
    } else {
        $remark = "Invalid";
        $alertType = "secondary";
    }

    echo "<div class='alert alert-$alertType mt-3'>Remark: <strong>$remark</strong></div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Remark Checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Student Grade Remark Checker</h2>
        <form method="post" class="mt-3">
            <div class="mb-3">
                <label for="grade" class="form-label">Enter Student Grade:</label>
                <input type="number" class="form-control" id="grade" name="grade" required>
            </div>
            <button type="submit" class="btn btn-primary" name="checkRemark">Check Remark</button>
        </form>
    </div>
</body>

</html>