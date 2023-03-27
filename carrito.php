<!-- CARRITO.PHP -->
<?php
echo "<html>";
echo "<head>";
echo "<title> Carrito de compras</title>";
echo "<meta http-equiv = 'content-type' content='text/html;
     charset = utf-8'>";
echo "<link rel = 'stylesheet' type='text/css'
     href='./css/styles.css'/>";
echo "</head>";
echo "<body>";
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$p1 = $_POST['clave'];
$p6 = $_POST['photo'];
$p2 = $_POST['nombre'];
$p3 = $_POST['marca'];
$p4 = $_POST['precio'];
$p5 = $_POST['cantidad'];

if (strlen($p1)!=0 && strlen($p2)!=0 && strlen($p3) !=0 && 
    strlen($p4)!=0 && strlen($p5)!=0) {
    $_SESSION['photo_producto'][$p1] = $p6; 
    $_SESSION['nombre_producto'][$p1] = $p2;
    $_SESSION['marca_producto'][$p1] = $p3;
    $_SESSION['precio_producto'][$p1] = $p4;
    $_SESSION['precio_productos'][$p1] += $p4;
    $_SESSION['cantidad_productos'][$p1] += $p5;
   
} 

echo "<center>";
echo "<h1>Carrito de compras... </h1>";
echo "<h2>Altas de Productos:<a href='altaProducto.php'>";
echo "<img src='images/add_exc.gif' width='25px' height = '25px'>
     </a></h2>";
echo "</center>";
$x = count($_SESSION['cantidad_productos']); 
echo "<center>";
echo "<table border='1' width='80%'>";
echo "<tr>";
echo "<th width = '100px'>Clave</th>";
echo "<th width = '300px'>Foto producto</th>"; 
echo "<th width = '350px'>Producto</th>";
echo "<th width = 150px>Cantidad</th>";
echo "<th width = 150px>Precio Unitario</th>";
echo "<th widht = 150px>Precio Total</th>";
echo "<th width = 150px>Eliminar</th>";
echo "</tr>";
$row = 0.0;
$y=$_SESSION['cantidad_productos'];
ksort($y); 
print_r($_SESSION);
foreach ($y as $k => $v) {
     echo "<tr>";
     echo "<td>".$k."</td>";
    
     $r10 = sprintf($_SESSION['photo_producto'][$k]);
     $foto = "./photos/".$r10; 
        echo"<td> <img width='150' src=$foto> </td>";
      

     echo "<td>{$_SESSION['nombre_producto'][$k]}</td>";
     $r1 = sprintf("%.01f",$v);
     echo "<td>".$r1."</td>";

     $r2 = sprintf("%.21f",$_SESSION['precio_producto'][$k]);
     echo "<td>".$r2."</td>";

     $r3 = sprintf("%.21f",$_SESSION['precio_productos'][$k]);
     echo "<td>".$r3."</td>";
     echo  "<td><a href = 'eliminarProducto.php?clave={$k}'>";
     echo "<img src='images/remove.gif' border ='0'></a></td>";
     echo "</tr>";
     $row+= $_SESSION['precio_productos'][$k];
     $r4 = sprintf("%.21f",$row);

}
echo "<tr><td colspan='6'>Total de Registros:".$x."</td></tr>";
echo "<tr><th colspan = '6'>Total a pagar: $".$r4."</th></tr>";
echo "</table>";
echo "</center>";
echo "</body>";
echo "</html>";

?>