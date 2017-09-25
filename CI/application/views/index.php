<div class="main">
    <div class='container content_bottom'>
        <section class="title-section">
            <center><h2 class="title-header" id="sub_titulo"><?php echo $titulo; ?> </h2></center>
        </section>
        <div class='row'>
            <div class="col-md-12 table-responsive">
                <table class='table table-striped' id="example" class="table table-striped table-bordered display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Cédula / RUC</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Celular</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Cedula</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Celular</th>
                        </tr>
                    </tfoot>
                    <tbody class="searchable", id="tbody_searchable">
                        <?php
						foreach($listar as $fila){
						?>
                            <tr>
                                <td><?=$fila->PersonaComercio_cedulaRuc?></td>
                                <td><?=$fila->nombres?></td>
                                <td><?=$fila->apellidos?></td>
                                <td><?=$fila->email?></td>
                                <td><?=$fila->celular?></td>
                            </tr>
                        <?php
						}
						?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>