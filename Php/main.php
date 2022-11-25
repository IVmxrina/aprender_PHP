<?php

//Para obtener datos de un Formulario:

// 1º Crear Variables en PHP (Suelen tener el mismo nombre que las que has puesto en el HTML)
// Se puede usaar el metodo "$_POST" o el metodo "$_GET" . Las diferencias no me acuerdo ahora.

$Marca = $_POST['Marca'];
$Modelo = $_POST['Modelo'];
$Color = $_POST['Color'];

// 2º Comprobamos que se guardan las variables introducidas en el formulario al darle a submit.

echo "Esto es un 'echo' para comprobar que las variables se han introducido con exito. <br><br>";

echo "La marca introducida es " . $Marca . "<br>";
echo "El modelo introducida es " . $Modelo . "<br>";
echo "EL color introducida es " . $Color;






?>