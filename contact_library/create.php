<?php

require './config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

$sql = "INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['name' => $name, 'email' => $email, 'phone' => $phone]);

echo "New record created successfully";
header("Location: read.php");
        exit();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
</head>
<body>
<form method="post" action="">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Phone: <input type="text" name="phone"><br>
    <input type="submit">
</form>  
</body>
</html>
