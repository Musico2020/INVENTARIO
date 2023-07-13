<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>

<div id= "content">
        <section>
        <div class="col-md-12 ">
<div class="row">
<div class="col-md-12 >
<center><h1>Productos</h1></center>
<a href="producto_agregar.php"><input  class="btn btn-primary" type="button" value="Agregar producto"></a>
</div>
<div class="col-md-12">
<div class="table-responsive">


<table class="table table-striped table-hover">
<thead>

<tr>
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

</thead>

<tbody>

<?php
$categoria = $_GET['categoria'];
extract($_POST);
$sql = "SELECT * FROM productos WHERE categorias = '$categoria'";
$productos = mysqli_query($conexion, $sql);
if($productos -> num_rows > 0){
foreach($productos as $key => $row ){




?>

<tr>
<td <?php echo  'class="'.$row['categorias'] .'"'; ?>><?php echo $row['id']; ?></td>
<td><?php echo $row['factura']; ?></td>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['descripcion']; ?></td>
<td><?php echo $row['color']; ?></td>

<td><?php echo $row['proveedor']; ?></td>
<td><?php echo $row['marca']; ?></td>
<td><?php echo $row['fecha_ent']; ?></td>
<td><?php echo $row['fecha_sal']; ?></td>
<td><?php echo $row['cantidad_ent']; ?></td>
<td><?php echo $row['cantidad_sal']; ?></td>
<td><?php echo ( $row['cantidad_ent'] -  $row['cantidad_sal']);?></td>
<td><?php echo $row['unidad_med']; ?></td>
<td>$<?php echo $row['precio']; ?></td>
<td>$<?php echo ( $row['cantidad_ent'] *  $row['precio']);?></td>


<td><?php echo $row['categorias']; ?></td>
<td><img width="50" src="data:image;base64,<?php echo base64_encode($row['imagen']);  ?>" ></td>

<td class="text-center">
<div class="btn-group">
  <a  class= "btn btn-info btn-xs"  href="producto_editar.php?id=<?php echo $row['id']?>">Editar</a><br>
  <a>|</a>
  <a class= "btn btn-danger btn-xs" href="producto_eliminar.php?id=<?php echo $row['id']?>">Eliminar</a>
</td>
</div>
</tr>

<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="4">No existe registros</td>
    </tr>

    <?php
}?>
</tbody>

</table>
</div>
</div>
</div>
</div>
        </section>


        <section>
            <div class= "container">
                <div class= "row">
                    <div class= "col-lg-9">
            </div>
        </section>
    </div>
    <?php require '../../includes/_footer.php' ?>
</html>