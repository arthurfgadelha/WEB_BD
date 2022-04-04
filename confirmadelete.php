<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar delete</title>
</head>
<body>
<?php
    session_start();

    if($_SESSION==true){
      
        $servername= "sql301.epizy.com";
        $username= "epiz_30435643";
        $password= "Y8z5BylltRq";
        $dbname= "epiz_30435643_Banco1_BDWEB";
        $id = $_GET["id"];

        $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
         if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Usuario WHERE id = '".$id."'";
        $result = $conn->query($sql);
        echo "<h2>Tem certeza que deseja excluir?</h2>";
        if($result->num_rows > 0){
           $row = $result->fetch_assoc();
           echo "<form action = 'delete.php' method = 'post' >";
           echo "<input type = 'hidden' name = 'id' value = '".$id."'> ";
           echo "id: " . $row["id"]. "- nome: " .$row["name"]. "- email: " .$row["email"]."- senha: " .$row["senha"];
           echo "<input type='submit' value= 'Excluir'> ";
           
        }else{
            echo "Usuario não existe";
        }

       $conn->close();
        }else {
            echo "Não logado!!";
        }

?>
</body>
</html>