<?php
function getCours(){
$bdd=connexionBDD();
$sql="SELECT * FROM cours ORDER BY id";
$resultGetCours=$bdd->query($sql);
return $resultGetCours;
}
function getAllCours() {
    $result=getCours();
    $ligne=$result->fetchAll(PDO::FETCH_NUM);
    require_once('views/viewListe.php');
}