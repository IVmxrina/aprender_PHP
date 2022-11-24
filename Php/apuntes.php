<?php

//APUNTES

//En PHP no se puede editar el estilo :(
    //Tienes que hacerlo desde Html

//echo  sirve como 'print'
echo "Hola mundo!";

//Salto de linea
echo "<br>";

//Creacion de variables
$x = 5;
$y = 8;
$suma = $x + $y;

//Para concatenar se usa el punto ( . )
echo "La suma de " . $x . " y de " . $y . " es " . $suma;

echo "<br>";

//Para hacer constantes se escribe: define      El nombre va en Mayus
define("PI",3.14192);
echo "La variable PI vale " . PI;

echo "<br>" . "<br>";

//Funciones: function
function saludar($nombre) {
    echo "Hola " . $nombre;
}

saludar("Juan.");

echo "<br><br> ";
echo "Comparacion de variables: <br>";

//Condicion
if($x > $y){
    echo $y . " es mayor que " . $x;
}else {
    echo $x . " es menor que " . $y;
}

echo "<br>";

/*  PETA
//Bucles (for)
for ($variable = 1; $variable < 10; $variable ++) {
    if($variable = 5){
        echo"Ya se han hecho la mitad de comprobaciones...";
    }
    echo $variable;
    
}
*/

echo "<br>";

//Arrays
$array = array(1,2,3,4);
foreach($array as $valor) {
    echo "$valor";
}



?>