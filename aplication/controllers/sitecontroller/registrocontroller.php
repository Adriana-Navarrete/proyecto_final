<pre>
<?php
    
    include ('../../models/usuarios.php');
    include ('../../models/modelo.php');
    include ('../../libs/adodb5/adodb.inc.php');
    
    $usuario = new Usuarios();
    $rs = $usuario->consulta_datos();
    print_r($rs->GetRows());

?>
</pre>