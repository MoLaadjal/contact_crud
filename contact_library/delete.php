<?php

require './config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];

  $sql = "DELETE FROM contacts WHERE id = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $id]);

  echo "Record deleted successfully";
  header("Location: read.php");
        exit();
}

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
ID: <input type="text" name="id"><br>
<input type="submit" value="Delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce contact?');">
</form>