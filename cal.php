<?php

while (true) {
    echo "\nBIENVENIDOS A LA CALCULADORA\n";
    echo "Escoge una de las siguientes opciones:\n";
    echo "1. Operaciones Básicas\n";
    echo "2. Raíces\n";
    echo "3. Seno\n";
    echo "4. Salir\n";

    $option = readline("Ingrese una opción (1-4): ");

    if ($option == "1") {
        include_once 'op.php';
    } elseif ($option == "2") {
        include_once 'raiz.php';
    } elseif ($option == "3") {
        include_once 'seno.php';
    } elseif ($option == "4") {
        echo "Gracias por participar en la calculadora\n";
        break; // Salir del bucle while
    } else {
        echo "Opción inválida. Por favor elija una opción del 1 al 4.\n";
    }
}
