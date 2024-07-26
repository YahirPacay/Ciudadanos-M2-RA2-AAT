<?php echo $this->extend('plantillas/layout'); ?>

<?php echo $this->Section('contenido'); ?>

<?php echo $this->include('plantillas/menu'); ?>

<div class="container justify-content-center">

    <br class="">
    <div class="p-3 m-5">
        <h1 class="">Municipios</h1>
        <a href="<?= base_url('nuevo_municipio'); ?>" class="btn btn-primary">Nuevo Municipio</a>

    </div>

    <div class="container">
        <div class="list-group-horizontal position-relative overflow-auto w-100" 
            style="margin: 4px, 4px;
            padding: 4px;
            width: 100%;
            height: 600px;
            overflow: auto;
            white-space: wrap;
            ">
            <table class="table table-hover">
                <thead class="table table-dark">
                    <th>Cod_Muni</th>
                    <th>nombre_Municipio</th>
                    <th>cod_depto</th>
                    <th></th>
                    <th></th>
                </thead> 
                <tbody>
                    <?php foreach ($muni as $municipios) : ?>
                        <tr>
                            <td><?php echo $municipios['cod_muni']; ?></td>
                            <td><?php echo $municipios['nombre_municipio']; ?></td>
                            <td><?php echo $municipios['cod_depto']; ?></td>
                            <td>
                                <a href="<?= base_url('buscar_municipio/').$municipios['cod_muni']; ?>" class="btn btn-success">Actualizar</a>
                            </td>
                            <td>
                                <a href="eliminar_municipio/<?php echo $municipios['cod_muni']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php echo $this->endSection(); ?>