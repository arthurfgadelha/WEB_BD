<?php
        $servername= "sql301.epizy.com";
        $username= "epiz_30435643";
        $password= "Y8z5BylltRq";
        $dbname= "epiz_30435643_Banco1_BDWEB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM Usuario WHERE id='".$_POST['id']."'";

if ($conn->query($sql) === TRUE) {
    header('Location: admin.php?msg=Usuario Removido com Sucesso!');
    die();
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>