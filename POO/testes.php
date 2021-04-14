<?php

     class Conta {
      var $saldo;
        
         function Conta($valor) {
       $this->saldo = $valor;
       
       } 
       
       function transferirValor($valor){

        $this->saldo -= $valor;
        echo"transferencia realizada $valor<br>";
       }

      function saldo() {

        echo"o valor da conta é  $this->saldo ";

      }
    }
      $novaConta = new Conta(2000);
      $novaConta->saldo();
      $novaConta->transferirValor(50);
      $novaConta->saldo();
?>