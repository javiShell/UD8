<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/estilos.css">
        <meta charset="UTF-8">
        <meta name="Francisco Javier Pedrajas Arroyo">
        <meta lang="es">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    </head>
    
    <body style="background-color: #c2c2c2;">
       
    <header>
    <div id="logo">
        <img src="nav.jpg" alt="Juego de tronos">
     </div>
     <nav>
       <ul>
         <li><a href="./controllers/controller_actores.php">Actores</a></li>
         <li><a href="./controllers/controller_actoresTemp.php">Actores por episodio</a></li>
       </ul>
     </nav>
  </div>
</nav>
    </header>
            <div class="resumen">
                <h3>Sipnosis</h3>
                <p>En un mundo fantástico y en un contexto medieval varias familias, relativas a la nobleza,
                     se disputan el poder para dominar el territorio ficticio de Poniente (Westeros) y tomar el control de los Siete Reinos desde el Trono de Hierro, 
                     lugar donde el rey ejerce el poder.</p> 
            </div>

            <div class="titles">
                <h3>Resumen de la serie</h3>
                <?php
                    echo '<table class="table">';
                    echo '<thead class="thead-dark">';
                    echo '<tr>';
                    echo '<th scope="col">#</th>';
                    echo '<th scope="col">Titulo</th>';
                    echo '<th scope="col">Trama</th>';
                    echo '<th scope="col">Creadores</th>';
                    echo '<th scope="col">Inicio</th>';
                    echo '<th scope="col">Fin</th>';
                    echo '<th scope="col">Temporadas</th>';
                    echo '<th scope="col">Genero</th>';
                    echo '</tr>';
                    echo '</thead>';

                        while($fila = $resultado->fetch_assoc()){
                            echo "<tr>";
                            echo "<td scope='row'>".$fila["id"]."</td>";
                            echo "<td scope='row'>".$fila["title"]."</td>";
                            echo "<td scope='row'>".$fila["plot"]."</td>";
                            echo "<td scope='row'>".$fila["creators"]."</td>";
                            echo "<td scope='row'>".$fila["season_start"]."</td>";
                            echo "<td scope='row'>".$fila["season_end"]."</td>";
                            echo "<td scope='row'>".$fila["seasons"]."</td>";
                            echo "<td scope='row'>".$fila["generes"]."</td>";
                            echo "</tr>";
                        }

                        echo '</table>';   
                ?>

            </div>

            <footer>
            <nav>
                Creado por Francisco Javier Pedrajas Arroyo
            </nav>
            </footer>

    </body>
</html>