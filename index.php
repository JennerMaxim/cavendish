<?php include 'includes/config.php'; ?>
<?php
$error = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $studentId = $_POST['studentId'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $program = $_POST['program'];
    $group = $_POST['group'];
    $select = mysqli_query($conn, "SELECT student_id FROM tbl_student WHERE student_id = '" . $studentId . "'");
    if (mysqli_num_rows($select) > 0) {
        $error .= "You have already registered! if this is a mistake, please contact +256740639860";
    } else {
        $insert = mysqli_query($conn, "INSERT INTO tbl_student(s_id, name, student_id, contact, email, program, group_assign) VALUES(null, '" . $name . "', '" . $studentId . "', '" . $contact . "', '" . $email . "', '" . $program . "', '" . $group . "')");
        if ($insert) {
            $selectId = mysqli_query($conn, "SELECT student_id FROM tbl_student WHERE student_id = '" . $studentId . "'");
            if ($row = mysqli_fetch_array($selectId)) {
                session_start();
                $_SESSION['studentId'] = $row['student_id'];
                header('location:success.php');
            }
        } else {
            $error .= "An error occurred while submitting your details. please try again or contact +256740639860";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration for Physical Student for BIT111 Discrete Mathematics</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>

<body>
    <div class="main">
        <center>
            <fieldset>
                <legend>BIT111 Physical Student</legend>
                <h2>Registration</h2>
                <span class="note">Note: This form is intended only for Physical students who have BIT111 Discrete
                    Mathematics as a
                    module.</span>
                <br>
                <span class="error">
                    <?php echo $error; ?>
                </span>
                <form method="post">
                    <input type="text" name="name" id="" required placeholder="Enter Your Name">
                    <input type="text" name="studentId" id="" required placeholder="Enter Your Student ID">
                    <input type="tel" name="contact" id="" placeholder="Enter Your Phone Number">
                    <input type="email" name="email" id="" placeholder="Enter Your Student Email Address">
                    <input type="text" name="program" id="" required
                        placeholder="Enter Your Program. Eg: BCS-1, BIT-1 ...">
                    <select name="group" id="" required>
                        <option value="">Do you want to be assigned to any group?</option>
                        <option value="yes">Yes</option>
                        <option value="no">NO</option>
                    </select>
                    <button name="submit">Submit</button>
                    <span>Powered by <a href="https://github.com/JennerMaxim">Maxim</a></span>
                </form>
            </fieldset>
        </center>
    </div>
</body>

</html>