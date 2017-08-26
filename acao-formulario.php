<?php
if(strcasecmp('formulario-ajax', $_POST['metodo']) == 0){
    require_once 'serviceWcf.php';
    $wcf = new serviceWcf;
    $id = $_POST['id'];
    $hash = $_POST['hash'];
    $wcf->GetDados($id,$hash);
}?>