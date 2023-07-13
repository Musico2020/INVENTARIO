<?php
  
header("content-type: application/xls;charset=utf-8");
header("content-Disposition: attachment; filename= paciente.xls;charset=utf-8");
?>

<table id=“” class=“table table-striped”>
<th>Codigo</th>
<th>Numero de Factura</th>
<th>Nombre</th>
<th>Descripcion</th>
<th>Color</th>
<th>Proveedor</th>
<th>Marca</th>
<th>fecha de entrada</th>
<th>fecha de salida</th>
<th>Cantidad Entrante</th>
<th>Cantidad Salida</th>
<th>Cantidad Total</th>
<th>unidad de medida</th>
<th>Precio</th>
<th>Saldos</th>
<th>Cantegoria</th>
<th>Imagen</th>
<th>Acciones</th>




              

</tr>

<?php


$conexion = mysqli_connect ("localhost","root","","");
mysqli_select_db ($conexion, 'tienda');
mysqli_set_charset($conexion,'utf8');
$sql = 'SELECT * FROM productos';

$resultado = mysqli_query ($conexion, $sql) or die (mysql_error ());

$productos= array();

while( $rows = mysqli_fetch_assoc($resultado) ) {

$productos[] = $rows;

}

 
?>

<tbody>

<?php foreach($productos as $productos) { ?>

<tr>
<td><?php echo $productos ['id']; ?></td>
<td><?php echo $productos ['factura']; ?></td>
<td><?php echo $productos ['nombre']; ?></td>
<td><?php echo $productos ['descripcion']; ?></td>
<td><?php echo $productos ['color']; ?></td>
<td><?php echo $productos ['proveedor']; ?></td>
<td><?php echo $productos ['marca']; ?></td>
<td><?php echo $productos ['fecha_ent']; ?></td>
<td><?php echo $productos['fecha_sal']; ?></td>
<td><?php echo $productos ['cantidad_ent']; ?></td>
<td><?php echo $productos ['cantidad_sal']; ?></td>
<td><?php echo ( $productos['cantidad_ent'] -  $productos['cantidad_sal']);?></td>
<td><?php echo $productos ['unidad_med']; ?></td>
<td>$<?php echo $productos ['precio']; ?></td>
<td>$<?php echo ( $productos['cantidad_ent'] *  $productos['precio']);?></td>
<td><?php echo $productos ['categorias']; ?></td>



</tr>

<?php } ?>

</tbody>

</table>
