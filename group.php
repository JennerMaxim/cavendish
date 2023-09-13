<?php include 'includes/config.php'; ?>
<?php
$error = "";
$success = "";
if (isset($_POST['submit'])) {
    $studenID = $_POST['studenID'];
    $groupName = $_POST['groupName'];
    // $select = mysqli_query($conn, "SELECT * FROM tbl_group WHERE id = '" . $id . "'");
    // if (mysqli_num_rows($select) > 0) {
    //     $row = mysqli_fetch_array($select);
    //     $group = $row['group_name'];
    //     $error .= "$id - This id is already in the group - $group";
    // } else {
    $insert = mysqli_query($conn, "INSERT INTO tbl_group (group_id, student_id, group_name) VALUES (null, '" . $studenID . "', '" . $groupName . "'");
    if ($insert) {
        $success .= "Inserted Successfully";
    } else {
        $error .= "Failed to insert the Student ID and group";
    }
    // }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <center>
            <span>
                <?php echo $success; ?>
            </span>
            <span>
                <?php echo $error; ?>
            </span>
            <form method="post">
                <input type="text" name="studenID" id="" required placeholder="Enter the Student ID">
                <input type="text" name="groupName" id="" required placeholder="Enter the Student Group">
                <button name="submit">Add</button>
            </form>
        </center>
    </div>
</body>

</html>