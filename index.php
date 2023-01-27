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
                                    <form action="" method="post">
                                        <div class="col-md-12">
                                        <label for="nombre" class="form-label">Nombre(s):</label>
                                        <input type="text" name="nombre" placeholder="Ingrese su nombre" class="form-control">
                                        </div>

                                        <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="apellidoPaterno" class="form-label">Apellido Paterno: </label>
                                            <input type="text" class="form-control" id="apellidoPaterno" placeholder="Apellido Paterno">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="apellidoMaterno" class="form-label">Apellido Materno: </label>
                                            <input type="text" class="form-control" id="apellidoMaterno" placeholder="Apellido Materno">
                                        </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label md-6">Email: </label>
                                                <input type="email" class="form-control" id="inputEmail4">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Password: </label>
                                                <input type="password" class="form-control" id="inputPassword4">
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 mb-3">
                                        <label for="departamento" class="form-label">Departamento:</label>
                                        <select name="departamento" class="form-control" aria-label="Default select example">
                                            <option value="orientacion">Orientación nutricional</option>
                                            <option value="soporte">Soporte Técnico</option>
                                        </select>
                                        </div>
                                        
                                        <div class="mb-6">
                                         <button type="submit" class="btn">Continuar</button>
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