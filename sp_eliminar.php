<?php
    $s= ( empty($_POST['serie']) ) ? NULL : $_POST['serie'];
  


	$connction= mysqli_connect("127.0.0.1","root","","dbexamen");
  	$sql="DELETE FROM producto WHERE serie = '$s' ";
    $root=mysqli_query($connction,$sql);

    if (!$root) {

    		echo "Error en la instruccion";
    }

    else 
    {
    	header("Location: index.php");
    }
    ?>