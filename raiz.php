<?php
$numero = readline("Ingrese el numero para la radicacion \n ");
$numero = (float)$numero; 

$grado_raiz = readline("Ingrese el ÍNDICE de la raíz (ej. 2 para cuadrada, 3 para cúbica, etc.)\n ");
$grado_raiz = (int)$grado_raiz; 

// Validaciones
if ($grado_raiz <= 0) {
    echo "Error: El ÍNDICE de la raíz debe ser un número entero o positivo.\n";
} elseif ($numero < 0 and $grado_raiz % 2 == 0) {
    echo "Error: No se puede calcular una raíz con ÍNDICE par de un RADICANDO negativo en el ámbito de los números reales.\n";
} else {
    $resultado = pow($numero, (1 / $grado_raiz));
    echo "La raíz con ÍNDICE " . $grado_raiz . " de RADICANDO " . $numero . " es: " . $resultado . "\n";
}
include 'cal.php';
