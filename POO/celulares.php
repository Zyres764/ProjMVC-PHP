<?php
  
    class Celular {
        var $nome;
        var $marca;
        var $tamanhoT;
        var $memoriaI;
        var $ram;
        var $preco;


        function Celular($nom, $mar, $taman, $memo, $memoram, $valor){

            $this->nome = $nom;
            $this->marca = $mar;
            $this->tamanhoT = $taman;
            $this->memoriaI = $memo;
            $this->ram = $memoram;
            $this->preco = $valor;
        }

        function Resultado(){
            echo"<br>Nome: $this->nome";
            echo" <br>Marca: $this->marca";
            echo"<br>tamanho Tela: $this->tamanhoT";
            echo"<br>Memoria Interna: $this->memoriaI";
            echo"<br>Memoria Ram: $this->ram";
            echo"<br>Preço: $this->preco";
        }

    }
$iphoneX = new Celular("iPhoneX",  "iphone","8.7","256GB","3Gb","4.449");
$Galaxi = new Celular("GalaxiS20",  "S20","8.7","256GB","3Gb","4.449");
$MotoG9 = new Celular("MotoG9",  "G9","8.7","256GB","3Gb","4.449");


$iphoneX->Resultado();
$Galaxi->Resultado(); 
$MotoG9->Resultado();
?>