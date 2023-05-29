<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Calculadora de Macros</title>
</head>
<body>

    <nav id="nav">
        <p><a href="imc.php">Calculadora IMC</a></p>
        <p><a href="tmb.php">Calculadora TMB</a></p>
        <p><a href="macros.php">Calculadora de Macros</a></p>
    </nav>

    <main id="container">

        <h1>Calculadora de Macros</h1>

            <form action="" method="POST" id="form">

            <label for="" class="label-form">Taxa Metabólica Basal (TMB)</label>
            <input type="number" name="tmb" placeholder="TMB..." required class="input input-tmb" autocomplete="off">

            <label for="" class="label-form">Sexo</label>
            <div class="radio">
                <div class="radio-row">
                    <input type="radio" name="gender" id="radio-m" value="m" required> 
                    <label for="radio-m" class="label-radio label_macro">Masculino</label>
                </div>
                <div class="radio-row">
                    <input type="radio" name="gender" id="radio-f" value="f" required> 
                    <label for="radio-f" class="label-radio label_macro">Feminino</label>
                </div>
            </div>

            <label for="" class="label-form">Nível de Atividade</label>
            <div class="radio-atv-div">
                <div class="radio-atv">
                    <input type="radio" name="lvl-atv" id="sedentario" value="lvl_1" required> 
                    <label for="sedentario" class="label-radio label_macro">Sedentário</label>
                </div>
                <div class="radio-atv">
                    <input type="radio" name="lvl-atv" id="lev_ativo" value="lvl_2" required> 
                    <label for="lev_ativo" class="label-radio label_macro">Levemente Ativo (exercícios 1-3x na semana)</label>
                </div>
                <div class="radio-atv">
                    <input type="radio" name="lvl-atv" id="ativo" value="lvl_3" required> 
                    <label for="ativo" class="label-radio label_macro">Ativo (exercícios 3-5x na semana)</label>
                </div>
                <div class="radio-atv">
                    <input type="radio" name="lvl-atv" id="mt_ativo" value="lvl_4" required> 
                    <label for="mt_ativo" class="label-radio label_macro">Muito Ativo (exercícios 5-7x na semana)</label>
                </div>
            </div>

            <label for="" class="label-form">Objetivo</label>
            <div class="radio">
                <div class="radio-row">
                    <input type="radio" name="obj" id="emagrecer" value="perder" required> 
                    <label for="emagrecer" class="label-radio label_macro">Emagrecer</label>
                </div>
                <div class="radio-row">
                    <input type="radio" name="obj" id="manter" value="manter" required> 
                    <label for="manter" class="label-radio label_macro">Manter o peso</label>
                </div>
                <div class="radio-row">
                    <input type="radio" name="obj" id="hipertrofia" value="hipertrofia" required> 
                    <label for="hipertrofia" class="label-radio label_macro">Hipertrofia</label>
                </div>
            </div>

            <button class="btn">Calcular</button>

        </form>

        <?php

                include('../php/calculadora_macro.php');
   
        ?>

    </main>

    
</body>
</html>