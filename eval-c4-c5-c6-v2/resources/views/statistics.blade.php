@extends('layout')

@section('contenu')
	<div class="container">
		<h2>Statistiques</h2>
			
					
			@foreach($movements as $movement)
				<option id="{{$movement->id}}"> {{ $movement->purchase_id}}, {{ $movement->sale_id}}, {{ $movement->article_id }}</option>
			@endforeach	

		

	</div>	
	
@stop
