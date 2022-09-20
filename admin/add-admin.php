<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Añadir administrador</h1>

        <br/>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <br/>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Nombre</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Inserte nombre">
                    </td>
                </tr>
                <tr>
                    <td>Usuario</td>
                    <td>
                        <input type="text" name="username" placeholder="Inserte usuario">
                    </td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td>
                        <input type="password" name="password" placeholder="Inserte contraseña">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Añadir administrador" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>



<?php include('partials/footer.php'); ?>

<?php

    //al pulsar el submit, cogemos los datos del POST, los metemos en variables y las utilizamos para crear la consulta SQL

    if(isset($_POST['submit']))
    {
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //encriptamos con md5

        $sql = "INSERT INTO tbl_admin SET 
            full_name = '$full_name',
            username = '$username',
            password = '$password'
            ";
        


        $res = mysqli_query($conn, $sql) or die (mysqli_error());

        if($res==TRUE)
        {
            //si hemos añadido el administrador correctamente lanzamos mensaje y redirigimos a gestion de admnistradores
            $_SESSION['add'] = "<div class='success'>Administrador añadido correctamente</div>";
            header("location:".SITEURL.'manage-admin.php');
        }
        else
        {
            //si no hemos añadido el administrador correctamente lanzamos mensaje y redirigimos a añadir admnistradores
            $_SESSION['add'] = "<div class='error'>Error, vuelva a intentarlo</div>";
            header("location:".SITEURL.'admin/add-admin.php');
        }

    }

?>