<?php
//Verifica se $_POST recebeu algum valor
if ($_POST) {

    /*Recebendo valores do FRONT-END */
    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];

    //Atribuindo valores fixos de combustíbeis às variáveis
    $valorGasolina = 4.80;
    $valorAlcool = 3.80;
    $valorDiesel = 3.90;

    //Variável vazia para receber os outputs para não ficar repetindo código
    $mensagem = "";

    //Verifica se os valores recebidos são do tipo numérico
    if (is_numeric($distancia) && is_numeric($autonomia)) {
        //Verifica se os valores recebidos são maiores que 0
        if ($distancia > 0 && $autonomia > 0) {

            //Fazendo calculos para cada tipo de combustível
            $calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
            $calculoGasolina = number_format($calculoGasolina, 2, ',', '.');

            $calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
            $calculoAlcool = number_format($calculoAlcool, 2, ',', '.');

            $calculoDiesel = ($distancia / $autonomia) * $valorDiesel;
            $calculoDiesel = number_format($calculoDiesel, 2, ',', '.');

            //Exibindo mensagens com o resultado dos calculos
            $mensagem.= "<div class='sucesso'>";
            $mensagem.= "O valor total gasto será de: ";
            $mensagem.= "<ul>";
            $mensagem.= "<li><b>Gasolina</b> R$ " . $calculoGasolina . "</li>";
            $mensagem.= "<li><b>Alcool</b> R$ " . $calculoAlcool . "</li>";
            $mensagem.= "<li><b>Diesel</b> R$ " . $calculoDiesel . "</li>";
            $mensagem.= "</ul>";
            $mensagem.= "</div>";
        }
        else {
            $mensagem.= "<div class='erro'>";
			$mensagem.= "<b>O valor da distância e da autonomia deve ser maior que zero.</b>";
			$mensagem.= "</div>";
        }
    }
    else {
        $mensagem.= "<div class='erro'>";
		$mensagem.= "<b>O valor recebido não é numérico.</b>";
		$mensagem.= "</div>";
    }
}
else {
    $mensagem = "<div class='erro'>";
	$mensagem.= "<b>Nenhum dado foi recebido pelo formulário</b>";
	$mensagem.= "</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <main>
        <div class="painel">
            <h2>Resultado do cálculo de consumo</h2>
            <div class="conteudo-painel">
                <?php
                    echo $mensagem;
                ?>
                <a class="botao" href="index.php">Voltar</a>
            </div>
        </div>
    </main>
</body>

</html>