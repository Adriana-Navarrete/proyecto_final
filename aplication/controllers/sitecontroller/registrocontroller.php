<pre>
<?php
    
    include ('../../models/modelo.php');    
    include ('../../models/usuarios.php');
    include ('../../libs/adodb5/adodb.inc.php');
    
    $usuario = new Usuarios();
    $usuario->inserta_datos();
    $rs = $usuario->consulta_datos();
    print_r($rs->GetRows());

?>
</pre>