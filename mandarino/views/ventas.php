<?php
      require('../core/helpers/helpers.php');
      Helpers:: css();
      Helpers::headerTemplate();
    ?>
  <body class="body">
        <h2 class="title1">
                Ventas   
        </h2>
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-6">
            <button class="btn btn-success btn-lg boton" data-toggle="modal" data-target="#agregar">
                <i class="fas fa-plus"></i>Agregar
            </button>
        </div>
    </div>
    <table class="table tableS">
        <thead class="thead upcolor">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            <th scope="col">Total</th>
            <th scope="col">Debito Fiscal</th>
            <th scope="col">Acciones</div>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Jose jose</td>
                <td>20/03/2019</td>
                <td><span>$</span>5.50</td>
                <td><span>$</span></td>
                <td>
                    <div class="table-data-feature">
                        <button class="item" data-toggle="modal" data-target="#debito" onclick="modalProduct(${row.id_menu})">
                        <i class="fas fa-chart-line" data-toggle="tooltip" data-placement="top" title="Modificar"></i>
                        </button>
                        <button class="item" onclick="Delete(${row.id_menu}">
                            <i class="zmdi zmdi-delete" data-toggle="tooltip" data-placement="top" title="Eliminar"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jose jose</td>
                <td>20/03/2019</td>
                <td><span>$</span>5.50</td>
                <td><span>$</span></td>
                <td>
                    <div class="table-data-feature">
                        <button class="item" data-toggle="modal" data-target="#debito" onclick="modalProduct(${row.id_menu})">
                        <i class="fas fa-plus" data-toggle="tooltip" data-placement="top" title="Modificar"></i>
                        </button>
                        <button class="item" onclick="Delete(${row.id_menu}">
                            <i class="zmdi zmdi-delete" data-toggle="tooltip" data-placement="top" title="Eliminar"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Jose jose</td>
                <td>20/03/2019</td>
                <td><span>$</span>5.50</td>
                <td><span>$</span></td>
                <td>
                    <div class="table-data-feature">
                        <button class="item" data-toggle="modal" data-target="#debito" onclick="modalProduct(${row.id_menu})">
                        <i class="fas fa-chart-line" data-toggle="tooltip" data-placement="top" title="Modificar"></i>
                        </button>
                        <button class="item" onclick="Delete(${row.id_menu}">
                            <i class="zmdi zmdi-delete" data-toggle="tooltip" data-placement="top" title="Eliminar"></i>
                        </button>
                    </div>
                </td>

            </tr>
        </tbody>
    </table>
    <div class="modal fade" id="debito" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="mediumModalLabel">Calculo de Debito Fiscal</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="form-chart" enctype="multipart/form-data">
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="create_cuenta">Cuenta:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="validationTooltipUsernamePrepend">$</span>
                                            </div>
                                            <input type="price" class="form-control" id="create_cuenta"
                                                name="create_cuenta" placeholder="Cuenta" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="create_precio">Iva:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="validationTooltipUsernamePrepend">$</span>
                                            </div>
                                            <input type="price" class="form-control" id="create_precio"
                                                name="create_precio" placeholder="Iva" Value="15%" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success" data-dismiss="modal">Aceptar</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    <!-- Agregar compra -->
    <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="mediumModalLabel">Agregar producto</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="form-create" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="create_nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="create_nombre" name="create_nombre"
                                            placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="create-fecha">Fecha:</label>
                                        <input class="date-selector" type="date" id="create-fecha" name="create-fecha"> 
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-success">Aceptar</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    <?php 
        Helpers :: js();
    ?>
  </body>
</html>
