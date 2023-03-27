<!-- eliminarProducto.php -->
<?php
echo "<html>";
echo "<head>";
echo "<title>Bajas de Producto</title>";
echo "<meta http-equiv = 'content-type' content='text/html;
     charset = utf-8'>";
echo "<link rel = 'stylesheet' type='text/css'
     href='./css/styles.css'>";
echo "</head>";
echo "<body>";
session_start();
$p1 = $_GET['clave'];
if (strlen($p1) != 0) {
    unset($_SESSION['photo_producto'][$p1]);
    unset($_SESSION['nombre_producto'][$p1]);
    unset($_SESSION['marca_producto'][$p1]);
    unset($_SESSION['precio_producto'][$p1]);
    unset($_SESSION['precio_productos'][$p1]);
    unset($_SESSION['cantidad_productos'][$p1]);

    
    echo "<center>";
    echo "<h2>Se ha eliminado el producto con clave: ";
    echo $p1;
    echo "...! </h2>";
    echo "</center>";
}
echo "<center>";
echo "<h2><a href='carrito.php'>Carrito de compras</a></h2>";
echo "</center>";
echo "</body>";
echo "</html>"
?>