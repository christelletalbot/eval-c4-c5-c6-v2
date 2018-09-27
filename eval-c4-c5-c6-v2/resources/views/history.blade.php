@extends('layout')

@section('contenu')
<section>

	<div class="container">
		<h2>Historique</h2>
		
			@foreach($movements as $movement)
				<option id="{{$movement->id}}"> {{ $movement->name }}, {{ $movement->article_id}}, {{ $movement->quantity}}, {{ $movement->date_time }}</option>
			@endforeach	

		

	</div>	

</section>


@stop


