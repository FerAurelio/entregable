<?php
	require_once 'autoload.php';

	$actors = DB::getAllActors();

	$pageTitle = 'Listado de actores';
	require_once 'partials/head.php';
	require_once 'partials/navbar.php';
?>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<table class="table table-striped">
						<thead class="thead-dark">
			    			<tr>
								<th scope="col">Nombre y Apellido</th>
								<th scope="col">Rating</th>
								<th scope="col">Pelicula Favorita</th>
								</tr>
			  			</thead>
			  			<tbody>
							<?php foreach ($actors as $actor): ?>
								<tr>
									<th scope="row"><?=$actor->getFullName() ?></th>
									<td><?= $actor->getRating() ?></td>
									<td><?= $actor->getFavoriteMovieTitle() ?></td>
								</tr>
							<?php endforeach; ?>
			  			</tbody>
					</table>
				</div>
			</div>
		</div>

	</body>
</html>
