<?php
require_once('models/model.php');
function addCours($pcode, $ptitre, $plangage){
    $bdd = connexionBDD();
    $sql=$bdd->prepare('INSERT INTO cours(code,titre,langage) VALUES (:code,:titre,:langage)');
    $sql->bindvalue(':code',$pcode);
    $sql->bindvalue(':titre',$ptitre);
    $sql->bindvalue(':langage',$plangage);
    
    $result =$sql->execute();
    return $result;

}
