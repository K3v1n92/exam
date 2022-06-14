<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
            
        </form>
    </div>

    <div>
        <table border="1">
            <tr>
            <td>SERIE</td>
            <td>NOMBRE</td>
            <td>MARCA</td>
            <td>COSTO</td>
            <td>EXISTENCIA</td>
            <td>PROVEEDOR</td>
            </tr>
            <?php
                $buscar = $s= ( empty($_POST['serie']) ) ? NULL : $_POST['serie'];

                $connction= mysqli_connect("127.0.0.1","root","","dbexamen");
                $sql="SELECT serie,nombre,marca,costo,existencia from producto where serie = $buscar ";
                $root=mysqli_query($connction,$sql);

                while ($mostrar=mysqli_fetch_row($root)) {
                ?>
                    <tr>
                        <td><?php echo $mostrar['0'] ?> </td>
                        <td><?php echo $mostrar['1'] ?> </td>
                        <td><?php echo $mostrar['2'] ?> </td>
                        <td><?php echo $mostrar['3'] ?> </td>
                        <td><?php echo $mostrar['4'] ?> </td>
                        <td>
                         <a href="editar.php?

                         serie=<?php echo $mostrar['0'] ?> &
                         nombre=<?php echo $mostrar['1'] ?> &
                         marca=<?php echo $mostrar['2'] ?> &
                         costo = <?php echo $mostrar['3'] ?> &
                         existencia= <?php echo $mostrar['0'] ?>

                         ">Editar</a> 
                         <a href="sp_eliminar.php? id=<?php echo $mostrar['0'] ?>">Eliminar</a>

                        </td>

                    </tr>
                    <?php
                }
                ?>
                       

        </table>
    </div>

</body>
</html>