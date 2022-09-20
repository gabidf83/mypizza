<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Gestión del administrador</h1>

        <br/> <br/>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> cd52f30510ad8e7184d31a8f67eeaf9cbdc78242

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }
<<<<<<< HEAD

            if(isset($_SESSION['user-not-found']))
            {
                echo $_SESSION['user-not-found'];
                unset($_SESSION['user-not-found']);
            }

            if(isset($_SESSION['psw-not-match']))
            {
                echo $_SESSION['psw-not-match'];
                unset($_SESSION['psw-not-match']);
            }

            if(isset($_SESSION['change-psw']))
            {
                echo $_SESSION['change-psw'];
                unset($_SESSION['change-psw']);
            }

            if(isset($_SESSION['error-change-psw']))
            {
                echo $_SESSION['error-change-psw'];
                unset($_SESSION['error-change-psw']);
            }
=======
=======
>>>>>>> aae42952bd241911c7d4a9ac0310bf7adc640939
>>>>>>> cd52f30510ad8e7184d31a8f67eeaf9cbdc78242
        ?>

        <br/> <br/>

        <a href="add-admin.php" class="btn-primary">Añadir administrador</a>

        <br/> <br/> <br/>

        <table class="tbl-full">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>

            <?php
                //obtenemos los datos de la tabla tbl_admin
                $sql = "SELECT * FROM tbl_admin";
                $res = mysqli_query($conn, $sql) or die (mysqli_error());

                if($res==TRUE)
                {
                    //si hay datos en la tabla obtenemos el numero de filas
                    $count = mysqli_num_rows($res);
                    
                    if($count>0)
                    {
                        //con un while recorremos los resultados
                        while($rows=mysqli_fetch_assoc($res))
                        {
                            $id = $rows['id'];
                            $full_name = $rows['full_name'];
                            $username = $rows['username'];

            ?>

                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $full_name ?></td>
                                <td><?php echo $username ?></td>
                                <td>
<<<<<<< HEAD
                                    <a href="<?php echo SITEURL;?>update-password.php?id=<?php echo $id; ?>" class="btn-primary">Cambiar contraseña</a>
                                    <a href="<?php echo SITEURL;?>update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Actualizar</a>
=======
<<<<<<< HEAD
                                    <a href="<?php echo SITEURL;?>update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Actualizar</a>
=======
                                    <a href="#" class="btn-secondary">Actualizar</a>
>>>>>>> aae42952bd241911c7d4a9ac0310bf7adc640939
>>>>>>> cd52f30510ad8e7184d31a8f67eeaf9cbdc78242
                                    <a href="<?php echo SITEURL;?>delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Borrar</a>
                                </td>
                            </tr>

            <?php
                        }
                    }
                    else
                    {

                    }
                }
            ?>

        </table>

    </div>

    <div class="clearfix"></div>

</div>

<?php include('partials/footer.php'); ?>