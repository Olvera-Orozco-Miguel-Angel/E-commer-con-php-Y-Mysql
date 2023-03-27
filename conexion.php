
<?php
$servidor="127.0.0.1";
$usuario="root";
$password="mysqlMAO97";
$db="productos";
$connection = new mysqli($servidor, $usuario, $password, $db);
if( $connection -> connect_errno ){
    echo("Problemas de conexi&#243;n con la base de datos");
    exit();
}
if(!$connection->set_charset("utf8")){
    printf("Error al cargar el conjunto de caracteres utf8:%s\n",
        $connection->error);
    exit ();
}
/*
vamos a ver si funciona
*/
?>
