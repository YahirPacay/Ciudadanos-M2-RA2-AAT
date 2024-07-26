<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planes nuevos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid position-static top-50 start-50">
        <div class="row justify-content-center p-5">
            <h1 class="text-center shadow-lg p-3 mb-5 bg-body-tertiary bg-danger-subtle rounded-5">Departamento Nuevo</h1>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 bg-danger-subtle text-info-emphasis p-5 border border-dark rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary">
                <form action="<?= base_url('agregar_departamento')?>" method="post">
                    <div class="mb-3">
                        <label for="txtCodDepto" class="form-label">Cod_departamentos</label>
                        <input type="number" id="txtCodDepto" name="txtCodDepto" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombreDepto" class="form-label">Nombre del Departamento</label>
                        <input type="text" id="txtNombreDepto" name="txtNombreDepto" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCodRegion" class="form-label">Region</label>
                        <input type="number" id="txtCodRegion" name="txtCodRegion" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="btnGuardarPlan" class="form-label"></label>
                        <input type="submit" id="btnGuardarPlan" name="btnGuardarPlan" class="form-control btn btn-dark" value="Guardar">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>