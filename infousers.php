<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuarios</title>
</head>
<body>
    <?php
       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $senha = sha1($_POST['senha']);

        $servername= "sql301.epizy.com";
        $username= "epiz_30435643";
        $password= "Y8z5BylltRq";
        $dbname= "epiz_30435643_Banco1_BDWEB";

        $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
         if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO Usuario (nome, email, senha) VALUES ('".$nome."', '".$email."', '".$senha."')";

        if ($conn->query($sql) === TRUE) {
        header("location: http://arthurgadelha.epizy.com/index.php");
        die();
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    ?> 
</body>
</html>