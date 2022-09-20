<?php include('partials/menu.php'); ?>


<div class="maincontent">

    <div class="wrapper">
        <h1>Actualizar contraseña administrador</h1>

        </br></br>

        <?php

            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
            }

        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Contraseña actual: </td>
                    <td>
                        <input type="password" name="current_password" placeholder="Contraseña actual">
                    </td>
                </tr>
                <tr>
                    <td>Nueva contraseña: </td>
                    <td>
                        <input type="password" name="new_password" placeholder="Nueva contraseña">
                    </td>
                </tr>
                <tr>
                    <td>Confirmar contraseña: </td>
                    <td>
                        <input type="password" name="confirm_password" placeholder="Repita nueva contraseña">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input class="btn-secondary" type="submit" name="submit" value="Cambiar contraseña">
                    </td>
                </tr>
            </table>
        </form>

        
    </div>
</div>

<?php
    //al hacer click en el boton...
    if(isset($_POST['submit']))
    {
        //obtenemos los datos del form
        $id = $_POST['id'];
        $current_password = md5($_POST['current_password']);
        $new_password = md5($_POST['new_password']);
        $confirm_password = md5($_POST['confirm_password']);

        //confirmamos si existe un usuario con ese id y contraseña
        $sql = "SELECT * FROM tbl_admin WHERE id='$id' AND password='$current_password'";
        $res = mysqli_query($conn, $sql);
        if($res==TRUE)
        {
            $count = mysqli_num_rows($res);
            if($count==1)
            {
                //id y contraseña correcta
                if($new_password==$confirm_password)
                {
                    $sql2 = "UPDATE tbl_admin SET
                    password='$new_password'
                    WHERE id='$id'";
                    $res2 = mysqli_query($conn, $sql2);
                    if($res2==TRUE)
                    {
                        $_SESSION['change-psw'] = "<div class='success'>Contraseña cambiada correctamente</div>";
                        header("location:".SITEURL.'manage-admin.php');
                    }
                    else{
                        $_SESSION['error-change-psw'] = "<div class='error'>Error al cambiar la contraseña</div>";
                        header("location:".SITEURL.'manage-admin.php');
                    }
                }
                else{
                    $_SESSION['psw-not-match'] = "<div class='error'>La contraseña no coincide</div>";
                    header("location:".SITEURL.'manage-admin.php');
                }
                
            }
            else{
                //id y contraseña incorrecta
                $_SESSION['user-not-found'] = "<div class='error'>Usuario no encontrado</div>";
                //echo $id;
                //echo $current_password;
                //echo $new_password;
                //echo $confirm_password;
                header("location:".SITEURL.'manage-admin.php');
            }
        }

    }

?>

<?php include('partials/footer.php'); ?>