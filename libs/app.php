<?php

// class App{
//     function __construct(){
//         echo "<p> Nueva app </p>";
//     }
// }

class Loteria{
    //atributos
    public $numero;
    public $intentos;
    public $resultado = false;

    //metodo1
    public function __construct($numero, $intentos){
        $this->numero = $numero;
        $this->intentos = $intentos;
    }
    //metodo2
    public function sortear(){
        $minimo = $this->numero /2;
        $maximo = $this->numero * 2;
        for($i = 0; $i < $this->intentos; $i++){
            $int = rand($minimo, $maximo);
            self::intentos($int);
        }
    }
    //metodo3
    public function intentos($int){
        if($int == $this->numero){
            echo "<b>" . $int . " == " . $this->numero . "</b><br>";
            $this->resultado = true;
        }else{
            echo $int . " != " . $this->numero . "<br>";
        }
    }
    //destruct
    public function __destruct(){
        if($this->resultado){
            echo "!Felicidades, has acertado en " . $this->intentos . " intentos. ";
            exit;
        }else{
            echo "!Que lastima,  has perdido en " . $this->intentos . " intentos. ";
            exit;
        }
    }

}
$loteria = new Loteria(10, 5);
$loteria->sortear();