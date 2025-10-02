<?php 

if (isset($_REQUEST["Enviar"])){
    $name = $_REQUEST["Cliente"];
    $sexo = $_REQUEST["sexo"];
    $valor = $_REQUEST["valorcompra"];

    if ($sexo == 'feminino') {
        $desconto = 0.20;
        $valorFinal = $valor - ($valor * $desconto);
        echo "Cliente: $name<br>";
        echo "Sexo: Feminino<br>";
        echo "Valor com 20% de desconto: R$ " . number_format($valorFinal, 2, ',', '.');
    } else if ($sexo == 'masculino') {
        $desconto = 0.05;
        $valorFinal = $valor - ($valor * $desconto);
        echo "Cliente: $name<br>";
        echo "Sexo: Masculino<br>";
        echo "Valor com 5% de desconto: R$ " . number_format($valorFinal, 2, ',', '.');
    } else {
        echo "Sexo não informado corretamente.";
    }
}

?>