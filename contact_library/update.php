<?php

require './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $sql = "UPDATE contacts SET name = :name, email = :email, phone = :phone WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['name' => $name, 'email' => $email, 'phone' => $phone, 'id' => $id]);

  echo "Record updated successfully";
  header("Location: read.php");
        exit();
}

?>

<form method="post" action="">
ID: <input type="text" name="id"><br>
Name: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>
Phone: <input type="text" name="phone"><br>
<input type="submit">
</form>