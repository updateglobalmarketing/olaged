<?php include "modulos/conexion.php"; ?>
<?php include "modulos/verificar.php"; ?>
<?php
$cod_categoria	= $_REQUEST['cod_categoria'];
if (isset($_REQUEST['proceso'])) {
	$proceso = $_POST['proceso'];
} else {
	$proceso = "";
}
if($proceso == ""){
	$consultaCategoria = "SELECT * FROM portafolio_categorias WHERE cod_categoria='$cod_categoria'";
	$ejecutarCategoria = mysqli_query($enlaces,$consultaCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
	$filaCat = mysqli_fetch_array($ejecutarCategoria);
	$cod_categoria 	= $filaCat['cod_categoria'];
	$categoria 		= htmlspecialchars(utf8_encode($filaCat['categoria']));
	$orden	 		= $filaCat['orden'];
	$estado 		= $filaCat['estado'];
}
	
if($proceso=="Actualizar"){	
	$cod_categoria			= $_POST['cod_categoria'];
	$categoria				= mysqli_real_escape_string($enlaces, utf8_decode($_POST['categoria']));
	$orden					= $_POST['orden'];
	$estado					= $_POST['estado'];
	$actualizarCategoria	= "UPDATE portafolio_categorias SET cod_categoria='$cod_categoria', categoria='$categoria', orden='$orden', estado='$estado' WHERE cod_categoria='$cod_categoria'";
	$resultadoActualizar = mysqli_query($enlaces,$actualizarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
	
	header("Location:portafolio-categorias.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("includes/head.php") ?>
    <script type="text/javascript" src="js/rutinas.js"></script>
	<script>
		function Validar(){
			if(document.fcms.categoria.value==""){
				alert("Debes ingresar un nombre a la categoria");
				document.fcms.categoria.focus();
				return;	
			}
			if(document.fcms.orden.value==""){
				alert("Debe asignar un orden");
				document.fcms.orden.focus();
				return;
			}
			document.fcms.action = "portafolio-categorias-edit.php";
			document.fcms.proceso.value="Actualizar";
			document.fcms.submit();
		}	
		function Imagen(codigo){
			url = "agregar-foto.php?id=" + codigo;
			AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
		}
		function soloNumeros(e) 
		{ 
			var key = window.Event ? e.which : e.keyCode 
			return ((key >= 48 && key <= 57) || (key==8)) 
		}
	</script>
</head>
<body>
	<div id="loading">
		<div>
			<div></div>
		    <div></div>
		    <div></div>
		</div>
	</div>
	<div id="wrapper">
        <?php include("includes/header.php") ?>
		<div id="content" class="clearfix">
	        <div class="header">
				<h1 class="page-title">Portafolio</h1>
			</div>
			<div class="breadcrumbs">
				<i class="fa fa-folder"></i> Portafolio <i class="fa fa-caret-right"></i> Categor&iacute;as <i class="fa fa-caret-right"></i> Editar Categor&iacute;as
			</div>
			<div class="wrp clearfix">
            	<?php $page = "portafolio"; include("includes/menu-portafolio.php"); ?>
                <div class="fluid">
					<div class="widget grid12">
						<div class="widget-header">
							<div class="widget-title">
								<i class="fa fa-th"></i> <strong>Editar Categor&iacute;a</strong>
							</div>
						</div>
						<div class="widget-content">
                            <form class="fcms" name="fcms" method="post" action="">
                            	<div class="form-int">
                                	<div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
											<label>Categor&iacute;a: *</label>
                                        </div>
                                    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<input name="categoria" type="text" id="categoria" value="<?php echo $categoria; ?>" />
                                        </div>
                                    </div>
									<div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Orden: *</label>
                                        </div>
                                    	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                                        	<input name="orden" type="text" id="orden" value="<?php echo $orden; ?>" onKeyPress="return soloNumeros(event)" />
                                    	</div>
                                    </div>
									<div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Estado:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<div class="custom-input">
                            	            	<input <?php if (!(strcmp($estado,"Activo"))) {echo "checked=\"checked\"";} ?> type="radio" name="estado" value="Activo" id="activo" checked="checked"><label for="activo">Activo</label>
												<input <?php if (!(strcmp($estado,"Inactivo"))) {echo "checked=\"checked\"";} ?> type="radio" name="estado" value="Inactivo" id="inactivo"><label for="inactivo">Inactivo</label>
											</div>
                                        </div>
									</div>
                                    <div class="separador-20"></div>
									<div class="row">
                                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="btn-group">
                                            	<a href="portafolio-categorias.php" class="btn btn-pink"><i class="fa fa-times"></i> Cancelar</a>
                                                <button class="btn btn-green" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Editar Categoria</button>
                                                <input type="hidden" name="proceso">
								                <input type="hidden" name="cod_categoria" value="<?php echo $cod_categoria; ?>">
											</div>
										</div>
									</div>
                				</div>
							</form>
                            <label><span>Los campos con ( <strong>*</strong> ) son obligatorios.</span></label>
						</div>
                    </div>
				</div>
			</div>
		</div>
		<?php include("includes/footer.php") ?>
	</div>
</body>
</html>