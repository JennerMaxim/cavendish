<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="main">
        <center>
            <table>
                <th>No.</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Program</th>
                <th>Add to Group</th>
                <?php
                $select = mysqli_query($conn, "SELECT * FROM tbl_student");
                while ($row = mysqli_fetch_array($select)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $row['s_id']; ?>
                        </td>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                        <td>
                            <?php echo $row['student_id']; ?>
                        </td>
                        <td>
                            <?php echo $row['contact']; ?>
                        </td>
                        <td>
                            <?php echo $row['email']; ?>
                        </td>
                        <td>
                            <?php echo $row['program']; ?>
                        </td>
                        <td>
                            <?php echo $row['group_assign']; ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </center>
    </div>
</body>

</html>