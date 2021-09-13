<?php 

    echo '<h1>Hola Mundo docker xampp!</h1>';

    $conexion = new PDO('mysql:host=172.19.0.2;dbname=xampp', 'root', 'hello1234');

    $res = $conexion->exec('SELECT "Hola a todos"');
    echo $res;

?>