<?php
$servername = 'localhost';
$conectionInfo = array("Database"=>"pag_perros", "UID"=>"pag_perros", "PWD"=>"123", "CharacterSet"=>"UTF-8");
$con = sqlsrv_connect($servername,$conectionInfo);

if($con)
{
    echo"conexion exitosa";
    
}
else
{
    echo "fallo la conexion";
}

    
?>