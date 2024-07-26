<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Ciudadano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
 
    <div class="container-fluid position-static top-50 start-50">
        <div class="row justify-content-center p-5">
            <h1 class="text-center shadow-lg p-3 mb-5 bg-body-tertiary bg-info-subtle rounded-5">Nuevo Ciudadano</h1>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-8 bg-info-subtle text-info-emphasis p-5 border border-danger rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary">
                <form action="<?= base_url('agregar_ciudadano'); ?>" method="post" class="container">
                    <div class="mb-3">
                        <label for="txtDpi" class="form-label">DPI</label>
                        <input type="number" id="txtDpi" name="txtDpi" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtDireccion" class="form-label">direccion</label>
                        <input type="text" id="txtDireccion" name="txtDireccion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelCasa" class="form-label">Telefono de Casa</label>
                        <input type="number" id="txtTelCasa" name="txtTelCasa" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelMovil" class="form-label">Telefono Movil</label>
                        <input type="number" id="txtTelMovil" name="txtTelMovil" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCorreo" class="form-label">Correo Electronico</label>
                        <input type="email" id="txtCorreo" name="txtCorreo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtFechaNac" class="form-label">Fecha Nacimiento</label>
                        <input type="date" id="txtFechaNac" name="txtFechaNac" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCodAcad" class="form-label">Codigo de nivel Academico</label>
                        <input type="number" id="txtCodAcad" name="txtCodAcad" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCodMuni" class="form-label">codigo de municipio</label>
                        <input type="number" id="txtCodMuni" name="txtCodMuni" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtContra" class="form-label">codigo de municipio</label>
                        <input type="text" id="txtContra" name="txtContra" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardar" name="btnGuardar" class="form-control btn btn-primary" value="Guardar">
                    </div>

                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>