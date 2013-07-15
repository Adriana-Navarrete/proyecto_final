<?php

    include('../layouts/header.php');

?>

<form class="form-horizontal" id="formulario" method="post" action="../../controllers/sitecontroller/registro_controller_usuarios.php">
    <fieldset>
        <legend>INSERTA TUS DATOS</legend>
        <div class="control-group">
            <label class="control-label" for="apellido_paterno">APELLIDO PATERNO</label>
            <div class="controls">
                <input id="apellido_paterno" name="apellido_paterno" type="text" maxlength="120" required="text" placeholder="Apellido Paterno" autofocus>
            </div>
        </div>
        <br>
        <div class="control-group">
            <label class="control-label" for="apellido_materno">APELLIDO MATERNO</label>
            <div class="controls">
                <input id="apellido_materno" name="apellido_materno" type="text" maxlength="120" required="text" placeholder="Apellido Materno">
            </div>
        </div>
        <br>
        <div class="control-group">
            <label class="control-label" for="nombre">NOMBRE</label>
            <div class="controls">
                <input id="nombre" name="nombre" type="text" maxlength="120" required="text" placeholder="Nombre">
            </div>
        </div>
        <br>
        <div class="control-group">
            <label class="control-label" for="sexo">SEXO</label>
            <div class="controls">
                <input id="sexo" name="sexo" type="radio" maxlength="120" value="H" required="checked">HOMBRE
                <br>
                <input id="sexo" name="sexo" type="radio" maxlength="120" value="M" required="checked">MUJER
            </div>
        </div>
        <br>
        <div class="control-group">
            <label class="control-label" for="edad">EDAD</label>
            <div class="controls">
                <input id="edad" name="edad" type="number" maxlength="2" required="number" placeholder="18">
            </div>
        </div>
        <br>
        <div class="control-group">
            <label class="control-label" for="email">EMAIL</label>
            <div class="controls">
                <input id="email" name="email" type="email" maxlength="200" required="email" placeholder="usuario@dominio.com">
            </div>
        </div>
        <br>
        <div class="control-group">
            <label class="control-label" for="nctr_rfc">R.F.C.</label>
            <div class="controls">
                <input id="nctr_rfc" name="nctr_rfc" type="text" maxlength="13" required="text" placeholder="XXXX123456XX1">
            </div>
        </div>
        <br>
        <div class="control-group">
            <label class="control-label" for="numero_control">NUMERO DE CONTROL</label>
            <div class="controls">
                <input id="numero_control" name="numero_control" type="number" maxlength="8" required="number" placeholder="00000000">
            </div>
        </div>
        <br>
        <div class="">
            <button id="guardar" name="guardar" type="submit" class="btn btn-success">GUARDAR</button>
            <button id="borrar" name="borrar" type="reset" class="btn btn-danger">BORRAR</button>
            <button id="regresar" name="regresar" type="button" onClick="window.location.href='inicio.php'" class="btn btn-warning">REGRESAR</button>
        </div>
    </fieldset>
</form>

<?php

    include('../layouts/footer.php');

?>