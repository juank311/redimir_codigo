<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="css/estilos.css" rel="stylesheet">

    <title>Registrate y recibe bono por 10% de Descuento</title>
  </head>
  <body>
    
    <div class="container caja">
    <div class="row mt-4">
        <h1 class="text-center">Regístrate y redime el código en un punto de venta</h1>
    </div>

    <div class="row mt-4">
        
             
    </div>
    
        <form method="POST" action="procesar.php">
            <div class="row">
                <div class="col-sm-8">
                    <h5>Los campos con (*) son obligatorios</h5>
                </div>
            </div>
            <div class="row">                
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="niu_user" class="form-label">No. Identificación (*):</label>
                        <input type="text" name="niu_user" class="form-control" id="niu_user" placeholder="Ingresa tu # cedula">
                    </div>

                    <div class="mb-3">
                        <label for="name_user" class="form-label">Nombres (*):</label>
                        <input type="text" name="name_user" class="form-control" id="name_user" placeholder="Ingresa tu nombre laura">
                    </div>

                    <div class="mb-3">
                        <label for="last_name_user" class="form-label">Apellidos (*):</label>
                        <input type="text" name="last_name_user" class="form-control" id="last_name_user" placeholder="Ingresa tu apellido">
                    </div>

                    <div class="mb-3">
                        <label for="phone_user" class="form-label">Teléfono (*):</label>
                        <input type="text" name="phone_user" class="form-control" id="phone_user" placeholder="Ingresa tu teléfono">
                    </div>

                    <div class="mb-3">
                        <label for="email_user" class="form-label">Email (*):</label>
                        <input type="email" name="email_user" class="form-control" id="email_user" placeholder="Ingresa tu email">
                    </div>

                    <div class="mb-3">
                        <label for="address_user" class="form-label">Dirección (*):</label>
                        <input type="text" name="address_user" class="form-control" id="address_user" placeholder="Ingresa tu direccion">
                    </div>

                    <div class="mb-3">
                    <label for="department_user" class="form-label">Departamento (*):</label>
                    <select class="form-select w-100" name="department_user">
                        <option value="">--Selecciona un departamento--</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Antioquia">Antioquia</option>
                        <option value="Arauca">Arauca</option>
                        <option value="Atlántico">Atlántico</option>
                        <option value="Bolívar">Bolívar</option>
                        <option value="Boyacá">Boyacá</option>
                        <option value="Caldas">Caldas</option>
                        <option value="Caquetá">Caquetá</option>
                        <option value="Casanare">Casanare</option>
                        <option value="Cauca">Cauca</option>
                        <option value="Cesar">Cesar</option>
                        <option value="Chocó">Chocó</option>
                        <option value="Córdoba">Córdoba</option>
                        <option value="Cundinamarca">Cundinamarca</option>
                        <option value="Guainía">Guainía</option>
                        <option value="Guaviare">Guaviare</option>
                        <option value="Huila">Huila</option>
                        <option value="La Guajira">La Guajira</option>
                        <option value="Magdalena">Magdalena</option>
                        <option value="Meta">Meta</option>
                        <option value="Nariño">Nariño</option>
                        <option value="Norte de Santander">Norte de Santander</option>
                        <option value="Putumayo">Putumayo</option>
                        <option value="Quindío">Quindío</option>
                        <option value="Risaralda">Risaralda</option>
                        <option value="San Andrés y Providencia">San Andrés y Providencia</option>
                        <option value="Santander">Santander</option>
                        <option value="Sucre">Sucre</option>
                        <option value="Tolima">Tolima</option>
                        <option value="Valle del Cauca">Valle del Cauca</option>
                        <option value="Vaupés">Vaupés</option>
                        <option value="Vichada">Vichada</option>
                    </select>
                    </div>
                <div class="mb-3">
                        <label for="city_user" class="form-label">Ciudad (*):</label>
                        <input type="text" class="form-control" name="city_user" id="city_user" placeholder="Ingresa tu ciudad">
                </div>
                <button type="submit" name="btnRegistrarse" class="btn btn-success btn-xl w-100 btnRegistrarse">REGISTRARSE</button>
                </div>
                <div class="col-sm-6">
                   <img src="img/mujer_bg.png" class="img-fluid">
                </div>
            </div>     

        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>