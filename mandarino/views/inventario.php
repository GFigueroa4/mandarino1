<?php
      require('../core/helpers/helpers.php');
      Helpers:: css();
      Helpers::headerTemplate();
    ?>
  <body class="body">
        <h2 class="title1">
                Inventario  
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
            <th scope="col">Cantidad</th>
            <th scope="col">Estado</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</div>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mango</td>
                <td>12</td>
                <td>Activo</td>
                <td><span>$</span>5.50</td>
                <td>
                    <div class="table-data-feature">
                        <button class="item" data-toggle="modal" data-target="#credito" onclick="modalProduct(${row.id_menu})">
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
                <td>Mango</td>
                <td>12</td>
                <td>Activo</td>
                <td><span>$</span>5.50</td>
                <td>
                    <div class="table-data-feature">
                        <button class="item" data-toggle="modal" data-target="#credito" onclick="modalProduct(${row.id_menu})">
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
                <td>Mango</td>
                <td>12</td>
                <td>Activo</td>
                <td><span>$</span>5.50</td>
                <td>
                    <div class="table-data-feature">
                        <button class="item" data-toggle="modal" data-target="#credito" onclick="modalProduct(${row.id_menu})">
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
    <div class="modal fade" id="credito" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="mediumModalLabel">Calculo de Credito Fiscal</h3>
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
                                        <label for="create_nombre">Cantidad:</label>
                                        <input type="number" class="form-control" id="create_nombre" name="create_nombre"
                                            placeholder="Cantidad">
                                    </div>
                                    <div class="form-group">
                                        <label for="create_precio">Precio:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="validationTooltipUsernamePrepend">$</span>
                                            </div>
                                            <input type="price" class="form-control" id="create_precio"
                                                name="create_precio" placeholder="Precio">
                                        </div>
                                    </div>
                                    <label for="update-state">Estado: </label>
                                    <div>
                                        <label class="switch">
                                            <input type="checkbox" id="update_state" name="update_state">
                                            <span class="slider round"></span>
                                        </label>
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
                                        <label for="create_nombre">Cantidad:</label>
                                        <input type="number" class="form-control" id="create_nombre" name="create_nombre"
                                            placeholder="Cantidad">
                                    </div>
                                    <div class="form-group">
                                        <label for="create_precio">Precio:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                    id="validationTooltipUsernamePrepend">$</span>
                                            </div>
                                            <input type="price" class="form-control" id="create_precio"
                                                name="create_precio" placeholder="Precio">
                                        </div>
                                    </div>
                                    <label for="update-state">Estado: </label>
                                    <div>
                                        <label class="switch">
                                            <input type="checkbox" id="update_state" name="update_state">
                                            <span class="slider round"></span>
                                        </label>
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
