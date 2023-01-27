<?php
include('sidebar1.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">                    
                            <form action="" method="post">                               
                                <label for="nombre">Nombre(s):</label>
                                <input type="text" name="nombre">
                    
                                <label for="apellidoMaterno">Apellido Materno:</label>
                                <input type="text" name="apellidoMaterno">
                                
                                <label for="apellidoPaterno">Apellido Paterno:</label>
                                <input type="text" name="apellidoPaterno">
                    
                                <label for="fecha">Fecha:</label>
                                <input type="datetime-local" name="fecha" id="">
                    
                                <label for="folio">Folio:</label>
                                <input type="text" name="folio">
                    
                                <label for="reporteFalla">Reporte de falla:</label>
                                <textarea rows="" cols=""></textarea>
                    
                            </form>                            
                    </div>       
                </div>
            </main>
        </div>

        

        <?php
        include('sidebar2.php');
        ?>
    
    </body>
</html>