<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Gestión de platos</h1>  

        <br/> <br/>

        <a href="#" class="btn-primary">Añadir plato</a>

        <br/> <br/> <br/>

        <table class="tbl-full">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Gabriel Delgado</td>
                <td>1234</td>
                <td>
                    <a href="#" class="btn-secondary">Actualizar</a>
                    <a href="#" class="btn-danger">Borrar</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Admin</td>
                <td>1234</td>
                <td>
                    <a href="#" class="btn-secondary">Actualizar</a>
                    <a href="#" class="btn-danger">Borrar</a>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>Ana</td>
                <td>1234</td>
                <td>
                    <a href="#" class="btn-secondary">Actualizar</a>
                    <a href="#" class="btn-danger">Borrar</a>
                </td>
            </tr>
        </table>

    </div>

    <div class="clearfix"></div>

</div>

<?php include('partials/footer.php'); ?>