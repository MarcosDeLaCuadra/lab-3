<?php
	require_once('clases/producto.php');
?>
<html>
<head>
	<script>
	
		function Borrar(id){

			alert(id);
		}
	
	</script>
	<title>Ejemplo de ALTA-LISTADO - con archivos -</title>

	<meta charset="UTF-8">
		
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
	<a class="btn btn-info" href="index.html">Menu principal</a>

	<div class="container">
		<div class="page-header">
			<h1>Ejemplos de Grilla</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>Listado de PRODUCTOS</h1>

<?php 

//$ArrayDeProductos = Producto::TraerTodosLosProductos();
 $ArrayDeProductos = Producto::TraerTodosLosProductosBd();
 //var_dump($ArrayDeProductos);

echo "<table class='table'>
		<thead>
			<tr>
				<th>  COD. BARRA </th>
				<th>  NOMBRE     </th>
				<th>  FOTO       </th>
				<th> BORRAR </th>
			</tr> 
		</thead>";   	
		

	foreach ($ArrayDeProductos as $prod){
		var_dump($prod);
		echo " 	<tr>
					<td>".$prod->GetCodBarra()."</td>
					<td>".$prod->GetNombre()."</td>
					<td><img src='archivos/".$prod->GetPathFoto()."' width='100px' height='100px'/></td>
					<td> <input type='button' value='borrar'  onclick='Borrar(1)' ><td>
				</tr>";
	}	
echo "</table>";		
?>
		</div>
	</div>
</body>
</html>