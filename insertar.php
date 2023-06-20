<?php include('bbdd.php'); ?>

<?php function imprimirFormulario($usuario, $saldo){

?>

<form action="" method="POST">
	<h1>Añadir<h1>
	<div class="mb-3">
		<label for="usuario" class="form-label">Usuario:</label>
		<input type="text" class="form-control" id="usuario" name="usuario" value="<?= $usuario; ?>" />
	</div>
	<div class="mb-3">
		<label for="saldo">Saldo:</label>
                <input type="number" id="saldo" name="saldo" value="<?= $saldo; ?>" />
	</div>
	<div>
		<button type="submit" name="boton">Confirmar</button>
	</div>
</form>
</div>
</section>
<?php
}
?>

<!DOCTYPE html>
<html lang="es">
        <head>
                <meta charset="utf-8" />
                <title>Añadir</title>
        </head>
        <body>
                <?php
			if(!isset($_REQUEST['boton'])){
				$usuario="";
				$saldo="";
				imprimirFormulario($usuario, $saldo);
			}else{
				$usuario=$_POST['usuario'];
				$saldo=$_POST['saldo'];

				$insertar = "INSERT INTO prueba (usuario, saldo) VALUES ('$usuario', '$saldo')";
				$query = mysqli_query($connection, $insertar);

				if($query){
					echo "Usuario insertado correctamente";
					echo '<a href="index.php" style="button">
                                                      <button>Volver a inicio</button>
                                              </a>';
				}else{
					echo "El usuario no se ha insertado";
                                        echo '<a href="index.php" style="button">
                                        	      <button>Volver a inicio</button>
                                              </a>';

				}
			}
		?>
        </body>
</html>
