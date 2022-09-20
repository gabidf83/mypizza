<?php include('partials/menu.php'); ?>

<div class="maincontent">

    <div class="wrapper">
        <h1>Actualizar administrador</h1>

        </br></br>

        <?php

            //aqui obtenemos los datos del administrador seleccionado
            $id = $_GET['id'];
            $sql = "SELECT * FROM tbl_admin WHERE id=$id";
            $res = mysqli_query($conn, $sql);


            if($res==TRUE)
            {
                $count = mysqli_num_rows($res);


                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res);

                    $id = $row['id'];
                    $full_name = $row['full_name'];
                    $username = $row['username'];
                }
                else{
                    header("location:".SITEURL.'manage-admin.php');
                }
            }

        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Nombre</td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Usuario</td>
                    <td>
                        <!--pintamos los datos obtenidos del administrador actual en los input-->
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <!--el id lo pintamos hidden para que no se vea pero poder utilizarlo-->
<<<<<<< HEAD
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
=======
                        <input type="hidden" name="id" value="<?php echo $username; ?>">
>>>>>>> cd52f30510ad8e7184d31a8f67eeaf9cbdc78242
                        <input type="submit" name="submit" value="Actualizar administrador" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php

    if(isset($_POST['submit']))
    {
        //obtenemos los datos del form para hacer el update en la bbdd
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];

        $sql = "UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username'
        WHERE id = '$id'";

        $res = mysqli_query($conn, $sql);

        if($res==TRUE)
        {
            $_SESSION['update'] = "<div class='success'>Administrador actualizado</div>";
            header("location:".SITEURL.'manage-admin.php');
        }
        else{
            $_SESSION['update'] = "<div class='error'>Error al actualizar</div>";
            header("location:".SITEURL.'manage-admin.php');
        }
    }

?>


<?php include('partials/footer.php'); ?>