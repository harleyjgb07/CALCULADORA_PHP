<?php

while (true) {
    echo "OPERACIONES BÁSICAS\n";
    echo "Escoja alguna de las siguientes operaciones:\n";
    echo "1. Suma\n2. Resta\n3. Multiplicación\n4. División\n";

    $option = readline("Ingrese una opción (1-4): ");

    switch ($option) {
        case "1":
            $resultado = 0; 
            $cantidad = readline("¿Cuántos números quiere sumar? ");
            for ($i = 0; $i < $cantidad; $i++) { 
                $num = readline("Ingrese un número: ");
                $resultado += $num; 
            }
            echo "El resultado de la suma es: " . $resultado . "\n";
            break 2; // salir del bucle while y continuar con cal.php

        case "2":
            $num1 = readline("Ingrese el primer número: ");
            $num2 = readline("Ingrese el segundo número: ");
            $resultado = $num1 - $num2;
            echo "El resultado de la resta es: " . $resultado . "\n";
            break 2;

        case "3":
            $num1 = readline("Ingrese el primer número: ");
            $num2 = readline("Ingrese el segundo número: ");
            $resultado = $num1 * $num2;
            echo "El resultado de la multiplicación es: " . $resultado . "\n";
            break 2;

        case "4":
            $num1 = readline("Ingrese el primer número: ");
            $num2 = readline("Ingrese el segundo número: ");
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                echo "El resultado de la división es: " . $resultado . "\n";
            } else {
                echo "No se puede dividir por cero.\n";
            }
            break 2;

        default:
            echo "Opción no válida. Intente de nuevo.\n";
    }
}

include 'cal.php';
?>
