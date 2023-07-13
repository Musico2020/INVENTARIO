<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
<div class="row">
        <div class="col-sm-4">
<a class="catelectronico" href="productosCategoria.php?categoria=<?php echo 'electronico'?>">
electronica
</a>
        </div>
<div class="col-sm-4">
<a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'ferrea'?>">
Ferrea
</a>
</div>  
<div class="col-sm-4">
<a class="catfarmaceutico" href="productosCategoria.php?categoria=<?php echo 'jardineria'?>">
Jardineria
</a>
</div>  
</div>
<div class="row">
<div class="col-sm-4">
<a class="catjugueteria" href="productosCategoria.php?categoria=<?php echo 'almacen'?>">
Almacen
</a>
</div>

<div class="col-sm-4">
<a class="catmascotas" href="productosCategoria.php?categoria=<?php echo 'pesticidas'?>">
Pesticidas
</a>
</div>
<div class="col-sm-4">
<a class="catautomovilstico" href="productosCategoria.php?categoria=<?php echo 'dotacion'?>">
Dotacion
</a>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<a class="catvestimenta" href="productosCategoria.php?categoria=<?php echo 'herramientas'?>">
Herramientas
</a>
</div>
<div class="col-sm-4">
<a class="cattelefonia" href="productosCategoria.php?categoria=<?php echo 'equipos'?>">
Equipos
</a>
</div>
<div class="col-sm-4">
<a class="catdeportes" href="productosCategoria.php?categoria=<?php echo 'otros'?>">
Otros
</a>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <input class="soon" type="button" value="Mas categorias proximamenente">
    </div>
</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>