<?php
error_reporting(0);
session_start();
$actualsesion = $_SESSION['correo'];

if($actualsesion == null || $actualsesion == ''){

    echo 'acceso denegado';
    die();
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>INVENTARIO</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">INVENTARIO COOMULTRAHA</div>
</a>
<hr class="sidebar-divider my-0">
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="material-icons-outlined"></i>
        <span>Dashboard</span></a>
</li>
<center>
<hr class="sidebar-divider">
<div class="sidebar-heading">
    ADMINISTRADOR
</div>

<li class="boton">
    <a class="btn btn-success" href="index.php"  style=width:90%; >
  
        <span>Productos</span>
    </a>
</li><br>
<li class="boton">
    <a class="btn btn-success" href="categorias.php" style=width:90%;>
        
        <span>  Categorias</span>
    </a>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">
    PERFIL
</div>
<li class="boton">
    <a class="btn btn-success" href="usuariosindex.php" style=width:90%; >
        
        <span>Información usuario</span>
    </a>
</li><br><br>
<li class="boton">
    <a class="btn btn-warning" href="conexport.php" style=width:90%;>
    
        <span>Imforme</span></a>
        
</li><br><br>
<li class="boton">
    <a class="btn btn-warning" href="conexport.php" style=width:90%;>
    
        <span>Imforme Facturas</span></a>
        
</li><br><br>

</center>


<hr class="sidebar-divider d-none d-md-block">
<center>
<?php 

    date_default_timezone_set('America/Mexico_City');

    $fechaActual = date("d-m-Y");
    $horaActual = date("h:i:s");

    echo "$fechaActual $horaActual " ;


    # El resultado es: La fecha es: 11-02-2023 y la hora es 06:25:06

 ?></center>
 
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0"></button>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<li class="boton">
    <a class="btn btn-danger" href="../../includes/_sesion/cerrarSesion.php" style=width:90%; >
    
        <span>Salir</span></a>
        
</li></center>
</ul>

<!-- EMPIEZA EL NAVBAR -->
       <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
                <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $actualsesion?> </span>
                               
                            </a>
                        </li>
                    </ul>
                </nav>

             
