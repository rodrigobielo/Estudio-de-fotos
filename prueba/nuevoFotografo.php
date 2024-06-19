<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario de Fotógrafo</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Formulario de Fotógrafo</a>
  </div>
</nav>

<div class="container mt-3">
  <h1>Formulario de Registro de Fotógrafo</h1>

  <form action="c_fotografos.php" method="post">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
      <label for="apellidos" class="form-label">Apellidos</label>
      <input type="text" class="form-control" id="apellidos" name="apellidos" required>
    </div>
    <div class="mb-3">
      <label for="correoElectronico" class="form-label">Correo Electrónico</label>
      <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" required>
    </div>
    <div class="mb-3">
      <label for="telefono" class="form-label">Teléfono</label>
      <input type="text" class="form-control" id="telefono" name="telefono" required>
    </div>
    <div class="mb-3">
      <label for="direccion" class="form-label">Dirección</label>
      <input type="text" class="form-control" id="direccion" name="direccion" required>
    </div>
    <button type="submit" class="btn btn-primary">Registrar Fotógrafo</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
