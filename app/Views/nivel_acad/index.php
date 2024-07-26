<?php echo $this->extend('plantillas/layout'); ?>

<?php echo $this->section('contenido'); ?> 

<?php echo $this->include('plantillas/menu'); ?>

<div class="container justify-content-center">
    <br>
     
    <div class="p-3 m-5">
    <h1 class="p-1">Niveles Academicos</h1>
        <a href="<?= base_url('nuevo_nivel_acad')?>" class="btn btn-primary">Nuevo nivel Academico</a>

    </div> 
    <table class="table table-hover">
        <thead class="table table-dark">
            <th>cod_nivel_acad</th>
            <th>nombre</th>
            <th>descripcion</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($datos as $nivelesacademicos) : ?>
                <tr>
                    <td><?php echo $nivelesacademicos['cod_nivel_acad']; ?></td>
                    <td><?php echo $nivelesacademicos['nombre']; ?></td>
                    <td><?php echo $nivelesacademicos['descripcion']; ?></td>
                    <td>
                        <a href="<?= base_url('buscar_nivel_academico/').$nivelesacademicos['cod_nivel_acad'];?>" class="btn btn-success">Actualizar</a>
                    </td>
                    <td>
                        <a href="eliminar_nivel_acad/<?php echo $nivelesacademicos['cod_nivel_acad']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $this->endSection(); ?>