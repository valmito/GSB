<?php
$pdo=PdoGsb::getdoGsb;
session_start();
switch($uc){
    case 'connexion':{
        include("controleur/connexionControlleur");
    }
}
?>