<div id="fh5co-main">

    <div class="fh5co-narrow-content">
        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft"><i class="glyphicon glyphicon-check" aria-hidden="true"></i> Inventario de productos.</h2>
        <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
            <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalproducto"><span class="glyphicon glyphicon-plus"></span> Agregar nuevo</button>
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">ID_PRODUCTOS </th>
                        <th class="th-sm">CODIGO</th>
                        <th class="th-sm">NOMBRE</th>
                        <th class="th-sm">PROVEEDOR</th>
                        <th class="th-sm">VALOR $</th>
                        <th class="th-sm">EXISTENCIA</th>
                        <th class="th-sm"></th>
                        <th class="th-sm"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($productos as $row ) { 
                    ?>
                    <tr>
                        <td><?= $row->ID_PRODUCTO ?></td>
                        <td><?= $row->CODIGO ?></td>
                        <td><?= $row->NOMBRE ?></td>
                        <td><?= $row->PROVEEDOR ?></td>
                        <td><?= $row->VALOR ?></td>
                        <td><?= $row->EXISTENCIA ?></td>
                        <td><a class="btn btn-info  " href="<?= base_url() ?>productos/edit?id=<?= $row->ID_PRODUCTO?>">Editar</a></td>
                        <td><input type="checkbox" checked data-toggle="toggle"></td>
                    </tr> 
                    <?php } ?>                       
                </tbody>
                <tfoot>
                    <th class="th-sm">Titulo </th>
                    <th class="th-sm">Descripcion</th>
                    <th class="th-sm">Puntos</th>
                    <th class="th-sm">Estado</th>
                    <th class="th-sm">Publicacion</th>
                    <th class="th-sm"></th>
                    <th class="th-sm"></th>
                </tfoot>
            </table>
        </div>
    </div>
</div>


<!-- Modal agregar producto-->
<div class="modal fade" id="modalproducto" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar producto</h4>
        </div>
        <div class="modal-body">
            <form action="<?= base_url()?>Welcome/save" method="POST">
                <div class="row">
                    <div class="form-group col-sm-6 ">
                        <label for="codigo">CODIGO:</label>
                        <input type="text" class="form-control" id="codigo" name="codigo">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="nombre">NOMBRE:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6 ">
                        <label for="proveedor">PROVEEDOR:</label>
                        <input type="number" class="form-control" id="proveedor" name="proveedor">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="valor">VALOR:</label>
                        <input type="text" class="form-control" id="valor" name="valor">
                    </div>
                </div>
                <div class="form-group">
                        <label for="existencia">CANTIDAD INCIAL:</label>
                        <input type="inicial" class="form-control" id="existencia" name="existencia">
                </div>
                <button class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>