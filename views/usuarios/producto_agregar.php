<!DOCTYPE html>
<html lang="es-MX">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
<center><h1>Registro de productos</h1></center><br>
<div class="container">
<div class="col-sm-16 offset-3 mt-10">
<form action="../../includes/_functions.php" method="POST"  enctype="multipart/form-data">

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="descripcion" class="form-label">Descripcion *</label>
<input type="text"  id="descripcion" name="descripcion" class="form-control" required >
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="marca" class="form-label">Marca *</label>
<input type="text"  id="marca" name="marca" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="proveedor" class="form-label">Proveedor *</label>
<input type="text"  id="proveedor" name="proveedor" class="form-control" required >
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="fecha_ent" class="form-label">fecha de entrada *</label>
<input type="date"  id="fecha_ent" name="fecha_ent" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="fecha_sal" class="form-label">Fecha de salida *</label>
<input type="date"  id="fecha_sal" name="fecha_sal" class="form-control" required >
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad_ent" class="form-label">Cantidad Entrante *</label>
<input type="number"  id="cantidad_ent" name="cantidad_ent" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad_sal" class="form-label">Cantidad Saliente *</label>
<input type="number"  id="cantidad_sal" name="cantidad_sal" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="color" class="form-label">Color *</label>
<input type="text"  id="color" name="color" class="form-control" required>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">Precio *</label>
<input type="number"  id="precio" name="precio" class="form-control" required>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="factura" class="form-label">Numero de Factura*</label>
<input type="factura"  id="factura" name="factura" class="form-control" required>
</div>
</div>
</div>

<div class="col-sm-12">
<div class="mb-3">
<label for="unidad_med" class="form-label">Unidad de medida</label>
<select name="unidad_med" id="unidad_med" class="form-control" required>
<option value="metros">Metros</option>
    <option value="mentimetros">Centimetros</option>
    <option value="litros">Litros</option>
    <option value="kilos">Kilos</option>
    <option value="Gramos">Gramos</option>
    <option value="unidad">Unidad</option>
    </select>  
</div>


<div class="row">
    <div class="col-sm-12">
    <div class="mb-3">
<label for="categorias" class="form-label">Categorias *</label>
<select name="categorias" id="categorias" class="form-control" required>
<option value="electronico">electronico</option>
    <option value="ferrea">ferrea</option>
    <option value="jardineria">jardineria</option>
    <option value="almacen">almacen</option>
    <option value="pesticidas">pesticidas</option>
    <option value="dotacion">dotacion</option>
    <option value="herramientas">herramientas</option>
    <option value="equipos">Equipos</option>
    <option value="otros">Otros</option>
  </select>
    </div>   
</div>
</div>
<div class="mb-3">
<div class="row">
        <div class="col-sm-12">
            <div class="form-group">
                <input type="file" class="form-control-file" name="foto" id="foto" required>
            </div>
        </div>
    </div>
</div>

<div class="mb-3">
<input type="hidden" name="accion" value="insertar_productos">
<button type="submit" class="btn btn-success">Guardar</button>
</div>
</form>
</div>
</div>
</body>
<?php require '../../../includes/_footer.php' ?>
</html>