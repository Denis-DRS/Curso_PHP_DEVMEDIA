<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <h1> Calculo de Combustível </h1>
    </header>
    <main>
        <section class="painel">
            <h2> Instruções </h2>
            <div class="conteudo-painel">
                <p> Esta aplicação tem como finalidade demonstrar os valores que serão gastos com 
                    combustível durante uma viagem, com base no consumo do seu veículo, e com
                    a distância determinada por você!</p>
            </div>
        </section>
        <section class="painel">
            <h2> Tipos de Combustíveis </h2>
            <div class="conteudo-painel">
                <p> Os tipos de combustíveis para este calculo são: </p>
                <ul type="square">
                    <li> Álcool </li>
                    <li> Diesel </li>
                    <li> Gasolina </li>
                </ul>
            </div>
        </section>
        <section class="painel">
            <h2> Calculo do valor (R$) do consumo </h2>
            <div class="painel">
                <form action="calculo.php" method="POST">
                
                    <label for="distancia"> Distância em quilômetros a ser percorrida </label>
                    <input type="number" name="distancia" min="1" required>
                
                    <label for="autonomia"> Consumo de combustível do veículo (Km/l) </label>
                    <input type="number" name="autonomia" min="1" required>
                
                    <button class="botão"> Calcular </button>
                </form>
            </div>
        </section>   
    </main>
</body>
</html>