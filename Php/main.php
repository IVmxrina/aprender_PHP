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


// 3º Hacemos un ' include '  o un  ' require ' para añadir los datos de la conexion a la BD 

include '/BD/bd.php';

// 4º Ahora comprobamos que la conexion a la base de datos se a realizado correctamente
// Esto se hace mediante un if; si si la conexion es incorrecta nos devuelve un error;
// Si la conexion es bien continuara el if y podemos hacer consultas a la BD

if(!$conexion){
    die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
}else{
   
   
    // mysqli_set_charset($con, "utf8");
    // echo "Se ha establecido correctamente la conexion a la base de datos <br>";

    // $sql="INSERT INTO `daw2`.`Alumnos` (`correo`, `contraseña`) VALUES ('".$correo."', '".$contraseña."')";
    
    // $consulta=mysqli_query($con,$sql);

    // if(!$consulta){
    //     die("No se ha podido realizar el insert");
    // }else{
    //     echo "El insert se ha realziado correctamente.";
    // }

    
}


?>