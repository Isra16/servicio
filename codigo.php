<?php 
$msg="Direccion: ". $_REQUEST['direccion']."\n Motivo: " . $_REQUEST['motivo'] . "\n De: " . $_REQUEST['de'];
$msg = wordwrap($msg, 255);

if(mail("israelarevalo240@gmail.com", "formulario", $msg)){
    echo "Se envió con exito";
}else{
    echo "error";
}

?>