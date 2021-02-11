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

	<div class="container cont animate__animated animate__zoomIn">
		<br><br><br><br>
		<i>Agregar Articulo</i>
		<button type="button" class="btn text-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus-circle"></i></button>
		<hr>
		<br>
		<h6>List. Articulos</h6>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<div class="table table-responsive">
					<table class="table">
						<thead>
							<tr class="bg-light text-dark">
								<th scope="col">ID</th>
								<th scope="col">Articulo</th>
								<th scope="col">Cantidad</th>
								<th scope="col">edit</th>
								<th scope="col">delete</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php foreach ($articles as $row) : ?>
							<tr>
								<td class="text-success bg-light"><i class="fas fa-key text-warning"></i> <?php echo $row->id ?></td>
								<td class="text-success bg-light"><i class="fas fa-box-open"></i> <?php echo $row->Articulo ?></td>
								<td class="text-success bg-light"><?php echo $row->Cantidad ?></td>
								<td>
									<a href="<?php echo base_url() . "/select/$row->id" ?>">
										<i class="far fa-edit text-white btn btn-info"></i>
									</a>
								</td>
								<td>
									<a href="<?php echo base_url() . "/delete/$row->id" ?>">
										<i class="fas fa-trash text-light btn btn-danger"></i>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<footer class="my-5 pt-5 text-muted text-center text-small">
			<br><br><br><br><br><br>
			<p class="mb-1">&copy; Copyright 2021 </p>
		</footer>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content animate__animated animate__zoomIn">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Nuevo articulo</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url() . '/insert' ?>">
						<div class="mb-3">
							<label for="articulo" class="col-form-label">Articulo:</label>
							<input type="text" class="form-control" name="articulo" required>
						</div>
						<div class="mb-3">
							<label for="cantidad" class="col-form-label">Cantidad:</label>
							<input type="number" class="form-control" name="cantidad" required>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar <i class="fas fa-times-circle"></i></button>
							<button type="submit" class="btn btn-success">Save <i class="fas fa-save"></i></button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<script>
		var exampleModal = document.getElementById('exampleModal')
		exampleModal.addEventListener('show.bs.modal', function(event) {
			// Button that triggered the modal
			var button = event.relatedTarget
			// Extract info from data-bs-* attributes
			var recipient = button.getAttribute('data-bs-whatever')
			// If necessary, you could initiate an AJAX request here
			// and then do the updating in a callback.
			//
			// Update the modal's content.
			var modalTitle = exampleModal.querySelector('.modal-title')
			var modalBodyInput = exampleModal.querySelector('.modal-body input')

			// modalTitle.textContent = 'New message to ' + recipient
			// modalBodyInput.value = recipient
		})
	</script>
	<script>
		let msg = '<?php echo $msg ?>'
		if (msg == 1) {
			swal('', 'Agregado con Exito!', 'success')
		} else if (msg == 2) {
			swal('', 'OOp. Algo salio mal!', 'error')

		} else if (msg == 3) {
			swal('', 'Actualizado con Exito!', 'success')

		} else if (msg == 4) {
			swal('', 'Eroro!, no se actualizo', 'error')

		} else if (msg == 5) {
			swal('', 'Dato eliminado con Exito!', 'success')

		} else if (msg == 6) {
			swal('', 'Error!, no se elimino', 'error')

		}
	</script>
</body>

</html>