<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WCHP</title>
        <link rel="stylesheet" href="css/vendor/plugins.css" type="text/css" />
        <link rel="stylesheet" href="css/vendor/owl-carousel/owl.theme.css" type="text/css" />
        <link rel="stylesheet" href="css/vendor/owl-carousel/owl.carousel.css" type="text/css" />
        <link rel="stylesheet" href="css/default.css" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/vendor/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                autoPlay : 3000,
                navigation : false, // Show next and prev buttons
                slideSpeed : 5,
                paginationSpeed : 400,
                singleItem:true
            });
        });
        </script>
    </head>
    <body>
        <header>
            <div class="container" id="container"> <!-- -->
                <div id="topo">
                    <div id="logo">
                        <img src="imagem/php_logo.png" class="img-responsive" alt="" />
                    </div>
                    <div id="pesquisa">
                        <p>Olá, Seja bem-Vindo <a href=""> Faça Login </a> ou <a href=""> Cadastre-se</a>. </p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" name="buscar" class="form-control" id="buscar" required placeholder="Pesquisar no Site... " />
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </span> 
                            </div> <!--Fim Input de Psequisa-->
                        </form> <!--Fim Formulario de Pesquisa Topo -->
                    </div> <!--Fim pesquisa -->
                </div> <!--Fim Topo -->
            </div> <!--Fim Container -->
        </header><!-- Fim da Header -->
        <div id="menu_navegacao">
            <div class="container">
            <nav class="navbar navbar-default" id="menu_content">
                <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Menu Categoria <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider" > </li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li class="active"><a href="#">Link 1<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        
        
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
            </div></div>
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="imagem/slide1.jpg" alt="Owl Image" /></div>
                <div class="item"><img src="imagem/slide2.jpg" alt="Owl Image" /></div>
            </div>
    </body>
</html>
