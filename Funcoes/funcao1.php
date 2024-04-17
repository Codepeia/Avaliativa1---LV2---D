<?php

    function mensagem(){
        echo "Bem vindos";
    }
    mensagem();

    function soma($n1, $n2){
        $soma = $n1 + $n2;
        echo "Soma: $soma";
        return $soma;
    }

    $res = soma(1,4);

    echo "Resutado: $res";

    function sub($resultadoSoma){
        $resSub = $resultadoSoma - 1;
        echo $resSub;
        return $resSub;
    }

    $r = sub(soma(10,34));

?>

Criar um sistema de gestão de estoque. O sistema deverá calcular
o preço total de uma compra, levando em consideração o preço 
unitário de cada produto e a quantidade comprada. Alem do
do preço unitário, alguns produtos tem um desconto de 10% 
aplicado na compra de 10 produtos ou mais.
Usar matrizes e funções na solução.






