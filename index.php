
<html lang="pt-br">
    <head>
      <title> BDWEB HTML e PHP</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="style.css">

    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <?php
        $servername= "sql301.epizy.com";
        $username= "epiz_30435643";
        $password= "Y8z5BylltRq";
        $dbname= "epiz_30435643_Banco1_BDWEB";

        $conn = new mysqli ($servername, $username, $password, $dbname);
    ?>
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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">SOBRE</a></li>
            <li><a href="#services">SERVIÇOS</a></li>
            <li><a href="#pricing">PREÇOS</a></li>
            <li><a href="#contact">CONTATO</a></li>
             <button type="button" class="btn btn-danger"><a href="login.php">Login</a></button>
            <button type="button" class="btn btn-danger"><a href="cadastro.php">Cadastro</a></button>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="jumbotron text-center">
      <h1>Green City</h1> 
      <p>A nova cidade das tecnologias renovaveis</p> 
    </div>
    
    <!-- Container (Descricao) -->
    <div id="about" class="container-fluid">
      <div class="row">
        <div class="col-sm-8">
          <h2>Sobre Green City</h2><br>
          <h4>Seja Bem vindo a Green City!</h4><br>
          <p>O novo bairro traz o conceito de cidade renovavel. Reutilização de recursos e tencologia de ponta foram aplicados para trazer aos moradores o maximo conforto e um estilo de vida sustentavel. Além de tudo isso, promovemos um amplo espaço espaço infantil para as crianças interagirem e um nivel de segurança jamais vista em todo o mundo. </p>
        </div>
        <div class="col-sm-4">
          <img src="imagens/drone.jpg" alt="Transporte aereo">
          <span></span>
        </div>
      </div>
    </div>
 
    <!-- Container (Servicos) -->
    <div id="services" class="container-fluid text-center">
      <h2>SERVIÇOS</h2>
      <h4>O que nós oferecemos</h4>
      <br>
      <div class="row slideanim">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-off logo-small"></span>
          <h4>Energia</h4>
          <p>Energia Renovavel</p>
        </div>  
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-lock logo-small"></span>
          <h4>Trabalho</h4>
          <p>Oportunidades de trabalho</p>
        </div>
      </div>
      <br><br>
      <div class="row slideanim">
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-leaf logo-small"></span>
          <h4>Verde</h4>
          <p>Parques Ecologicos</p>
        </div>
        <div class="col-sm-4">
          <span class="glyphicon glyphicon-certificate logo-small"></span>
          <h4>Garantia</h4>
          <p>Garantia nos serviços prestados</p>
        </div>
      </div>
    </div>
        
     <!-- Container (Precos) -->
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
    
    <!-- Container (Contato) -->
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
      
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    
        if (this.hash !== "") {
          
          event.preventDefault();
    
          
          var hash = this.hash;
    
          
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){
       
            
            window.location.hash = hash;
          });
        } 
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
    