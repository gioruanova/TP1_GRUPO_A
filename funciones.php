<?php

// Configuracion monedas------
$configMonedas = [
    'Oro' => 200,
    'Plata' => 50,
    'Bronce' => 10
];

// Cofre usuario-----------
$cofre = [
    'oro',
    'plata',
    'bronce',
    'bronce',
];

// Productos----------
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


// Funciones
// VALOR TOTAL COFRE CLIENTE-----
function getBonifXCofre($cofre, $configMonedas)
{
    $totalBonificado = 0;

    foreach ($cofre as $moneda) {
        $monedaLower = strtolower($moneda);

        foreach ($configMonedas as $monedaNombre => $value) {
            if (strtolower($monedaNombre) === $monedaLower) {
                $totalBonificado += $value;
                break;
            }
        }
    }

    return $totalBonificado;
}

$dinero = getBonifXCofre($cofre, $configMonedas);



// VALOR COFRE CLIENTE DETALLE POR MONEDA-----
function getDetalleXCofre($cofre, $configMonedas)
{
    $detalle = [];

    foreach ($cofre as $moneda) {
        $monedaLower = strtolower($moneda);

        foreach ($configMonedas as $monedaNombre => $value) {
            if (strtolower($monedaNombre) === $monedaLower) {
                if (isset($detalle[$monedaNombre])) {
                    $detalle[$monedaNombre]++;
                } else {
                    $detalle[$monedaNombre] = 1;
                }
            }
        }
    }

    return $detalle;
}

$detalle = getDetalleXCofre($cofre, $configMonedas);




// VALOR TOTAL PRODUCTOS CLIENTE-----
function getMontoXProductos($productos)
{
    $valorTotal = 0;
    foreach ($productos as $prod) {

        $valorTotal += ($prod['precio'] * $prod['cantidad']);
    }
    return $valorTotal;

}

$monto = getMontoXProductos($productos);




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

?>