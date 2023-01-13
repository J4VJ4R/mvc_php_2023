<?php



class App{
    function __construct(){
        echo "<p> Nueva app </p>";
        
        //metodos
        
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        // var_dump($url);
        $archivoController = 'controllers/' . $url[0] . '.php';
        //Manage errors
        if(file_exists($archivoController)){
            require_once $archivoController;
            $controller = new $url[0];
        }else{
            $controller = new Error();
        }
    }
}

