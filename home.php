<?php include('./Config/connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Restaurant Reviews - Lo que dice la gente</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">Restaurant Reviews</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="#">Inicio</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
	          Categorias
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	        	<a class="dropdown-item" href="#">Carnes</a>
				<a class="dropdown-item" href="#">Hamburguesas</a>
				<a class="dropdown-item" href="#">Sandwiches</a>
				<a class="dropdown-item" href="#">Pollo</a>
				<a class="dropdown-item" href="#">Mariscos</a>
				<a class="dropdown-item" href="#">Criolla</a>
				<a class="dropdown-item" href="#">Bares</a>
				<a class="dropdown-item" href="#">Reposteria</a>
				<a class="dropdown-item" href="#">Pizzerias</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>

	<div class="container custom-container">
		<h2 class="text-center mb-4">Restaurant Reviews</h2>

		<div class="row mb-2">
			<div class="col-12 col-md-4">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Buscar Restaurante" aria-label="Recipient's username" aria-describedby="button-addon2">
				  <div class="input-group-append">
				    <button class="btn btn-secondary" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
				  </div>
				</div>
			</div>
			<div class="col-12 col-md-8">
				<button class="btn btn-success float-right" data-toggle="modal" data-target="#newReview">
					<i class="bi bi-plus-square"></i> &nbsp; Nueva Reseña
				</button>
			</div>
		</div>

		<hr>

		<div class="row mt-2 mb-4">
			<div class="col-12 col-md-4">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="https://via.placeholder.com/200x390" class="img-fluid" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Card title</h5>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="https://via.placeholder.com/200x390" class="img-fluid" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Card title</h5>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="https://via.placeholder.com/200x390" class="img-fluid" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">Card title</h5>
				        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>	

	</div>

	<div class="modal fade" id="newReview" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Nueva Reseña</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="">
	        	<div class="form-group">
	        		<label for="RestaurantName" class="control-label">Nombre del Local</label>
	        		<input type="text" class="form-control" name="RestaurantName">
	        	</div>

	        	<div class="form-group">
	        		<label for="RestaurantCategory" class="control-label">Categoria</label>
	        		<select name="" id="" class="form-control" name="RestaurantCategory">
	        			<option value="Carnes">Carnes</option>
	        			<option value="Hamburguesas">Hamburguesas</option>
	        			<option value="Sandwiches">Sandwiches</option>
	        			<option value="Pollo">Pollo</option>
	        			<option value="Mariscos">Mariscos</option>
	        			<option value="Criolla">Criolla</option>
	        			<option value="Bares">Bares</option>
	        			<option value="Reposteria">Reposteria</option>
	        			<option value="Pizzerias">Pizzerias</option>
	        		</select>
	        	</div>

	        	<div class="form-group">
	        		<label for="RestaurantAddress" class="control-label">Direccion</label>
	        		<div class="input-group mb-3">
					  <input type="text" class="form-control" name="RestaurantAddress" placeholder="Buscar Restaurante">
					  <div class="input-group-append">
					    <button class="btn btn-secondary" type="button" id="button-addon2">Buscar en el Mapa</button>
					  </div>
					</div>
	        	</div>

	        	<div class="form-group">
	        		<label for="rating" class="control-label">Calificacion</label>
	        		<input type="text" class="form-control" name="rating">
	        	</div>

	        	<div class="form-group">
	        		<label for="comment" class="control-label">Comentario</label>
	        		<textarea name="" id="" rows="8" class="form-control" name="comment"></textarea>
	        	</div>

	        	<div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
			        <button type="button" class="btn btn-primary">Guardar Cambios</button>
			    </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Scripts -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>