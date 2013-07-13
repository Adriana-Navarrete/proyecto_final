<pre>
<?php
    
    include ('../../models/modelo.php');    
    include ('../../models/usuarios.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    
    $usuario = new Usuarios();
    //$usuario->inserta_datos();
    //$rs = $usuario->consulta_datos();
    //print_r($rs->GetRows());
    //$usuario->actualiza(1);
    $usuario->elimina();
    $usuario->inserta_datos();
    $usuario->show_grid(20);

?>
</pre>