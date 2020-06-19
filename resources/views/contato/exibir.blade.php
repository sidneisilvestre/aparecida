@extends('template_home',['title'=>"detalhes do Contato $contato->nome"])
@section('conteudo')
		<h1 id="conteudo">Contato - {{ $contato->nome }}</h1>
		<div class="container-fluid">
						<strong>Telefone:</strong> {{ $contato->telefone }}
				</div>
				<div class="container-fluid">
						<strong>E-mail:</strong> {{ $contato->email }}
				</div>
				<div class="container-fluid">
						<strong>Mensagem:</strong> {{ $contato->msg }}
				</div>
						<div class="container-fluid">
<form action="{{ route("contato.destroy",[$contato->id]) }}" method="post">
@csrf
@method("delete")
<button type="submit" class="btn btn-danger" title="Excluir Contato em definitivo">Excluir</button>
</form>
		</div>
				
		
		@endsection
		