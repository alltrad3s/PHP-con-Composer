<?php

// IF 
if ($edad >= 18) {
    echo "ES MAYOR DE EDAD";
} else {
    echo "ES MENOR DE EDAD";
}

// SWITCH
switch ($opcionEscogida) {
    case 1:
        echo "ELIGIÓ LA OPCIÓN 1";
        break;
    
    case 2:
        echo "ELIGIÓ LA OPCIÓN 2";
        break;

    case 3:
        echo "ELIGIÓ LA OPCIÓN 3";
        break;
    
    default:
        echo "ELIGIÓ UNA OPCIÓN DIFERENTE";
        break;
}

// FOR 
for ($i=1; $i < 6; $i++) { 
    echo $i
}

// RESULTADO: 12345

// WHILE 
while ($opcion != 0) {
    echo "ESTE CICLO NO ACABA HASTA QUE Opcion sea diferente a 0";
}

// IF SIMPLIFICADO
// Condición ? Si es Verdadero : Si es Falso ;
echo true ? "CUMPLE LA CONDICIÓN" : "NO CUMPLE LA CONDICIÓN";