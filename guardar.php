<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guardar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
  <form action="guardado.php" method="post">
    <div class="mb-3 row">
      <label for="estudiante" class="col-sm-2 col-form-label">Estudiante</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="estudiante" id="estudiante">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="libro" class="col-sm-2 col-form-label">Libro ISBN</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="libro" id="libro">
        <!-- <select name="libro" id="libro" class="form-control">
          <option value="">Libro 1</option>
          <option value="">Libro 2</option>
          <option value="">Libro 3</option>
        </select> -->
        
      </div>
    </div>
    <!-- <div class="mb-3 row">
      <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="fecha">
      </div>
    </div> -->
    <div class="mb-3 row">
      <label for="dias" class="col-sm-2 col-form-label">dias prestamo</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="dias" id="dias">
      </div>
    </div>

    <div class="mb-3 row">
      <div class="col-sm-10">
        <button type="submit" class="form-control btn btn-primary">Guardar</button>
      </div>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>