<?php
    #Actualiza el valor de la varialbe encargada de guardar la selección durante la sesión.
    if(isset($_POST['table'])){
        $_SESSION['state']['navegate'] = $_POST['table'];
    }
    $table = $_SESSION['state']['navegate'];
?>
<form method="POST" action="admin.php">
    <div class="contenedor-inputs">
        <select class="input-48" name="table">
            <option value="<?php echo $_SESSION['state']['navegate'];?>">-</option>
            <option value="`login`">Usuarios registrados</option>
            <option value="`user-record`">Registro de operaciones</option>
        </select>
        <input class="btn-enviar input 48" type="submit" formaction="admin.php" value="Seleccionar">
    </div>
</form>
<form action="admin.php" method="POST">
    <!-- <input class="input-48" type="number" name="records" placeholder="Entradas">-->
    
    <?php
        #Seleccionar nombres de columnas según la tabla.
        if($table == "`user-record`"){
            ?>
            <select class="input-48" name="order">
                <option class="select-items" value="None">Ordenar por</option>
                <option class="select-items" value="`id-record`">ID Regitro</option>
                <option class="select-items" value="`id-user`">ID Usuario</option>
                <option class="select-items" value="`record-date`">Fecha</option>
                <option class="select-items" value="`record-login`">Ingreso</option>
                <option class="select-items" value="`record-logout`">Egreso</option>
            </select>
            <?php
        } else {
            ?>
            <select class="input-48" name="order">
                <option class="select-items" value="None">Ordenar por</option>
                <option class="select-items" value="`id-user`">ID Usuario</option>
                <option class="select-items" value="`user-email`">Nombre</option>
                <option class="select-items" value="`user-fname`">Apellido</option>
                <option class="select-items" value="`user-lname`">Email de usuario</option>
                <option class="select-items" value="`user-admin`">Tipo de usuario</option>
            </select>
            <?php
        }
    ?>
    <input type="submit" value="Ordenar" class="btn-enviar">
</form>
<table>
    <?php
        #Seleccionar nombres de columnas según la tabla.
        if($table == "`user-record`"){
            ?>
            <tr>
                <th class="table-header">ID Regitro</th>
                <th class="table-header">ID Usuario</th>
                <th class="table-header">Email de usuario</th>
                <th class="table-header">Fecha</th>
                <th class="table-header">Ingreso</th>
                <th class="table-header">Egreso</th>
            </tr>            
            <?php
        } else{
            ?>
            <tr>
                <th class="table-header">ID Usuario</th>
                <th class="table-header">Nombre</th>
                <th class="table-header">Apellido</th>
                <th class="table-header">Email de usuario</th>
                <th class="table-header">Tipo de usuario</th>
            </tr>            
            <?php
        }
    ?>
    <?php
        #Función de ordenar por.
        if (isset($_POST['order'])){
            $order = $_POST['order'];
            if ($order != "None"){
                $order_by = "ORDER BY " . $order;
                $query = "SELECT * FROM $table" . $order_by;
            } else {$query = "SELECT * FROM $table";}
        } else {$query = "SELECT * FROM $table";}

        #Get data.
        $result = mysqli_query($link, $query);

        if($result != false) {
            $rows = mysqli_fetch_array($result);
            if(isset($rows)){
                for($i=0; $i<=$rows; $i++){
                    
                    #Seleccionar variables definidas a mostrar según la tabla.
                    if($table == "`user-record`"){
                        $query_email = mysqli_query($link,"SELECT `user-email` FROM `login` WHERE `id-user`='$rows[1]'");
                        $email = mysqli_fetch_array($query_email);
                        ?>
                            <tr>
                                <td class="id-register"><?php echo $rows['id-record'];?></td>
                                <td class="table-row"><?php echo $rows['id-user'];?></td>
                                <td class="table-row"><?php echo $email['user-email'];?></td>
                                <td class="table-row"><?php echo $rows['record-date'];?></td>
                                <td class="table-row"><?php echo $rows['record-login'];?></td>
                                <td class="table-row"><?php echo $rows['record-logout'];?></td>
                            </tr>
                        <?php
                    } else{
                        if($rows['user-admin'] == "1"){
                            $rows['user-admin'] = "Administrador";
                        } else{$rows['user-admin'] = "Usuario";}
                        ?>
                            <tr>
                                <td class="id-register"><?php echo $rows['id-user'];?></td>
                                <td class="table-row"><?php echo $rows['user-fname'];?></td>
                                <td class="table-row"><?php echo $rows['user-lname'];?></td>
                                <td class="table-row"><?php echo $rows['user-email'];?></td>
                                <td class="table-row"><?php echo $rows['user-admin'];?></td>
                            </tr>
                        <?php
                    }
                    $rows = mysqli_fetch_array($result);
                }
            } else{
                ?>
                <tr><td>Sin registros.</td></tr>
                <?php
            }
        } else{
            ?>
            <tr><td>Sin registros.</td></tr>
            <?php
        }
    ?>
</table>