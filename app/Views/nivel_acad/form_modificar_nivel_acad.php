<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nivel Acádmeico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid position-static top-50 start-50">
        <div class="row justify-content-center p-5">
            <h1 class="text-center shadow-lg p-3 mb-5 bg-body-tertiary bg-warning-subtle rounded-5">Nivel Academico Modificar</h1>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 bg-warning-subtle text-info-emphasis p-5 border border-dark rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary">
                <form action="<?= base_url('modificar_nivel_acad')?> " method="post">
                    <div class="mb-3">
                        <label for="txtCodNivelAcad" class="form-label">cod_nivel_acad</label>
                        <input type="number" id="txtCodNivelAcad" name="txtCodNivelAcad" class="form-control"
                        value="<?= $datos['cod_nivel_acad']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                        value="<?= $datos['nombre']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcion" class="form-label">Descripcion</label>
                        <input type="txt" id="txtDescripcion" name="txtDescripcion" class="form-control"
                        value="<?= $datos['descripcion']?>">
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