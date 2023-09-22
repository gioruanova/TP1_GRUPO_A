<?php require_once('funciones.php'); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="css/theme.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>PHP</title>
</head>

<body>
  <div class="content">
    <h1 class="mb-4 mt-2 animate__animated animate__fadeIn animate__slow">Detalle productos</h1>

    
    <!-- EJERCICIO 4: CODIGO EN HTML -->

         <!-- EJERCICIO 4b: LISTADO DE PRODUCTOS -->
    <!-- ------------------------------------COMIENZO PRODUCTOS------------------------------------ -->
    <table class="table product-table animate__animated animate__fadeInLeft animate__slow">
      <thead>
        <tr class="table-primary">
          <th scope="col">Codigo</th>
          <th scope="col">Detalle</th>
          <th scope="col">Precio</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($productos as $prod) {
          echo "<tr>";

          if ($prod['icono'] === null) {
            echo "<td class='text-center'> <img src='./img/icons/categorias/imagen.png' alt=''> {$prod['cod']} </td>";
          } else {
            echo "<td class='text-center'> <img src='./img/icons/categorias/{$prod['icono']}' alt=''> {$prod['cod']} </td>";
          }
          ;

          echo "<td class='text-center'> {$prod['detalle']} </td>";
          echo "<td class='text-center'>$ " . number_format($prod['precio'], 2, ',', '.') . "</td>";
          echo "<td class='text-center'>x{$prod['cantidad']}</td>";
          echo "<td class='text-center'>$" . number_format($prod['precio'] * $prod['cantidad'], 2, ',', '.') . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>

    <!-- ------------------------------------FIN PRODUCTOS------------------------------------ -->


    <!-- EJERCICIO 4c: TOTALES -->
    <!-- ------------------------------------COMIENZO TOTALES------------------------------------ -->
    <table class="table totalAPagar animate__animated animate__fadeInRight animate__slow">
      <thead>
        <tr class="table-primary">
          <th scope='col' class='sinDescuento'>
            <?php echo "Total: $" . number_format($monto, 2, ',', '.') ?>
          </th>
          <th scope='col' class='conDescuento'>
            <?php echo "Total con descuento: $" . number_format($montoFinal, 2, ',', '.') ?>
          </th>
        </tr>
      </thead>
    </table>
    <!-- ------------------------------------FIN TOTALES------------------------------------ -->


     <!-- EJERCICIO 4a: COFRE CLIENTE EN HTML -->
    <!-- ------------------------------------COMIENZO COFRE------------------------------------ -->
    <table class="table cofrePopUp animate__animated animate__bounceInUp">
      <thead>
        <tr class="table-primary">
          <th scope="col">Moneda</th>
          <th scope="col">Cantidad</th>
        </tr>
      </thead>
      <tbody>

        <!-- ------------------------------------DETALLE POR MONEDA------------------------------------ -->
        <tr>
          <?php
          foreach ($configMonedas as $monedaNombre => $value) {
            if ($monedaNombre != "bonif") {
              echo "<tr>";
              echo "<td class='moneda'>
            <img src='./img/icons/detalle/{$monedaNombre}.png'></img>
            " . ucfirst($monedaNombre) . " ($" . number_format($value, 2, ',', '.') . ")
            </td>";
              $cantidad = isset($detallePorMoneda[$monedaNombre]) ? $detallePorMoneda[$monedaNombre] : 0;
              echo "<td>$cantidad</td>";
              echo "</tr>";
            }
          }
          ?>
        </tr>
        <!-- ------------------------------------FINAL DETALLE POR MONEDA------------------------------------ -->

        <!-- ------------------------------------TOTAL COFRE------------------------------------ -->
        <tr>
          <td class="moneda">
            <img src="./img/icons/detalle/bonif.png">
            <span>Bonificación</span>
          </td>
          <td>
            <?php echo "$" . number_format($dinero, 2, ',', '.') ?>
          </td>
        </tr>
        <!-- ------------------------------------FIN TOTAL COFRE------------------------------------ -->


      </tbody>
    </table>
    <!-- ------------------------------------FIN COFRE------------------------------------ -->

    <!-- ------------------------------------FINAL------------------------------------ -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

</body>


</div>

</html>