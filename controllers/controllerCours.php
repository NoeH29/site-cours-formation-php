<?php
require_once('models/modelCours.php');

function addOneCours(){
    if (!empty($_POST['code']) && !empty($_POST['titre']) && !empty($_POST['langage'])) {
        addCours($_POST['code'], $_POST['titre'], $_POST['langage']);       
    }
    require_once('views/viewCours.php');
}      
function updateCours($id){
    $data = getCours($id);
    require_once("views/viewUpdateCours")
    if $_POST['code'] not empty && titre et langage
    updateModelCours($id);
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
?>   