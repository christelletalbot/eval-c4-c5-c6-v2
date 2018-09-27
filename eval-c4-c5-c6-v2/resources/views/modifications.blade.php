@extends('layout')

@section('contenu')
<section>

	<div class="container">
		<h2>Modicication de l'article :</h2>
		
			<form method="POST" action="{!! url('articles') !!}" accept-charset="UTF-8">
				<table>	

				{!! csrf_field() !!}

					<tr>
						<td>Nom de l'article</td>
						<td><input name="nom" type="text" id="name" /></td>
					</tr>
					<tr>
						<td>Quantité :</td>
						<td><input type="number" name="quantity" /></td>
					</tr>
					<tr>
						<td>Unité :</td>
						<td><input type="text" name="unit" /></td>
					</tr>
					<tr>
						<td>Catégorie :</td>
						<td><input type="text" name="category" /></td>
					</tr>
					<tr>
						<td><input type="submit" value="Envoyer !" /></td>
					</tr>
				</table>	
				
			</form>	
	</div>	

</section>

@stop



			
	