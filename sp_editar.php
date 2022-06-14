<?php
    $s= ( empty($_POST['serie']) ) ? NULL : $_POST['serie'];
    $n= ( empty($_POST['nombre']) ) ? NULL : $_POST['nombre'];
    $m=  ( empty($_POST['marca'])  ) ? NULL : $_POST['marca'];
    $c= ( empty($_POST['costo']) ) ? NULL : $_POST['costo'];
    $e= ( empty($_POST['existencia']) ) ? NULL : $_POST['existencia'];


	$connction= mysqli_connect("127.0.0.1","root","","dbexamen");
  	$sql="UPDATE producto SET nombre='$n',marca='$m',costo='$c',existencia='$e' WHERE serie = '$s' ";
    $root=mysqli_query($connction,$sql);

    if (!$root) {

    		echo "Error en la instruccion";
    }

    else 
    {
    	header("Location: index.php");
    }
    ?>