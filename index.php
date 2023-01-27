<?php
include('sidebar1.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <div class="contenedor">
            <div class="col text-center">
                <form action="./conexion/nuevoUsuario.php" method="post">
                    <div class="mb-4 col-10">
                        <label for="nombre" class="form-label">Nombre(s):</label>
                        <input type="text" name="nombre" placeholder="Ingrese su nombre" class="form-control">
                    </div>

                    <div class="input-group mb-3 col-4">
                        <label for="apellidoPaterno" class="form-label col-2">Apellido Paterno:</label>
                        <input type="text" name="apellidoPaterno" placeholder="Apellido Paterno" class="form-control">

                        <label for="apellidoMaterno" class="floatingInputValue">Apellido Materno:</label>
                        <input type="text" name="apellidoMaterno" placeholder="Apellido Materno" class="form-control">
                    </div>

                    <div class="col-6">
                        <label for="correo" class="form-label">Correo:</label>
                        <input type="email" name="correo" placeholder="Ingrese su correo" class="form-control">
                    </div>

                    <div class="col-6">
                        <label for="contra" class="form-label">Contraseña:</label>
                        <input type="password" name="contra" placeholder="Ingrese su contraseña" class="form-control">
                    </div>

                    <div class="col-12 mb-3">
                        <label for="departamento" class="form-label">Departamento:</label>
                        <select name="departamento" class="form-control">
                            <option value="Orientacion_Nutricional">Orientación nutricional</option>
                            <option value="Soporte_Tecnico">Soporte Técnico</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <input type="submit" value="Continuar">
                    </div>

                </form>
            </div>
        </div>
    </div>


    </main>


    <?php
    include('sidebar2.php');
    ?>

</body>

</html>