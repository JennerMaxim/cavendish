<?php session_start();
if (empty($_SESSION['studentId'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration for Online Student for BIT111 Discrete Mathematics</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <center>
        <h1 class="success">Your Response has been submitted Successful! Your Student ID Number is
            <?php echo $_SESSION['studentId']; ?>
        </h1>
    </center>
</body>

</html>