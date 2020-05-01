<?php
    $host = "localhost";
    $port = "5432";
    $dbname = "prueba";
    $user = "postgres";
    $password = "123456"; 

    try {
        $connection_string = "host={$host} port={$port} dbname={$dbname} user= 
              {$user} password={$password} ";
        $dbconn = pg_connect($connection_string);     

        if(!$dbconn){
            echo "Ocurrió un error con la base de datos"; 
        }

    } catch (Exception $e) {
        echo "Ocurrió un error con la base de datos: " . $e->getMessage();
    }
    
?>
