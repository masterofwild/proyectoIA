<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="estilo.css">
   <script>
   window.onload = function(){
    alert('Esta es la mejor recomendación para tu compra');
   }
   </script>
</head>
<body>
<table>

<tr>
    <th>Producto</th>
    <th>Cantidad</th>
    <th>Precio</th>
    <th>Tienda</th>
</tr>

   <?php
   require('conexion.php');
   
   $producto = $_POST['producto'];

   $query = "SELECT * FROM productos where nombre = '".$producto."' order by precio limit 1";

   $result = mysqli_query($connect, $query);
   while($crow = mysqli_fetch_assoc($result))
            			{	
?>


  <tr>
    <td><?php echo $crow['nombre']; ?></td>
    <td><?php echo $crow['cantidad']; ?></td>
    <td><?php echo $crow['precio']; echo ' ';?>pesos</td>
    <td><?php echo $crow['tienda']; ?></td>
  </tr>

  <?php
  	    	}		
   ?>
</table>
</body>
</html>