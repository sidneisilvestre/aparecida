@extends('template_home',['title'=>"Lista de  contatos"])
@section('conteudo')
		<h1 id="conteudo">Lista de Mensagens</h1>

		<ul class="list-unstyled">
		@forelse($contatos as $contato)
		<li><a href="{{ route("contato.show",[$contato->id]) }}" title="Veja detalhes sobre esse contato">{{ $contato->nome }}</a></li>
		@empty
		<li>Não existem contatos cadastrados</li>
		@endforelse
		</ul>
		@endsection
	