<?php 
 class helpers{
    public static function css(){
        echo('
        <!-- Icono de la pagina-->
        <link rel="icon" type="image/png" href="../resources/img/mexerica1.png" />
        <link rel="stylesheet" href="../resources/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="../resources/css/main.css">
        <link href="../resources/css/fonts&icons.css" rel="stylesheet" media="all">
        <link href="../resources/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="../resources/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="../resources/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">  
        ');
    }

    public static function js(){
        echo('
        <script src="../resources/js/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
        <script src="../resources/js/popper.min.js" crossorigin="anonymous"></script>
        <script src="../resources/js/bootstrap.min.js" crossorigin="anonymous"></script>
        ');
    }
    
    public static function headerTemplate(){
        echo('
        <!doctype html>
        <html lang="es">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Bootstrap CSS -->
            
        
            <title>Mandarino</title>
          </head>
          <nav class="navbar navbar-expand-lg navbar-dark menucolor">
              <a class="navbar-brand" href="#">Mandarino</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-end">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="ventas.php">
                      Ventas
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="compras.php" >
                      Compras
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="empleados.php">Empleados</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="inventario.php">Inventario</a>
                  </li>
                </ul>
            </div>
        </nav>
        ');
    }

   
    
 }
?>