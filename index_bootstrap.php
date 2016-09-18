<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WCHP</title>
        <link rel="stylesheet" href="css/vendor/plugins.css" type="text/css" />
        <link rel="stylesheet" href="css/vendor/owl-carousel/owl.theme.css" type="text/css" />
        <link rel="stylesheet" href="css/vendor/owl-carousel/owl.carousel.css" type="text/css" />
        <link rel="stylesheet" href="css/vendor/fortawesome/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="css/default.css" type="text/css" />
       
        <script type="text/javascript" src="js/jquery.js"></script>
       
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
        <li class="active"><a href="#">Início<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Empresa</a></li>
        <li><a href="#">Contatos</a></li>
        <li><a href="#">Serviços</a></li>
        
        
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
            </div></div>

            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="imagem/slide1.jpg" alt="Owl Image" /></div>
                <div class="item"><img src="imagem/slide2.jpg" alt="Owl Image" /></div>
            </div>
            <div class="container" id="widget-menu">
                <div class="row">
                    <div id="widget-menu-list">
                        <div class="box">
                            <i class="glyphicon glyphicon-list-alt " aria-hidden="true"></i>
                            <h2>Dicas de Marketing</h2>
                            <p>Diversas dicas e textos de motivação</p>
                            <a href="http://www.sitecontabil.com.br/dicas_marketing/" target="_blank">mais</a>
                        </div>
                        <div class="box">
                            <i class="glyphicon glyphicon-folder-close " aria-hidden="true"></i>
                            <h2>Dicas de Marketing</h2>
                            <p>Diversas dicas e textos de motivação</p>
                            <a href="http://www.sitecontabil.com.br/dicas_marketing/" target="_blank">mais</a>
                        </div>
                        <div class="box">
                            <i class="glyphicon glyphicon-list-alt " aria-hidden="true"></i>
                            <h2>Dicas de Marketing</h2>
                            <p>Diversas dicas e textos de motivação</p>
                            <a href="http://www.sitecontabil.com.br/dicas_marketing/" target="_blank">mais</a>
                        </div>
                        <div class="box">
                            <i class="glyphicon glyphicon-list-alt " aria-hidden="true"></i>
                            <h2>Dicas de Marketing</h2>
                            <p>Diversas dicas e textos de motivação</p>
                            <a href="http://www.sitecontabil.com.br/dicas_marketing/" target="_blank">mais</a>
                        </div>
                        <div class="box">
                            <i class="glyphicon glyphicon-list-alt " aria-hidden="true"></i>
                            <h2>Dicas de Marketing</h2>
                            <p>Diversas dicas e textos de motivação</p>
                            <a href="http://www.sitecontabil.com.br/dicas_marketing/" target="_blank">mais</a>
                        </div>
                        
                   
                    </div>
                    <div id="widget-menu-list-lateral">
                        <div id="ultimas_noticias">
                            <h1>Últimas Postagens</h1>
                            <ul>
                                <li>Receita Federal Libera IRRF 2016</li>
                                <li>Tribunal de Contas Parabenisa a Prodata Informatica</li>
                                <li>Receita Federal Libera IRRF 2016</li>
                                <li>Tribunal de Contas Parabenisa a Prodata Informatica</li>
                                <li>Receita Federal Libera IRRF 2016</li>
                             </ul>
                        </div>
                        <div class="col-md-12" id="publicidade-lateral"> 
                            <h1>Parceiros </h1>
                            
                            <img src="imagem/Publicidade_ou_marketing.jpg" alt="" width="292" height="190"/>
                        </div>
                    </div>
                </div>

        </div>
       
    
	<footer>
		<div class="container">
			<div class="content" id="footer-sidebar">
				<div class="footer-widget footer-widget--about">
					<a href="#" title="Criando sites profissionais passo a passo">
                                            <img src="imagem/php_logo.png" class="img-responsive" alt="Criando sites profissionais passo a passo" title="Criando sites profissionais passo a passo">
					</a>
					<p>
						Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scriptaset patrioque scribentur, at pro fugit erts verterem molestiae, sed et vivendo ali Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur...
					</p>
				</div>
				<div class="footer-widget">
					<h4 class="widget__title">
						<span></span> Noticias
					</h4>
					<ul class="clearfix" id="fotos">
						<li>
							<a href="#" title="Fotos do rodapé">
								<img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
							</a>
						</li>
						<li>
							<a href="#" title="Fotos do rodapé">
								<img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
							</a>
						</li>
						<li>
							<a href="#" title="Fotos do rodapé">
								<img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
							</a>
						</li>
						<li>
							<a href="#" title="Fotos do rodapé">
								<img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
							</a>
						</li>
						<li>
							<a href="#" title="Fotos do rodapé">
								<img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
							</a>
						</li>
						<li>
							<a href="#" title="Fotos do rodapé">
								<img src="images/card01.jpg" class="img-responsive" alt="Fotos do rodapé" title="Fotos do rodapé">
							</a>
						</li>
					</ul>
				</div>
				<div class="footer-widget">
					<h4 class="widget__title">
						<span></span> Localização
					</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.307953558354!2d-46.189562099999975!3d-23.521423799999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cdd83dfd10bbd9%3A0x7a904a3e6d7b06e9!2sR.+Bar%C3%A3o+de+Jacegua%C3%AD+-+Centro%2C+Mogi+das+Cruzes+-+SP!5e0!3m2!1spt-BR!2sbr!4v1440075997935" width="100%" height="125" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div id="redes-sociais">
			<div class="container">
				<div class="content">
					<div id="redes-sociais__container">
						<ul id="redes-sociais__icons">
							<li>
								<a href="#" class="icon icon--facebook" title=""></a>
							</li>
							<li>
								<a href="#" class="icon icon--twitter" title=""></a>
							</li>
							<li>
								<a href="#" class="icon icon--youtube" title=""></a>
							</li>
							<li>
								<a href="#" class="icon icon--gplus" title=""></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
         
    </body>
</html>
