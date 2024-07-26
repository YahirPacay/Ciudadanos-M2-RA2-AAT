<?php echo $this->extend('plantillas/layout'); ?>

<?php echo $this->Section('contenido'); ?>

<?php echo $this->include('plantillas/menu'); ?>

<div class="container ">

    <br>

    <div class="p-3 m-5">
        <h1 class="p-1">Ciudadanos</h1>
        <a href="nuevo_ciudadano" class="btn btn-primary  ">Nuevo Ciudadano</a>

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


            <table class="table table-hover s-2 e-0 ">
                <thead class="table table-dark">
                    <th>DPI</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>direccion</th>
                    <th>tel_casa</th>
                    <th>tel_movil</th>
                    <th>email</th>
                    <th>fechanac</th>
                    <th>cod_nivel_acad</th>
                    <th>cod_muni</th>
                    <th></th>
                    <th></th>
                </thead>
            <tbody>
                <?php foreach ($datos as $ciudadanos) : ?>
                    <tr>
                        <td ><?php echo $ciudadanos['dpi']; ?></td>
                        <td ><?php echo $ciudadanos['apellido']; ?></td>
                        <td ><?php echo $ciudadanos['nombre']; ?></td>
                        <td ><?php echo $ciudadanos['direccion']; ?></td>
                        <td ><?php echo $ciudadanos['tel_casa']; ?></td>
                        <td ><?php echo $ciudadanos['tel_movil']; ?></td>
                        <td ><?php echo $ciudadanos['email']; ?></td>
                        <td ><?php echo $ciudadanos['fechanac']; ?></td>
                        <td ><?php echo $ciudadanos['cod_nivel_acad']; ?></td>
                        <td ><?php echo $ciudadanos['cod_muni']; ?></td>
                        <td >
                            <a href="<?= base_url('buscar_ciudadano/').$ciudadanos['dpi'];?>" class="btn btn-success bi-pencil" style="border-radius: 50px;"></a>
                        </td>
                        <td>
                            <a href="<?= base_url('eliminar_ciudadano/').$ciudadanos['dpi']; ?>" class="btn btn-danger bi-trash" style="border-radius: 50px;"></a>
                        </td>
                    </tr>
                    
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>

    </div>
</div>



<?php echo $this->endSection(); ?>