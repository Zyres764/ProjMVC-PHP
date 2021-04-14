<?php
  
    class Calculadora {
        var $Valor1;
        var $Valor2;
        


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


    $conta1 = new Calculadora(1, 5);
    $conta2 = new Calculadora("9", "3");
    $conta3 = new Calculadora("3", "7");

    $conta1->Soma($v1, $v2 );
    
    ?>