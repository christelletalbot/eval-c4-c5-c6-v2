@extends('layout')

@section('contenu')
<section>

	<div class="container">
		<h2>Liste de tous les articles</h2>
		
		@foreach($articles as $article)
			<a href=""><option id="{{$article->id}}"> {{ $article->name}} </option></a>
			<input type="button" value="Supprimer" onclick="history.go(-1)"/>
			<input type="button" value="Créer" onclick="histroy.go(-1)" />
		@endforeach	
		
	</div>	

</section>

@stop

