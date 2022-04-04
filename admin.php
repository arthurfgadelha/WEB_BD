<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de administrador</title>
</head>
<body>
<?php
    session_start();

    if($_SESSION==true){
      
        $servername= "sql301.epizy.com";
        $username= "epiz_30435643";
        $password= "Y8z5BylltRq";
        $dbname= "epiz_30435643_Banco1_BDWEB";

        $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
         if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Usuario";
        $result = $conn->query($sql);
        echo "<h2>Lista de usuarios</h2>";
        if($result->num_rows > 0){
           
            while($row = $result->fetch_assoc()){
                echo "id: " .$row["id"]. "- Nome: " .$row["nome"]. " " .$row["email"]." " .$row["senha"]. "<a href='confirmadelete.php?id=". $row["id"]."'><img src=\"imagens/delete.png\"/ style='height:20px; 'alt='Excluir'></a><br>";
    
            }
        }else{
            echo "0 resultados";
        }
       

       $conn->close();
        }else {
            echo "Não logado!!";
        }

?>
<br>
 <button type="button" class="btn btn-danger"><a href="logout.php">Logout</a></button>
 
</body>
</html>
