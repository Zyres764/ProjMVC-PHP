<?php

class Celular {
    Private $Valor1;
    Private $Valor2;
        
    public function __construct(){}

        function Soma($v1, $v2 ){

            $this->Valor1 = $v1;
            $this->Valor2 = $v2;
           

            $this->$v1 + $v2;
        }
        function Subtracao($v1, $v2){

            $this->Valor1 = $v1;
            $this->Valor2 = $v2;
            

            $this->$v1 - $v2;
        }
        function Multiplicacao($v1, $v2, ){

            $this->Valor1 = $v1;
            $this->Valor2 = $v2;
            

            $this-> $v1 * $v2;
        }
        function Divisao($v1, $v2, ){

            $this->Valor1 = $v1;
            $this->Valor2 = $v2;
            

            $this->$v1 / $v2;
        }
        function Resultado(){
            echo"<br>Valor1: $this->Valor1";
            echo" <br>Valor2: $this->Valor2";
            echo"resultado: $this->resultado";

        }

    }

?>