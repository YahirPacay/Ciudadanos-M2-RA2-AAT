<?php echo $this->extend('plantillas/layout'); ?>

<?php echo $this->section('contenido'); ?>

<?php echo $this->include('plantillas/menu'); ?>

//contenido

<div class="container  justify-content-center">

    <br>
    <div class="p-3 m-5">
    <h1 class="">Departamentos</h1>
        <a href="<?= base_url('nuevo_departamento');?>" class="btn btn-primary">Nuevo Depto</a>
    </div>
    <table class="table table-hover x-0">
        <thead class="table table-dark">
            <th>Cod_departamentos</th>
            <th>nombre</th>
            <th>cod_region</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($datos as $departamentos) : ?>
                <tr>
                    <td><?php echo $departamentos['cod_depto']; ?></td>
                    <td><?php echo $departamentos['nombre_depto']; ?></td>
                    <td><?php echo $departamentos['cod_region']; ?></td>

                    <td>
                        <a href="<?= base_url('buscar_departamento/').$departamentos['cod_depto'];?>" class="btn btn-success">Actualizar</a>
                    </td>
                    <td>
                        <a href="eliminar_depto/<?php echo $departamentos['cod_depto']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>

                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

</div>
<?php $this->endSection(); ?>