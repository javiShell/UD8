<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/estilos.css">
        <meta charset="UTF-8">
        <meta name="Francisco Javier Pedrajas Arroyo">
        <meta lang="es">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    </head>
    
    <body style="background-color: #c2c2c2;">
       
    <header>
    <div id="logo">
     </div>
     <nav>
       <ul>
       <li><a href="../index.php">Volver al inicio</a></li>
       </ul>
     </nav>
  </div>
</nav>
    </header>

            <div class="titles">
                <h3>Resumen de la serie</h3>
                <?php
                    echo '<table class="table">';
                    echo '<thead class="thead-dark">';
                    echo '<tr>';
                    echo '<th scope="col">#</th>';
                    echo '<th scope="col">Nombre</th>';
                    echo '<th scope="col">Nombre en la serie</th>';
                    echo '<th scope="col">Episodio</th>';
                    echo '<th scope="col">Temporada</th>';
                    echo '<th scope="col">Titulo</th>';
                    echo '</tr>';
                    echo '</thead>';

                        while($fila = $resultado->fetch_assoc()){
                            echo "<tr>";
                            echo "<td scope='row'>".$fila["id"]."</td>";
                            echo "<td scope='row'>".$fila["name"]."</td>";
                            echo "<td scope='row'>".$fila["serie_name"]."</td>";
                            echo "<td scope='row'>".$fila["episode"]."</td>";
                            echo "<td scope='row'>".$fila["season"]."</td>";
                            echo "<td scope='row'>".$fila["title"]."</td>";
                            echo "</tr>";
                        }

                        echo '</table>';   
                ?>

            </div>

            <footer class="footer1">
            <nav>
                Creado por Francisco Javier Pedrajas Arroyo
            </nav>
            </footer>

    </body>
</html>