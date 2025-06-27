<?php

echo "operaciones basicas \n";
echo "Escoga alguna de las siguientes operaciones \n";
echo "1. Suma. \n2. Resta. \n3. Multiplicacion. \n4. Division.\n";

$option = readline();

switch($option) {
    case "1":

        $resultado = 0; 
        $cantidad = readline("Cuantos numeros quiere sumar \n");
        for ($i = 0; $i < $cantidad; $i++) { 
            $num = readline("Ingrese un numero: ");
            $resultado += $num; 
        }
        echo "El resultado de la suma es: " . $resultado . "\n";
        break; 

    case "2":
        // Resta
        $num1 = readline("Ingrese el primer numero: ");
        $num2 = readline("Ingrese el segundo numero: ");
        $resultado = $num1 - $num2;
        echo "El resultado de la resta es: " . $resultado . "\n";
        break;

    case "3":
        // Multiplicacion
        $num1 = readline("Ingrese el primer numero: ");
        $num2 = readline("Ingrese el segundo numero: ");
        $resultado = $num1 * $num2;
        echo "El resultado de la multiplicacion es: " . $resultado . "\n";
        break;

    case "4":
        // Division
        $num1 = readline("Ingrese el primer numero: ");
        $num2 = readline("Ingrese el segundo numero: ");
        if ($num2 != 0) { 
            $resultado = $num1 / $num2;
            echo "El resultado de la division es: " . $resultado . "\n";
        } else {
            echo "No se puede dividir por cero.\n";
        }
        break;

    default:
        echo "Opcion no valida.\n";
    break;
}
include 'cal.php'
?>