<?php
require_once('models/modelListe.php');

function addOneEtudiants(){
    if (!empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['INE'])) {
        addListe($_POST['Nom'], $_POST['Prenom'], $_POST['INE']);       
    }
    require_once('views/viewListe.php');
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
?>