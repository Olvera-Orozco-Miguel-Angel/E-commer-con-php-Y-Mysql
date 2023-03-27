<?php
include('producto.php');
session_start();
echo "<html>";
echo "<head>";
echo "<title>Cat&#255;logo de libros de Qu&#237;miica</title>";
echo "<meta http-equiv='content-type' content='text/html; charset=utf-8'>";
echo "<link rel = 'stylesheet' type='text/css'
      href='./css/styles.css'/>"; 
echo "</head>";
echo "<body>";
echo "<center>";
echo "<h1>Cat&#225;logo de libros de Qu&#237;mica</h1>";

$obj = new Producto;
include('conexion.php');
$query="select clave,photo,nombre,marca,precio
        from libro order by clave;";
$result = $connection->query($query);
if (!$result) {
    echo ("No se ha podido ralizar la consulta");
    exit();
}
$nrows = $result->num_rows;
$connection->close();

$foto ="";
for ($i = 0; $i < $nrows; $i++) { 
    $result->data_seek($i);
    $row = $result->fetch_assoc();

    echo "<form action = 'carrito.php' method='post'>";
    
    echo "<hr>";
    echo "<table border = '0.5'>";

    echo "<tr>";
    $foto = "./photos/".$row['photo'];   
    echo"<td> <img width='110'  src=$foto> </td>";
    echo "<tr>";


    echo "<td>";
    echo $row['clave'];
    echo ",&#160";
    echo "</td>";
    echo "<td>";
    echo "<td>";
    echo $row['nombre'];
    echo ",&#160";
    echo "</td>";
    echo "<td>";
    echo $row['marca'];
    echo ",&#160";
    echo "</td>";
    echo "<td>";
    echo "&#160;($&#160;";
    echo $row['precio'];
    echo ")";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td colspan = '4'>";
    echo "<input type='submit' value='Agregar al Carrito'>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    echo "<input type = 'hidden' name='cantidad' value='1'>";
    echo "<input type = 'hidden' name='clave'
            value='",$row['clave'],"'>";
// cambios aquí
    echo "<input type = 'hidden' name='photo' 
           value='",$row['photo'],"'>";
    echo "<input type = 'hidden' name='nombre'
            value ='",$row['nombre'],"'>";
    echo "<input type = 'hidden' name='marca'
          value ='",$row['marca'],"'>";

    echo "<input type='hidden' name='precio'
            value='",$row['precio'],"'>";
    echo "</form>";

}

echo "</center>";
echo "</body>";
echo "</html>";
