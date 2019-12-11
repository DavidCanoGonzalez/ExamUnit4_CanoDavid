<!doctype html>
<html lang="en">
  <head>
    <title>4.1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
  </head>
  <body>
<!-- Aqui empezamos el php -->
<?php
// Definimos la variable
$ar = 0;
  // Creamos la funcion getHoteles en la que almacenaremos todos los datos 
  function getHoteles($hoteles){
    // Creamos la array que contendra todas la arrays con los datos de los hoteles
    $hoteles = array(  
      array(
        "nombre" => "Saratoga",
        "direccion" => "c/ saratoga, 17",
        "web" => "<a href='https://www.tripadvisor.es/Hotels-g187462-Majorca_Balearic_Islands-Hotels.html'> www.saratoga.com </a>",
        "rating" => "3",
        "foto" => "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTSFwi408xMaSwHMheoq8Jkbs1GFOt2s2dELBAjoQlNONuO852y'>"
      ),
      
      array(
        "nombre" => "Paraiso",
        "direccion" => "c/ paraiso, 3",
        "web" => "<a href='https://www.tripadvisor.es/Hotels-g187462-Majorca_Balearic_Islands-Hotels.html'> www.paraiso.com </a>",
        "rating" => "5",
        "foto" => "<img src='https://hotelesparaniños.club/wp-content/uploads/2018/06/Zafiro2-300x200.jpg'>"
      ),
      
      array(
        "nombre" => "Iberostar",
        "direccion" => "c/ iberostar, 39",
        "web" => "<a href='https://www.tripadvisor.es/Hotels-g187462-Majorca_Balearic_Islands-Hotels.html'> www.iberostar.com </a>",
        "rating" => "4",
        "foto" => "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSjCfgZJq0gFfT2Z3e--wfk5iGg1xKZZsuVM-dNDiT6m8sKft3B'>"
      ),
      
      array(
        "nombre" => "Deluxe",
        "direccion" => "c/ deluxe, 1",
        "web" => "<a href='https://www.tripadvisor.es/Hotels-g187462-Majorca_Balearic_Islands-Hotels.html'> www.deluxe.com </a>",
        "rating" => "1",
        "foto" => "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQRV8QX_6PBlOXVUHf9_ll4XP19jPniOKEzekGwc1uW9YkTmi3s'>"
      ));
      // Creamos una variable que representara los hoteles de alta calidad
      $high = "High quality";

      // Creamos un foreach con el que imprimiremos los hoteles en filas con sus respectivos datos
      foreach ($hoteles as $row) {
        // Creamos un if para clasificar los hoteles de alta calidad
        if ($row["rating"]>3) {
            // Creamos la tabla para imprimir los datos por pantalla
            echo "<table class='table table-dark col-xs-12 col-sm-6 col-md-7'>";
            echo "<td>";
            echo $row['nombre'], '<br>';
            echo $row['direccion'], '<br>';
            echo $row['web'], '<br>';
            echo $row['rating'], '<br>';
            echo $high, '<br>';
            echo $row['foto'], '<br>';
            echo "</td>";
            echo "</table>";
        } else {
            echo "<table class='table table-dark col-xs-12 col-sm-6 col-md-7'>";
            echo "<td>";
            echo $row['nombre'], '<br>';
            echo $row['direccion'], '<br>';
            echo $row['web'], '<br>';
            echo $row['rating'], '<br>';
            echo $row['foto'], '<br>';
            echo "</td>";
            echo "</table>";
        }
        
        // Creamos las tablas
    }
  }

  // Llamamos a la función
  getHoteles($ar);

// Cerramos php
?>

<!-- Creamos un buscador el cual no me ha dado tiempo a que me funcione -->
<form method="GET">
  Text a cercar: <input type="text" name="q"><br>
  <input type="submit" value="Cercar">
</form>

&copy;
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>