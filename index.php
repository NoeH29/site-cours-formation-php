<?php
$root=str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']);
define('ROOT',$root);
echo"<h2>Je suis index: router de l'application MVC procedural</h2>";
//echo $_GET['action'];
//echo "Requête:".$_SERVER['QUERY_STRING'];

    $params = explode("/",$_GET['action']);
    /*echo "param1".$params[0];
    echo "<br/>";
    echo "param2".$params[1];
    echo "<br/>";
    echo "param3".$params[2];
    echo "<br/>";*/
    if ($params[0] !="") {
        $controller = $params[0];
        $action = "";
        if (isset($params[1])) {
            $action = $params[1];
        }
        echo $controller;
        //on a controller et action
        //on inclus donc ce controller
    
        require_once(ROOT.'controllers/'.$controller.'.php');
    
    /* le folder controller n'est pas trouvable(relatif)
    vu qu'on a modifié l'url
    on délcare donc en haut define root pour avoir la racine du site
    on verifi si l'action existe dans le controller qu'on vient de charger il n'existe pas encore , on va le créer*/
    if (function_exists($action)){
        if (isset($params[2]) && isset($params[3])) {
            $action($params[2], $params[3]);
        } elseif (isset($params[2])){
            $action($params[2]);
        } else {
            $action();
        }
    } else {
        echo "page par defaut";
    }
    } else {
    echo "aucune action n'existe";
}
?>