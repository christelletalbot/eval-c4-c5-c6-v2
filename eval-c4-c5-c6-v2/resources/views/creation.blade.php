@extends('layout')

@section('contenu')
<section>

	<div class="container">
		
		<!-- <form method="POST" action="{!! url('articles') !!}" accept-charset="UTF-8"> -->


			<h2>Création d'article :</h2>

			<form action="/creation" method="post">
				<table>
					{!! csrf_field() !!}
					<tr>
						<td>Nom de l'article :</td>
						<td><input type="text" name="name" type="text" /></td>
					</tr>
					<tr>
						<td>Quantité :</td>
						<td><input name="quantity" type="number"/></td>
					</tr>
					<tr>
						<td>Unité :</td>
						<td><input type="text" name="unit" /></td>
					</tr>
					<tr>
						<td>Catégories :</td>
						<td><input type="text" name="category" /></td>
					</tr>
					<tr>
						<td>Prix de vente :</td>
						<td><input type="number" name="sales_prices" /></td>
					</tr>
					<tr>
						<td><input type="submit" name="Envoyer" value="Ajouter" /></td>
					</tr>
				</table>

				<!-- <label>Nom de l'article :<input name="nom" type="text" id="name" /></label>
				<label>Quantité :<input type="number" name="quantity" /></label>
				<label>Unité :<input type="text" name="unit" /></label>
				<label>Catégorie :<input type="text" name="category" /></label>
				<input type="submit" value="Envoyer !" /> -->
		</form>	
	</div>	

</section>

@stop