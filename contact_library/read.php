<?php

require './config.php';

$sql = "SELECT id, name, email, phone FROM contacts";
$stmt = $pdo->query($sql);

if ($stmt->rowCount() > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>";
    // output data of each row
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}