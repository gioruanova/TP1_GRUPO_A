<?php

// -----------------CONFIGURACION MONEDAS-----------------
function getConfig()
{
    $getConfigMonedas = [
        'oro' => 200,
        'plata' => 50,
        'bronce' => 10
    ];
    return $getConfigMonedas;
}
$configMonedas = getConfig();


// -----------------COFRE USUARIO MONEDAS-----------------
$cofre = [
    'oro',
    'plata',
    'bronce',
    'bronce',
    'oro'
];

// -----------------PRODUCTOS-----------------
$productos = [
    [
        'cod' => 111,
        'precio' => 800,
        'cantidad' => 3,
        'detalle' => 'Coca Cola 1.5LT',
        'icono' => 'bebidas.png',
    ],
    [
        'cod' => 222,
        'precio' => 100,
        'cantidad' => 1,
        'detalle' => 'Azúcar Ledesma',
        'icono' => 'comidas.png',
    ],
    [
        'cod' => 333,
        'precio' => 800,
        'cantidad' => 2,
        'detalle' => 'Servilletas Elegante 3 rollos',
        'icono' => 'limpieza.png',
    ],
    [
        'cod' => 444,
        'precio' => 250,
        'cantidad' => 1,
        'detalle' => 'Alcohol etílico',
        'icono' => null,
    ],
    [
        'cod' => 555,
        'precio' => 5000,
        'cantidad' => 2,
        'detalle' => 'Papas Pringles',
        'icono' => 'comidas.png',
    ],
    [
        'cod' => 789,
        'precio' => 80000,
        'cantidad' => 1,
        'detalle' => 'Licuadora',
        'icono' => 'electro.png',
    ],
];

// --------------------------------------------
// CONSIGNAS
// --------------------------------------------


// --------------------------------------------
// EJERCIO 1: 
// VALOR TOTAL COFRE CLIENTE-------------------
function getBonifXCofre($cofre)
{
    $configMonedas = getConfig();
    $totalBonificado = 0;
    foreach ($cofre as $moneda) {
        foreach ($configMonedas as $monedaNombre => $value) {
            if ($monedaNombre === $moneda) {
                $totalBonificado += $value;
            }
        }
    }
    return $totalBonificado;
}
$dinero = getBonifXCofre($cofre);

// Validacion:
// echo "<pre>";
// var_dump($dinero);



// --------------------------------------------
// EJERCIO 2: 
// VALOR CANTIDAD MONEDAS COFRE-------------------
function getDetalleXCofre($cofre)
{
    $valorMoneda = getConfig();
    $monedas = [
        'oro' => 0,
        'plata' => 0,
        'bronce' => 0,
        'bonif' => 0,
    ];
    foreach ($cofre as $moneda) {
        if (isset($valorMoneda[$moneda])) {
            $monedas[$moneda]++;
            $monedas['bonif'] += $valorMoneda[$moneda];
        }
    }
    return $monedas;
}
$detallePorMoneda = getDetalleXCofre($cofre);

// Validacion:
// echo "<pre>";
// var_dump($detallePorMoneda);



// --------------------------------------------
// EJERCIO 3: 
// VALOR CANTIDAD MONEDAS COFRE-------------------
function getMontoXProductos($productos)
{
    $valorTotal = 0;
    foreach ($productos as $prod) {

        $valorTotal += ($prod['precio'] * $prod['cantidad']);
    }
    return $valorTotal;

}

$monto = getMontoXProductos($productos);

// Validacion:
// echo "<pre>";
// var_dump($monto);



// VALOR FINAL A PAGAR CON DESCUENTO-----
function totalAPagar($totalProductos, $totalDescuento)
{
    $totalAPagar = $totalProductos;
    if ($totalProductos - $totalDescuento < 0) {
        $totalAPagar = 0;
    } else {
        $totalAPagar = $totalProductos - $totalDescuento;
    }
    return $totalAPagar;
}

$montoFinal = totalAPagar($monto, $dinero);

// Validacion:
// echo "<pre>";
// var_dump($montoFinal);

?>