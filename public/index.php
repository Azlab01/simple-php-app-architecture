<?php 
    require '../vendor/autoload.php';

    $uri = $_SERVER["REQUEST_URI"];
    $router = new AltoRouter();
    require "../config/route.php";

$match = $router->match();
if (is_array($match)) {    
    //si la cible est une fonction de callback
    if (is_callable($match['target'])) {        
        call_user_func_array($match["target"], $match["params"]);
    } else {
        $params = $match['params'];
        ob_start();
            require "../ressources/pages/{$match['target']}.php";
        $l_content = ob_get_clean();
    }
            
    require '../ressources/layout.php';
}else {
    echo "404";
}

