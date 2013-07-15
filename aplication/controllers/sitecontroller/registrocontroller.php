<pre>
<?php
    
    include ('../../models/modelo.php');    
    include ('../../models/usuarios.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    
    $usuario = new Usuarios();
    
    print_r($_POST);
    //$usuario->inserta_datos();
    //$rs = $usuario->consulta_datos();
    //print_r($rs->GetRows());
    //$usuario->actualiza(1);
    //$usuario->elimina();
    $usuario->set_apellido_paterno($_POST['apellido_paterno']);
    $usuario->set_apellido_materno($_POST['apellido_materno']);
    $usuario->set_nombre($_POST['nombre']);
    $usuario->set_sexo($_POST['sexo']);
    $usuario->set_edad($_POST['edad']);
    $usuario->set_email($_POST['email']);
    $usuario->set_nctr_rfc($_POST['nctr_rfc']);
    $usuario->set_numero_control($_POST['numero_control']);
    
    print_r($usuario->get_atributos());
    $usuario->inserta_datos($usuario->get_atributos());
    
    $usuario->show_grid(20);

?>
</pre>