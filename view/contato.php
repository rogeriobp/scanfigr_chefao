
		<?php>
		<!DOCTYPE html>
		<html>
		 <head>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			    <!-- BOOTSTRAP -->
    <!-- CUSTOM CSS -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/121590743d.js" crossorigin="anonymous"></script>

    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <!-- font-family: 'Ubuntu Mono', monospace; -->
    <!-- font-family: 'Ubuntu', sans-serif; -->
			<link rel="stylesheet" type="text/css" href="../web/css/estilo_tela.css">

			<link rel="stylesheet" href="../web/css/bootstrap.min.css">
    <title>Scanfigr</title>
		 </head>

		 <body>
		  <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block">
                    <!-- hidden spacer to center brand on mobile --></span>
                <a class="navbar-brand d-none d-lg-inline-block" href="#">
                    <img src="../assets/img/Grupo 539@2x.png" alt="">
                </a>
                <a class="navbar-brand-two mx-auto d-lg-none d-inline-block" href="#">
                    <img src="//placehold.it/40?text=LOGO" alt="logo">
                </a>
                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
                <ul class="navbar-nav ml-auto flex-nowrap">
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item nav-active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item"><i class="fab fa-instagram"></i> Instagram</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link m-2 menu-item"><i class="fab fa-facebook-square"></i> Facebook</a>
                    </li>
                </ul>
            </div>
        </nav>
		 	<div class="container">
		 	<div class="div_princinpal">

		 	<div class="div_url_p_contato">
		       <div class="div_url_contato" align="center">
		       	<span class="url_contato" align="center">A url do seu site é válida.</span>
		       	   	<span class="glyphicon glyphicon-ok img-circle text-primary btn-icon" id="span_glyphicon"		       	   	" align="right"></span>
		       </div>
		       <p class="p_contato">
		       	Excelente! Detectamos que o seu site está rodando o Wordpress 4.72
		       </p>
		 	</div>

                        <!-- Aqui vai exibir a MSG na tela -->            
            <div id="id_success" class="alert alert-success" role="alert" style="display:none"> 
                A sua solicitação foi aceita em breve você estará recebendo á analise.
            </div>
            <div id="id_danger" class="alert alert-danger" role="alert"  style="display:none" > Erro ao enviar os dados</div>

		 	<div class="div_text_contato">
		 		<h1 class="h1_contato">Ótimo! Falta pouco...</h1>
		 		<p class="p_text_contato">
		 			Agora, só precisamos de mais alguns dados para enviarmos o relatório. Não enviamos qualquer tipo de  spam, somente solucões, e em até 48 horas o seu relatório está pronto!
		 		</p>
		 	</div>
		 	<div>
				 <form>
				  <div class="form-group" align="center">
				   <p class="label_contato" for="nome">Qual o seu nome?</p>
				    <input type="name" name="nome" class="form-control" id="input_contato_nome" aria-describedby="nomeHelp" placeholder="Fulano da Silva Sauro" required="nome">
				    <p class="label_contato" for="email">Qual e-mail podemos enviar o relatório?</p>
				    <input type="email" name="email" class="form-control" id="input_contato_email" aria-describedby="emailHelp" placeholder="fulano@provedor.com.br" required="email">
				    <input type="text" class="form-control" name="ip" id="ip" style="display:none">

				  <button type="submit" class="btn_contato" align="center" id="btn_submit">Escaneie meu site
				  	 	<span class="glyphicon glyphicon-chevron-right" align="right"></span>
				  </button>
				  </div>
				</form>
		 	</div>
		 	</div>
		</div>

		<div class="img_contato">
			   <img src="../web/img/mascote_contato.png" alt="" class="img_contato">
		</div>
		</div>
        <footer>
            <div class="row">
                <div class="container">
                    <div class="col-sm-6 offset-sm-3">
                        <div class="row">
                            <h3 class="logo">
                                <img src="../assets/img/Grupo 568@2x.png" alt="scafigr logo branco">
                            </h3>
                        </div>
                        <div class="row">
                            <p>É um produto em processo de validação.</p>
                        </div>
                        <div class="row">
                            <p>Todos os direitos reservados ao Expresso 2222, 2019.</p>
                        </div>
                    </div>
                </div>
        </footer>
		 </body>

		 		       <!-- ADICIONEI ESTES ITENS AQUI-->
		 		<script src="../web/js/jquery.js" type="text/javascript" ></script>
                <script src="../web/js/submit_contato.js" type="text/javascript" ></script>
	<!-- FIM DO ITENS AQUI-->
		</html>