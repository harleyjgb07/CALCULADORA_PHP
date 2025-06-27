<?php
echo "\n BIENVENIDOS A LA CALCULADORA \n";
echo "Escoge una de las siguientes opciones \n";
echo "1. Operaciones Basicas. \n2. raices. \n3. Seno. \n4. Salir. \n";
$option = readline();
switch($option){
    case "1":
       include_once 'op.php';
       break;
    case "2":
        include_once 'raiz.php';
        break;
    case "3":
        include_once 'seno.php';
        break;
    case "4":
        echo "Gracias Por participacion en la calculadora";
        exit;
}