<?php
require_once('models/model.php');
function addEtudiants($pnom, $pprenom, $pine)
{
    $bdd = connexionBDD();
    $sql=$bdd->prepare('INSERT INTO etudiants(nom,prenom,ine) VALUES (:Nom,:Prenom,:INE)');
    $sql->bindvalue(':Nom', $pnom);
    $sql->bindvalue(':Prenom', $pprenom);
    $sql->bindvalue(':INE', $pine);
    
    $result =$sql->execute();
    return $result;
}