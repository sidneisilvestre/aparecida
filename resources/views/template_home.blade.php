<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8" />
<title>Santuário Nossa Senhora Aparecida - São Caetano do Sul - {{ $title }}</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">	
<img src="imagens/logo.jpg" alt="Imagem do topo da página onde a esquerda temos o brasão da diocese, a direita o logo do nosso santuário e entre os dois uma imagem de Nossa Senhora Aparecida">
</div>
<div class="container-fluid">
<div class="row">
	<div class="col-3">
	
	<header>
	<nav>
		<ul class="list-unstyled">
		<li><a href="#conteudo" accesskey="1">ir para o conteudo principal</a></li>
<li><a href="#rodape" accesskey="2">ir para o Rodapé</a></li>
		<li><a href="{{ route('home.index') }}">Inicio</a>		</li>
		<li><a href="{{ route('home.create') }}">A Paróquia</a>		</li>
		<li><a href="/capela">Capela Santa Rita</a>		</li>
				<li><a href="{{ route('jornal.index') }}">Jornal Mater Dei</a>		</li>
		<li><a href="/casamentos">Casamentos</a>		</li>
		<li><a href="/batizados">Batizados</a>		</li>
		<li><a href="{{ route('pastorais.index') }}">Pastorais</a>		</li>
		<li><a href="{{ route('movimentos.index') }}">Movimentos</a>		</li>
		<li><a href="/associacao">Associação das Senhoras Católicas</a>		</li>
		<li><a href="/creche">Creche Zilda Natel</a>		</li>
		
		</nav>
		</header> 
		
		</div>
		<div class="col-9">
	
		<main>
		@yield('conteudo')
		</main>
		</div>
		</div>
		</div>
		<div class="container-fluid">
		<footer>
		<p id="rodape">Curta nossas redes sociais. </p>
<ul class="list-unstyled"> 
		<li><a href="https://www.facebook.com/nsaparecidascs" title="site externo">Facebook: nsaparecida.scs</a> </li> 
		<li><a href="https://www.youtube.com/channel/UCeW9EXKL3cu3LS_Jl00nz2A" title="site externo">Youtube: nsaparecida.scs </a></li>
		<li><a href="https://instagram.com/nsaparecida.scs?igshid=195a8vn8pxjaK" title="site externo">Instagram: @nsaparecida.scs</a></li>
		</ul>
		<p>Santuário Nossa Senhora Aparecida | São Caetano do Sul - <a href="https://www.diocesesa.org.br/" title="site externo">Diocese de Santo André</a> <br/>
				Telefone: (11) 4224-1612, <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511997809087">WhatsApp: (11) 99780-9087</a><br/>
		email: <a href="{{ route("contato.create") }}" >paroquiansaparecida.scs@gmail.com</a><br/>
		Endereço: Rua Oriente 455, Bairro Barcelona, São Caetano do Sul, CEP 09551-010 <BR/>
		<div class="container-fluid">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.4411192385464!2d-46.55381338502104!3d-23.624368484651626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5d289d077f1b%3A0x4c43c6492c0f8ad8!2sR.%20Oriente%2C%20455%20-%20Barcelona%2C%20S%C3%A3o%20Caetano%20do%20Sul%20-%20SP%2C%2009551-010!5e0!3m2!1spt-BR!2sbr!4v1590883102835!5m2!1spt-BR!2sbr" width="250" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
		</footer>
		</div>
		</body>
</html>