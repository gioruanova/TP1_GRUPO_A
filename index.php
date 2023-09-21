<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href="css/theme.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <title>PHP, yo te conoco!</title>
</head>

<body>

  <h1 class="mb-4 mt-2 animate__animated animate__fadeIn animate__slow">Detalle productos</h1>

  <!-- ------------TABLA PRODUCTOS------------
    ---------------------------------------- -->
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

      <!-- Prod 1 -->
      <tr>
        <td>
          <img src="./img/icons/categorias/bebidas.png">
          <span>12345</span>
        </td>
        <td>Coca-Cola</td>
        <td>$900.00</td>
        <td>3</td>
        <td>$1800.00</td>
      </tr>

      <!-- Prod 2 -->

    </tbody>
  </table>

  <!-- ------------FIN TABLA PRODUCTOS------------
    ------------------------------------------- -->



  <!-- ------------TOTALES------------
    -------------------------------- -->
  <table class="table totalAPagar animate__animated animate__fadeInRight animate__slow">
    <thead>
      <tr class="table-primary">
        <th scope="col" class="sinDescuento">Total a Pagar: $94.350,00</th>
        <th scope="col" class="conDescuento">Total con descuento: $93.800,00</th>
      </tr>
    </thead>
  </table>
  <!-- ------------FIN TOTALES------------
    ------------------------------------ -->




  <!-- ------------COFRE-----------
    ------------------------------ -->

  <table class="table cofrePopUp animate__animated animate__bounceInUp">
    <thead>
      <tr class="table-primary">
        <th scope="col">Moneda</th>
        <th scope="col">Cantidad</th>

      </tr>
    </thead>
    <tbody>

      <!-- Moneda 1------------ -->

      <tr>
        <td class="moneda">
          <img src="./img/icons/detalle/oro.png">
          <span>Oro ($200)</span>
        </td>
        <td>2</td>
      </tr>

      <!-- Moneda 2------------ -->
      <tr>
        <td class="moneda">
          <img src="./img/icons/detalle/plata.png">
          <span>Plata ($150)</span>
        </td>
        <td>2</td>
      </tr>

    </tbody>
  </table>



  <!-- ------------------------------------
  FINAL
  ------------------------------------ -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>