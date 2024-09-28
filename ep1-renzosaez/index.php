<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <title>Evaluacion permanente 1</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" id="frm">
                    <div class="form-group">
                        <label for="">codigo</label>
                        <input type="text" name="codigo" id="codigo" placeholder="Codigo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Producto</label>
                        <input type="text" name="Producto" id="producto" placeholder="Descripcion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Precio</label>
                        <input type="text" name="Precio" id="precio" placeholder="Precio" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Cantidad</label>
                        <input type="text" name="cantidad" id="cantidad" placeholder="Cantidad" class="form-control">
                    </div>
                    <div class="form-group">
                       <input type="button" value="Registrar" id="registrar" class="btn btn-primary btn-block ">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <table class="table table-hover table-responsive">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="resultado">

            </tbody>
        </table>

    </div>
    </div>
    </div>
    
    <script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>