<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Usuarios</title>
</head>
<body>
    <?php
        session_start();

       $email = $_POST['email'];
       $senha = $_POST['senha'];
       $_SESSION["estarlogado"]= false;

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
        
        if($result->num_rows > 0){
           
            while($row = $result->fetch_assoc()){
                
                if($row["email"] == $email && $row["senha"] == sha1 ($senha)){
                    $estarlogado=true;
                }
            }
        }else{
            echo "0 resultados";
        }
        if($_SESSION == true){
            if($email == "admin@gmail.com" && $senha=="admin"){
                 header("location: http://arthurgadelha.epizy.com/admin.php");
            }else{
                header("location: http://arthurgadelha.epizy.com/home.php");
            }
            
        }else {
            echo "Não Esta logado!!";
        }

    $conn->close();
    ?> 
</body>
</html>