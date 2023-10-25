<?php
include('od_includes/od_conexion.php');
conectar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="od_estilos/od_styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sometype+Mono&display=swap" rel="stylesheet" />
  <title>OD Parcial</title>
</head>

<body>
  <header>
    <nav>
      <div class="od_organizacion_nav">
        <div class="od_estilo_logo">
          <img src="od_imagenes/od_logo.jpg" alt="" width="50px" height="50px" href="index.html" />
        </div>
        <a class="od_botones_nav" href="index.html">Inicio</a>
        <a class="od_botones_nav" href="od_contactos.html">Conctacto</a>
      </div>
    </nav>
  </header>
  <main>
    <div class="od_organizacion_productos">
      <div class="od_org_por_producto">
        <img src="od_imagenes/od_celular1.jpg" alt="" width="350px" height="350px" />
        <div class="od_infoProducto">
          
          <h1 class="od_estilo_php" ><?php
          
          $sql = "SELECT * from od_productos where id =1";
          $sql = mysqli_query($con, $sql);
          if (mysqli_num_rows($sql) != 0) {
            while ($r = mysqli_fetch_array($sql)) {
              ?>
              <a href="od_producto.php<?php  ?> ">
                <?php echo $r['nombre_item']; ?>
              </a>
              <?php
            }
          }
          
              ?></h1>
          <p>
            El Samsung Galaxy A50 es un smartphone Android de gama media que
            fue lanzado en marzo de 2019. Ofrece una pantalla Super AMOLED de
            6.4 pulgadas, un procesador Exynos 9610, hasta 6 GB de RAM, y
            opciones de almacenamiento interno de 64 GB o 128 GB. También
            cuenta con una triple cámara trasera de 25 MP + 8 MP + 5 MP, una
            cámara frontal de 25 MP, una batería de 4000 mAh y ejecuta el
            sistema operativo Android con la interfaz de usuario One UI de
            Samsung. Este dispositivo es conocido por su equilibrio entre
            precio y rendimiento, y es popular por su calidad de pantalla y
            cámaras asequibles.
          </p>
          <a class="od_boton_inicio " href="od_ficha.html">Ver</a>
        </div>
      </div>
      <div class="od_org_por_producto">
        <img src="od_imagenes/od_celular2.png" alt="" width="350px" height="350px" />
        <div class="od_infoProducto">
          <h1><?php
          
          $sql = "SELECT * from od_productos where id =2";
          $sql = mysqli_query($con, $sql);
          if (mysqli_num_rows($sql) != 0) {
            while ($r = mysqli_fetch_array($sql)) {
              ?>
              <a href="od_producto.php<?php  ?> ">
                <?php echo $r['nombre_item']; ?>
              </a>
              <?php
            }
          }
          
              ?></h1>
          <p>
            El Samsung Galaxy A23 es un smartphone de gama media que se
            destaca por su pantalla de alta frecuencia, su cámara trasera con
            estabilización óptica y su batería de larga duración.
          </p>
          <a class="od_boton_inicio " href="od_ficha.html">Ver</a>
        </div>
      </div>
      <div class="od_org_por_producto">
        <img src="od_imagenes/od_celular3.jpg" alt="" width="350px" height="350px" />
        <div class="od_infoProducto">
          <h1>Motorola</h1>
          <p>
            Moto G100: Es un smartphone de gama alta que ofrece un rendimiento
            potente, una pantalla de 90 Hz y una cámara trasera de 64 MP.
            Tiene un procesador Snapdragon 870 con 8 GB o 12 GB de RAM y 128
            GB o 256 GB de almacenamiento interno1.
          </p>
          <a class="od_boton_inicio " href="od_ficha.html">Ver</a>
        </div>
      </div>
    </div>
  </main>
</body>

</html>