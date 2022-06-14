<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
    $s= ( empty($_GET['serie']) ) ? NULL : $_GET['serie'];
    $n= ( empty($_GET['nombre']) ) ? NULL : $_GET['nombre'];
    $m=  ( empty($_GET['marca'])  ) ? NULL : $_GET['marca'];
    $c= ( empty($_GET['costo']) ) ? NULL : $_GET['costo'];
    $e= ( empty($_GET['existencia']) ) ? NULL : $_GET['existencia'];
    ?>
		<div>
			<form action="sp_editar.php" method="post">
				<table border="1">
					<tr>
						<td>Insertar</td>
						<td><input type="text" name="serie" id="" style="visibilityi:hidder" value="<?=$s?>"></td>
					</tr>					
					
					<tr>
						<td>Nombre</td>
						<td><input type="text" name="nombre"id="" value="<?=$n?>"></td>
					</tr>
					<tr>
						<td>Marca</td>
						<td><input type="text" name="marca"id="" value="<?=$m?>"></td>
					</tr>
					<tr>
						<td>Costo</td>
						<td><input type="text" name="costo"id="" value="<?=$c?>"></td>
					</tr>
					<tr>
						<td>Existencia</td>
						<td><input type="text" name="existencia" id="" value="<?=$e?>"></td>
					</tr>
					<tr>
						<td><input type="submit" value="Actualizar"></td>
						<td><a href="index.php">Cancelar</a></td>
					</tr>
				</table>
			</form>
		</div>
</body>
</html>