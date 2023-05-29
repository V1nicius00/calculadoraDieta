<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Calculadora de TMB</title>
</head>
<body>

    <nav id="nav">
        <p><a href="imc.php">Calculadora IMC</a></p>
        <p><a href="tmb.php">Calculadora TMB</a></p>
        <p><a href="macros.php">Calculadora de Macros</a></p>
    </nav>

    <main id="container">

        <h1>Calculadora de Metabolismo Basal</h1>

            <form action="" method="POST" id="form">

            <label for="" class="label-form">Peso</label>
            <input type="number" name="weight" placeholder="Peso..." required class="input" autocomplete="off">

            <label for="" class="label-form">Altura</label>
            <input type="number" name="height" placeholder="Altura... (em cm)" required class="input" autocomplete="off">

            <label for="" class="label-form">Idade</label>
            <input type="number" name="age" placeholder="Idade..." required class="input" autocomplete="off">

            <label for="" class="label-form">Gênero</label>
            <div class="radio">
                <div class="radio-row">
                    <input type="radio" name="gender" id="radio-m" value="m" required> 
                    <label for="radio-m" class="label-radio">Masculino</label>
                </div>
                <div class="radio-row">
                    <input type="radio" name="gender" id="radio-f" value="f" required> 
                    <label for="radio-f" class="label-radio">Feminino</label>
                </div>
            </div>

            <button class="btn">Calcular</button>

        </form>

        <?php

            include('../php/calculadora_tmb.php');

        ?>

    </main>

    
</body>
</html>