<!doctype html>
<?php
    include("conexion.php");
?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<title>COMPRA</title>
</head>

<body>
    <form method="post" action="Compra.php">
        <div class="form-group">
    <label for="inputAddress">Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Fabián Cruz">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="correo" placeholder="algo@ejemplo.com">
    </div>
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" name="ciudad" placeholder="Monterrey">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Dirección</label>
    <input type="text" class="form-control" name="direccion" placeholder="#999, col. ejemplo.">
  </div>
      <div class="form-group">
    <label for="inputAddress">Perro a comprar</label>
    <input type="text" class="form-control" name="perro" placeholder="Husky">
  </div>
      
  </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Me gustan los perritos c:
      </label>
    </div>
  <button type="submit" class="btn btn-primary" name="insert">Enviar</button>
</form>
    
    <?php
        if(isset($_POST['insert']))
        {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $ciudad = $_POST['ciudad'];
            $direccion = $_POST['direccion'];
            $perro = $_POST['perro'];
            
            $insertar ="INSERT INTO compradores(nombre, correo, ciudad, direccion, perro)VALUES('$nombre', '$correo', '$ciudad', '$direccion', '$perro')";
            
            $ejecutar = sqlsrv_query($con,$insertar);
            
            if($ejecutar)
            {
                echo"Insertado correctamente";
            }

        }
    
    
    ?>
    
    
    
    <script src="js/JQuery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
