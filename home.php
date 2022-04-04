<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="style.css">
      <title>Home</title>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <?php
        session_start();
    ?> 
    <?php
       if($_SESSION==true){
        echo "Bem Vindo!!";
      
        $servername= "sql301.epizy.com";
        $username= "epiz_30435643";
        $password= "Y8z5BylltRq";
        $dbname= "epiz_30435643_Banco1_BDWEB";

        $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
         if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
        }

       

       $conn->close();
        }else {
            echo "Não logado!!";
        }
    ?> 
    <br>
    <br>
    

       <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
         <img src="imagens/logo.jpg" alt="Logotipo" width="50" height="50">
        </div>
        <div class="input-group-btn">
            
          </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul>
             <button type="button" class="btn btn-danger"><a href="logout.php">Logout</a></button>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="jumbotron text-center">
      <h1>Green City</h1> 
      <p>A nova cidade das tecnologias renovaveis</p> 
    </div>
         
     <!-- Container (Pricing Section) -->
    <div id="pricing" class="container-fluid">
      <div class="text-center">
        <h2>Preços</h2>
        <h4>Compre o seu lote</h4>
      </div>
      <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>Lote-1</h1>
            </div>
            <div class="panel-body">
              <p><strong>10x10</strong> Metros </p>
              <p>Esquina</p>
            </div>
            <div class="panel-footer">
              <h3>R$80.000</h3>
              <button class="btn btn-lg">Comprar</button>
            </div>
          </div>      
        </div>     
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>Lote-2</h1>
            </div>
            <div class="panel-body">
              <p><strong>30x30</strong> Metros</p>
              <p>Centro da Rua</p>
            </div>
            <div class="panel-footer">
              <h3>R$150.000</h3>
              <button class="btn btn-lg">Comprar</button>
            </div>
          </div>      
        </div>       
        <div class="col-sm-4 col-xs-12">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h1>Lote-3</h1>
            </div>
            <div class="panel-body">
              <p><strong>100x100</strong> Metros</p>
              <p>Quadra</p>
            </div>
            <div class="panel-footer">
              <h3>RS300.000</h3>
              <button class="btn btn-lg">Comprar</button>
            </div>
          </div>      
        </div>    
      </div>
    </div>
    
    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
      <h2 class="text-center">CONTATO</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>oferecemos suporte 24 horas por dia.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> Rio Grande do Norte, BR</p>
          <p><span class="glyphicon glyphicon-phone"></span> +55 (84)99636-3636</p>
          <p><span class="glyphicon glyphicon-envelope"></span> arthurgadelha@gmail.com</p>
        </div>
        <div class="col-sm-7 slideanim">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">Enviar</button>
            </div>
          </div>
          <p>Pagina Criada para fins academicos</p>
        </div>
      </div>
    </div>  
    <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
      
      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;
    
          var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
        });
      });
    })
    </script>
    
</body>
</html>