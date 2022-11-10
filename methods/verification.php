<?php

function verification($path){
    if(!$_SESSION['id_usuario']){
        header('location: ' .$path);
        exit;
    }

}
?>