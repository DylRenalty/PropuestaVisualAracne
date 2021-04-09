<?php 
    require 'config.php';

    $EsFormato=$_POST['EsFormato'];
    $parentid=$_POST['parentid'];
    $name=$_POST['name'];
    $Orden=$_POST['Orden'];
    $Descripción=$_POST['Descripción'];

    $insertar = "INSERT INTO folders (name, parentid, Orden, EsFormato, Descripción) VALUES ('$name', '$parentid', '$Orden', '$EsFormato', '$Descripción')";
    $query = mysqli_query($con, $insertar);

    if($query){
        echo"<script> alert('correcto');
        location.href = 'page-blank.php';
        </script>";

    }else{
        echo "<script> alert('incorrecto');
        location.href = 'page-blank.php';
        </script>";
    }
?>