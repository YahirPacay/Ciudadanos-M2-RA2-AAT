<?php echo $this->extend('plantillas/layout'); ?>

<?php echo $this->section('contenido'); ?>

<?php echo $this->include('plantillas/menu'); ?>

<div class="container justify-content-center">

    <br>
    <div class="p-3 m-5">
    <h1 class="p-1 ">Regiones</h1>
        <a href="<?= base_url('nuevo_region')?>" class="btn btn-primary">Nuevo Depto</a>
    </div>
    <table class="table table-hover ">
        <thead class="table table-dark">
            <th>Cod_Region</th>
            <th>nombre</th>
            <th>descripcion</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($datos as $regiones) : ?>
                <tr>
                    <td><?php echo $regiones['cod_region']; ?></td>
                    <td><?php echo $regiones['nombre']; ?></td>
                    <td><?php echo $regiones['descripcion']; ?></td>
                    <td>
                        <a href="<?= base_url('buscar_region/').$regiones['cod_region']; ?>" class="btn btn-success">Actualizar</a>
                    </td>
                    <td>
                        <a href="eliminar_region/<?php echo $regiones['cod_region']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
 
            <?php endforeach; ?>
        </tbody>
    </table>

</div> 

<?php echo $this->endSection(); ?>