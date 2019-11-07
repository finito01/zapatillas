<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Document</title>
<link
	href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap"
	rel="stylesheet">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/form.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">Ingreso de productos</h3>
			</div>
			<div class="col-md-12">
				<form class="form-group" accept-charset="utf-8"
					action="save_products.php" method="post"
					enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label">MODELO</label> <input type="text"
							class="form-control" placeholder="modelo" required=""
							name="modelo" id="modelo"></input>
					</div>
					<div class="form-group">
						<label class="control-label">PRECIO</label> <input type="text"
							class="form-control" placeholder="precio" required=""
							name="precio" id="precio"></input>
					</div>
					<div class="form-group">
					<label class="control-label">OBSERVACIÓN</label>
					<textarea class="form-control" rows="3" placeholder="observación" name="observacion" id="observacion"></textarea>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>