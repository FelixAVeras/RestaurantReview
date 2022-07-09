<?php

include_once './Config/connection.php'; 

$RestaurantName = '';
$RestaurantAddress = '';

$RestaurantName_error = '';
$RestaurantAddress_error = '';

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$input_name = trim($_POST['RestaurantName']);

	if(empty($input_name)) {
		$RestaurantName_error = 'Please enter a name.';
	} else {
		$RestaurantName = $input_name;
	}

	$input_address = trim($_POST["RestaurantAddress"]);
    
    if(empty($input_address)){
        $RestaurantAddress_error = "Please enter an address.";     
    } else{
        $RestaurantAddress = $input_address;
    }


    if (empty($RestaurantName_error) && empty($RestaurantAddress_error)) {
    	$query = "INSERT INTO restaurant(RestaurantName, RestaurantAddress) VALUES(?,?)";

    	if ($statemet = $connection->prepare($query)) {
    		$statemet->bind_param('ss', $param_name, $param_address);

    		$param_name = $RestaurantName;
    		$param_address = $RestaurantAddress;

    		if($statemet->execute()){
                header("location: home.php");
                exit();
            } else{
                echo "Oops! Algo salio mal, intente de nuevo mas tarde.";
            }
    	}

    	$statemet->close();
    }

    //$connection->close();
}

?>

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
<?php
include("partials/navbar.php");
?>

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
			<?php 

			include_once './Config/connection.php';

			$query = "SELECT * FROM restaurant";

			if ($result = $connection->query($query)) {
				if ($result->num_rows > 0) {
					while($row = $result->fetch_array()){
						echo '<div class="col-12 col-md-4">';
						echo '<div class="card mb-3">';
				  		echo '<div class="card-body">';
			        	echo '<h5 class="card-title">'. $row["RestaurantName"] .'</h5>';
			        	echo '<p class="card-text">'. $row["RestaurantAddress"] .'</p>';
			      		echo '</div>';
						echo '</div>';
						echo '</div>';	
					}

					$result->free();
				} else {
					echo '<h2 class="text-center text-danger">No hay Restaurates por el momento...</h2>';
				}
			} else {
				echo '<h2 class="text-center text-danger">Error Inesperado... Intente mas tarde.</h2>';
			}

			$connection->close();
			?>
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
	        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
	        	<div class="form-group">
	        		<label for="RestaurantName" class="control-label">Nombre del Local</label>
	        		<input type="text" class="form-control" name="RestaurantName">
	        	</div>

	        	<!-- <div class="form-group">
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
	        	</div> -->

	        	<div class="form-group">
	        		<label for="RestaurantAddress" class="control-label">Direccion</label>
	        		<div class="input-group mb-3">
					  <input type="text" class="form-control" name="RestaurantAddress" placeholder="Buscar Restaurante">
					  <div class="input-group-append">
					    <button class="btn btn-secondary" type="button" id="button-addon2">Buscar en el Mapa</button>
					  </div>
					</div>
	        	</div>

	        	<!-- <div class="form-group">
	        		<label for="rating" class="control-label">Calificacion</label>
	        		<input type="text" class="form-control" name="rating">
	        	</div>

	        	<div class="form-group">
	        		<label for="comment" class="control-label">Comentario</label>
	        		<textarea name="" id="" rows="8" class="form-control" name="comment"></textarea>
	        	</div> -->

	        	<div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
			        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
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