<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<title>Reporte</title>
		
	</head>
	<body>
		
		<div class="container">
			<div class="row">
				<div class="col-sm-10">
					<center>
						<h4>ELEVADORES SCHINDLER
							<p>SEGURIDAD, HIGIENE Y  MEDIO AMBIENTE
								<p>REPORTE Y ELIMINACION DE CONDICIONES INSEGURAS
								</h4>
							</center>
						</div>
						<div class="col-sm-2">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<form class="form-group">
				<div class="form-group">
					<label id="date">Fecha: <label>
						<input type="date" class="form-control">
					</div>
					<br>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Encontrada por</span>
						</div>
						<input type="text" id="encontrada_por" name="encontrada_por" class="form-control" value="SEGURIDAD DE SCHINDLER">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<div class="input-group mb-9">
								<div class="input-group-prepend">
									<span class="input-group-text">Area: </span>
								</div>
								<select class="form-control">
									<option>SEGURIDAD</option>
								</select>
							</div>
						</div>
						<div class="form-group col-md-6">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">No. Equipo</span>
								</div>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Sucursal:</span>
							</div>
							<select class="form-control">
								<option>HERIBERTO FRIAS 1307</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Dirección:</span>
							</div>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Instalación:</span>
							</div>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Resuelto por</span>
							</div>
							<input type="text" class="form-control">
						</div>
					</div>
					<br>
					<div class="form-check-inline">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="">Técnico
						</label>
					</div>
					<div class="form-check-inline">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value="">Supervisor
						</label>
					</div>
					<div class="form-check-inline">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input">Seguridad
						</label>
					</div>
					
					</form>
					
				</div>
				<div class="container">
					<div class="form-row">
						<div class="col-sm-6">
							<label for="condition">Descripción de la Condición Insegura:</label>
							<textarea class="form-control" rows="5" id="condition"></textarea>
						</div>
						<div class="form-group col-sm-6">
							<label>Fotografía de la Condición Insegura:</label>
							<br>
							<input type="file" class="d-print-none form-control-file border" name="file" id="img_before">
							<img src="" height="200" alt="Image preview...">
						</div>
					</div>
					
				</div>
				<div class="container">
					<div class="form-row">
						<div class="col-sm-6">
							<label for="after">Eliminación de la Condición Insegura:</label>
							<label for="after">Acciones tomadas</label>
							<textarea class="form-control" rows="5" id="after"></textarea>
						</div>
						<div class="form-group col-sm-6">
							<label>Fotografía de la Condición Insegura Corregida</label>
							<br>
							<input type="file" class="d-print-none form-control-file border" name="file" id="img_after" >
							<img src="" height="200" alt="Image preview..."> 
						</div>
					</div>
					
					<div class="form-row">
						<div class="col-sm-6">
							<label>¿La Condición Insegura fue Resuelta?</label>
						</div>
						<div class="col-sm-3">
							<label class="form-check-label">
								<input type="radio" name="resuelto" class="form-check-input">Si
							</label>
							
						</div>
						<div class="col-sm-3">
							<label class="form-check-label">
								<input type="radio" name="resuelto" class="form-check-input">No
							</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-sm-6">
							<label>¿Requiere Inversión?</label>
						</div>
						<div class="col-sm-3">
							<label class="form-check-label">
								<input type="radio" name="inversion" class="form-check-input">Si
							</label>
							
						</div>
						<div class="col-sm-3">
							<label class="form-check-label">
								<input type="radio" name="inversion" class="form-check-input">No
							</label>
						</div>
						<p>Nota : Para este caso el supervisor deberá subir el tema al área de seguridad
						</div>
						
					</div>
					<div class="container">
						<div class="form-row">
							<div class="col-sm-6">
								<textarea class="form-control" rows="5" ></textarea>
								<center><label>Vo.Bo. Supervisor</label></center>
							</div>
							<div class="col-sm-6">
								<textarea class="form-control" rows="5" ></textarea>
								<center><label>Vo.Bo. Seguridad</label></center>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<label>V-0</label>
							</div>
							<div class="col-sm-6">
								<label id="num_formato">MEX-DG-SEG-F-018</label>
							</div>
						</div>
					</div>
					
					<div class="row text-center">
						<div class="col-6">
							<button class="btn btn-info">
								Imprimir
							</button>
						</div>
						<div class="col-6">
							<button class="btn btn-success">
								Guardar
							</button>
						</div>
					</div>
				</body>
				<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
				<script>
					$(document).ready(iniciar)
					function iniciar(){
					$("#img_before").change(previewFile);
					$("#img_after").change(previewFile);
					
					}
					function previewFile() {
					var preview = document.querySelector('img');
					var file    = document.querySelector('input[type=file]').files[0];
					var reader  = new FileReader();
					
					reader.onloadend = function () {
					preview.src = reader.result;
					}
					
					if (file) {
					reader.readAsDataURL(file);
					} else {
					preview.src = "";
					}
					}
					
				</script>
			</html>																																																																																																							