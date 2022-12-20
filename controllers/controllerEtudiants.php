<?php
require_once('models/modelEtudiants.php');

function addOneEtudiants(){
    if (!empty($_POST['Nom']) && !empty($_POST['Prenom']) && !empty($_POST['INE'])) {
        addEtudiants($_POST['Nom'], $_POST['Prenom'], $_POST['INE']);       
    }
    require_once('views/viewEtudiants.php');
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
?>  