@extends('template_home',['title'=>"Cadastrar Contato"])
@section('conteudo')
		<h1>Entre em   Contato</h1>
		<p class="text-justify">Envie um email para paroquiansaparecida.scs@gmail.com ou Preencha o formulário abaixo e nos encaminhe que entraremos em contato assim que possível.</p>
		<form action="{{ route("contato.store") }}" method="post">
		@csrf
		<div class="form-group">
		<label for="nome">Informe o seu Nome completo</label>
		<input name="nome" id="nome" type="text" autofocus required class="form-control" />
		</div>
		
		<div class="form-group">
		<label for="tel">Informe o Telefone com DDD</label>
		<input name="telefone" id="tel" type="text" required class="form-control" />
		</div>
		<div class="form-group">
		<label for="email">Informe o Email</label>
		<input name="email" id="email" type="text" required class="form-control" />
		</div>

		<div class="form-group">
		<label for="msg">Informe a mensagem</label>
		<input name="msg" id="msg" type="text" required class="form-control" />
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button>
				</form>
		@endsection
	