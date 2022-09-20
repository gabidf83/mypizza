<?php

    include('partials/menu.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res==TRUE)
    {
        $_SESSION['delete'] = "<div class='success'>Administrador borrado</div>";
        header("location:".SITEURL.'manage-admin.php');
    }
    else{
        $_SESSION['delete'] = "<div class='error'>Error al borrar administrador</div>";
        header("location:".SITEURL.'manage-admin.php');
    }




    include('partials/footer.php');

?>