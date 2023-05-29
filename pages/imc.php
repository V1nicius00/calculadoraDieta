<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Calculadora de IMC</title>
</head>
<body>

    <nav id="nav">
        <p><a href="imc.php">Calculadora IMC</a></p>
        <p><a href="tmb.php">Calculadora TMB</a></p>
        <p><a href="macros.php">Calculadora de Macros</a></p>
    </nav>

    <main id="container">

        <h1>Calculadora IMC</h1>
    
        <form action="" method="POST" id="form">
    
            <label for="weight" class="label-form">Digite seu peso</label>
            <input type="number" name="weight" placeholder="Peso..." required class="input" autocomplete="off">
            <br>
            <label for="height" class="label-form">Digite sua altura</label>
            <input type="number" name="height" placeholder="Altura... (em cm)" required class="input" autocomplete="off">
            <br>
            <button class="btn">Calcular</button>

        </form>

            <?php

                include('../php/calculadora_imc.php');

            ?>

    </main>

    
</body>
</html>