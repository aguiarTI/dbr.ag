<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	
	<title>DBR.ag</title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="format-detection" content="telephone=yes"/>
    <meta name="msapplication-tap-highlight" content="yes"/>
	<meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; script-src 'self' https://cdnjs.cloudflare.com 'unsafe-inline' 'unsafe-eval';">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0"/>
	<meta name="mobile-web-app-capable" content="yes"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="googlebot-news" content="noindex, nofollow, nosnippet"/>
	<meta property="og:title" content=""/>
	<meta property="og:type" content="article"/>
	<meta property="og:image" content=""/>
	<meta property="og:site_name" content="DBR.ag"/>
	<meta property="og:description" content="" />

	<link rel="manifest" href="package.json"/>
	<!-- other browsers -->
	<link rel="shortcut icon" href="img/favicon/dbr-16x16.png"/>
	<!-- IE and safari -->
	<link rel="icon" href="img/favicon/dbr-24x24.png"/>
	<!-- device others / android -->
	<link rel="icon" href="img/favicon/dbr-64x64.png"/>
	<!-- apple device's -->
	<link rel="apple-touch-icon" href="img/favicon/dbr-64x64.png"/>
	<!-- apple ipad -->
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/dbr-76x76.png"/>
	<!-- apple ipad retina -->
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/dbr-144x144.png"/>
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/dbr-152x152.png"/>
	<!-- apple iphone -->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/dbr-57x57.png"/>
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/dbr-72x72.png"/>
	<!-- apple iphone retina -->
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/dbr-114x114.png"/>
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/dbr-120x120.png"/>
	<!-- google tv -->
	<link rel="apple-touch-icon" sizes="96x96" href="img/favicon/dbr-96x96.png"/>
	<!-- chrome web store -->
	<link rel="stylesheet" type="text/css" href="css/frameworks/flexbox/6.3.0/flexboxgrid.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/common.min.css"/>
</head>
<body>

	<!-- welcome and profile -->
	<section style="background-position: right 0;">
		<div class="row center-xs">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 welcome">
				<div class="box">
					<h1>
						<a href="http://dbr.ag/">
							<img src="img/logo.png" alt="Logo DBR.ag" title="DBR.ag">
						</a>
					</h1>
					<h2>front-enders,<br><span class="wanted">procura-se!</span><br>vaga <span class="edited">presencial</span><br>São Paulo - Capital</h2>
				</div>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile">
				<div class="box">
					<h2>Você por acaso...</h2>
					<ul>
						<li>
							<span>tem um bom<br>currículo?</span>
						</li><!--
					 --><li>
							<span>já trabalhou<br>em agência?</span>
						</li><!--
					 --><li>
							<span>é formado<br>na área?</span>
						</li>
					</ul>
					<h2>Sim?</h2>
					<h3>Isso não importa aqui!</h3>
				</div>
			</div>
		</div>
	</section>
	
	<!-- skills -->
	<section style="background-position: right 0;">
		<div class="row center-xs">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 skills">
				<div class="box">
					<h2>Sabe o que vale de verdade na DBR.ag?</h2>
					<ul>
						<li class="line-1"></li>
						<li class="line-2">
							<span>Interesse em aprender</span>
						</li>
						<li class="line-3"></li>
						<li class="line-4"></li>
						<li class="line-5"></li>
						<li class="line-6">
							<span>Conhecimento em:</span>
							<img src="img/bg-front-end.png" alt="Tecnologias" title="Tecnologias">
						</li>
						<li class="line-7"></li>
						<li class="line-8"></li>
						<li class="line-9">
							<span>Topar novos desafios</span>
						</li>
						<li class="line-10">
							<span>Ótimo humor</span>
						</li>
						<li class="line-11"></li>
						<li class="line-12">
							<span>Gostar de música</span>
						</li>
						<li class="line-13"></li>
						<li class="line-14"></li>
						<li class="line-15"></li>
						<li class="line-16">
							<span>Gostar de compartilhar conhecimento</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- contact form -->
	<section>
		<div class="row center-xs">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact">
				<div class="box">
					<h2>Preencha seus dados abaixo<br>e o próximo passo será um desafio DBR!</h2>
					<form action="#" method="post">
						<fieldset>
							<label for="name">
								<input type="text" name="name" id="name" tabindex="1" placeholder="nome completo" required="true">
							</label>

							<label for="mail">
								<input type="email" name="mail" id="mail" tabindex="2" placeholder="e-mail" required="true">
							</label>

							<label for="age" class="age">
								<input type="number" name="age" id="age" tabindex="3" placeholder="idade" required="true">
							</label>

							<label class="genre" for="genre">
								<input type="hidden" name="genre" id="genre" tabindex="4" value="">
								<div class="male">
									<span id="male"></span>									
								</div>
								<span class="male">masculino</span>
								<span class="female">feminino</span>
							</label>

							<label for="cash" class="cash">
								<input type="number" name="cash" id="cash" tabindex="5" placeholder="pretensão salarial" required="true">
							</label>
							
							<label for="telephone">
								<input type="tel" name="telephone" id="telephone" tabindex="6" placeholder="telefone" required="true">
							</label>

							<label for="facebook" class="facebook">
								<input type="url" name="facebook" id="facebook" tabindex="7" placeholder="facebook" required="true">
							</label>
							
							<label for="twitter" class="twitter">
								<input type="url" name="twitter" id="twitter" tabindex="8" placeholder="twitter" required="true">
							</label>
							
							<label for="github" class="github">
								<input type="url" name="github" id="github" tabindex="9" placeholder="github" required="true">
							</label>

							<label for="message" class="message">
								<textarea name="message" id="message" tabindex="10" placeholder="Fale mais" required="true"></textarea>
							</label>

							<label for="send" class="submit">
								<input type="submit" name="send" id="send" tabindex="11" value="enviar">
							</label>
						</fieldset>
					</form>
					<a href="http://dbr.ag/">
						<img src="img/logo-2.png" alt="Logo DBR.ag" title="DBR.ag">
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- javascript -->
	<script type="text/javascript" src="js/src/common.js"></script>
</body>
</html>