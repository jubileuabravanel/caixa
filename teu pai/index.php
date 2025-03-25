<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Caixa</title>
    <style>
        img.nota {
            height: 40px;
            margin: 5px;
        }

        section img {
            position: relative;
            top: 17px;
        }
    </style>
</head>
<body>
<?php

$valor = $_REQUEST['valor'] ?? 0;

?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <div class="conteudo">
        <div class="valores">

            <div class="caixa">
                <h2>Caixa Eletrônico</h2>
            </div>

            <label for="valor" style="font-size: 0.6em">Qual valor você deseja sacar (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>">
            <br>
            <p style="font-size: 0.6em" ><sup>*</sup>Notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <br><br>
            <div class="botao">
                <button type="submit"><h3>Sacar</h3></button>
            </div>
        </div>
    </div>
</form>

<?php

$resto = $valor;

    $mon100 = floor($resto / 100);
    $resto %= 100;


    $mon50 = floor($resto / 50);
    $resto %= 50;


    $mon20 = floor($resto / 20);
    $resto %= 20;

    $mon10 = floor($resto / 10);
    $resto %= 10;

    $mon5 = floor($resto / 5);
    $resto %= 5;


    $mon2 = floor($resto / 2);
    $resto %= 2;

    $mon1 = floor($resto / 1);
    $resto %= 1;

?>

<section>
    <div class="grana">
        <h2>Saque de R$<?=number_format($valor, 2, ",", ".")?> realizados</h2>
        <p>o caixa eletrônico vai entregar as seguintes notas:</p>
        <ul>
            <li><?=$mon100?> Notas de <img src="./100conto.jpg" alt="100conto" class="nota"></li>
            <li><?=$mon50?> Notas de <img src="./50conto.png" alt="50conto" class="nota"</li>
            <li><?=$mon20?> Notas de <img src="./20conto.jpg" alt=20conto" class="nota"</li>
            <li><?=$mon10?> Notas de <img src="./10conto.jpg" alt="10conto" class="nota"</li>
            <li><?=$mon5?> Notas de <img src="./5conto.jpg" alt="5conto" class="nota"</li>
            <li><?=$mon2?> Notas de <img src="./2conto.jpg" alt="2conto" class="nota"</li>
            <li><?=$mon1?> Moeda de <img src="./1real.png" alt="1conto" class="nota"</li>
        </ul>
    </div>
</section>
</body>
</html>