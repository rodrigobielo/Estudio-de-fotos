<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página con Bootstrap y Tabla</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MOSCU-PICTURES</a>
      <a class="btn btn-primary ml-auto" href="nuevoFotografo.php">Nuevo</a>
    </div>
  </nav>

  <div class="container mt-3">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Buscar" id="searchInput">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="searchButton">Buscar</button>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <h2>Lista de fotógrafos</h2>
    <table class="table table-bordered" id="fotografoTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Correo electrónico</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Dirección</th>
          <th scope="col">Acciones</th>
        </tr>

        <tr>
           <th scope="col">#</th>
           <th scope="col">Nombre</th>
           <th scope="col">Acciones</th>
            <th scope="col">Eliminar</th>
            

        </tr>


      </thead>
      <tbody>
        </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const fotografoTable = document.getElementById('fotografoTable');
    const searchButton = document.getElementById('searchButton');
    const searchInput = document.getElementById('searchInput');

    // Function to populate table with data from database
    function getFotografos(searchTerm = '') {
      const xhr = new XMLHttpRequest();
      xhr.open('GET', 'get_fotografos.php?search=' + searchTerm);
      xhr.onload = function() {
        if (xhr.status === 200) {
          const data = JSON.parse(xhr.responseText);
          fotografoTable.innerHTML = ''; // Clear existing data
          let tableBody = '';
          data.forEach((fotografo, index) => {
            tableBody += `
              <tr>
                <td>${index + 1}</td>
                <td>${fotografo.nombre}</td>
                <td>${fotografo.apellidos}</td>
                <td>${fotografo.correoElectronico}</td>
                <td>${fotografo.telefono}</td>
                <td>${fotografo.direccion}</td>
                <td>
                  <td>
                    <button class="btn btn-sm btn-primary">Actualizar</button>
                    <button class="btn btn-sm btn-danger delete-fotografo" data-id="<?= $fotografo['idFotografo'] ?>">Eliminar</button>
            </td>
                </td>
              </tr>
            `;
          });
          fotografoTable.innerHTML = tableBody;
        } else {
          console.error('Error fetching data:', xhr.statusText);
        }
      };
      xhr.send();
    }

    // Get data on page load
    getFotografos();

    // Implement search functionality (Optional)
    searchButton.addEventListener('click', () => {
      const searchTerm = searchInput.value.trim();
      getFotografos(searchTerm);
    });

  </script>
</body>
</html>
