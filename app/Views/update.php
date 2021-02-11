<?php
$id = $article[0]['id'];
$articulo = $article[0]['Articulo'];
$cantidad = $article[0]['Cantidad'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>:: DB Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<script src="https://kit.fontawesome.com/0ee106494a.js" crossorigin="anonymous"></script>


</head>

<body>
	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
			<div class="container animate__animated animate__zoomIn">
				<h2><i class="fas fa-database text-warning"></i> :: DB Admin</h2>
			</div>
		</nav>
	</header>

	<div class="container animate__animated animate__zoomIn">
		<br><br><br><br>
		<a href="<?php echo base_url() . '/' ?>">
			<i class="fas fa-backspace btn"> Regresar</i>
		</a>
		<hr>
		<br>
		<h6>Actualizar articulo</h6>
		<br>

		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Datos del articulo # <?php echo $id ?></h5>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url() . '/update' ?>">
						<input type="text" name="id" value="<?php echo $id ?>" hidden>
						<div class="mb-3">
							<label for="articulo" class="col-form-label">Articulo:</label>
							<input type="text" class="form-control" name="articulo" value="<?php echo $articulo ?>" required>
						</div>
						<div class="mb-3">
							<label for="cantidad" class="col-form-label">Cantidad:</label>
							<input type="number" class="form-control" name="cantidad" value="<?php echo $cantidad ?>" required>
						</div>
						<div class="modal-footer">
							<a class="btn btn-danger" href="<?php echo base_url() . '/' ?>">Cancelar <i class="fas fa-times-circle"></i></a>
							<button type="submit" class="btn btn-success">Save <i class="fas fa-save"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>


		<footer class="my-5 pt-5 text-muted text-center text-small">
			<p class="mb-1">&copy; Copyright 2021 </p>
		</footer>
	</div>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>