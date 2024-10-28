<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Out</title>
</head>

<body>
    <p>You have been logged out. Redirecting to login page...</p>

    <script>
    localStorage.removeItem('user_logged_in');
    window.location.href = 'login.php';
    </script>
</body>

</html>