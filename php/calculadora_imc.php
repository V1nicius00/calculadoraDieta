<link rel="stylesheet" href="style.css">    

<?php

    if(isset($_POST['weight']) && isset($_POST['height'])){

        $weight = $_POST['weight'];
        $height = $_POST['height'] / 100;

        $imc = $weight / pow($height, 2);

        $imc_format = number_format($imc, 1);

        if($imc_format < 18.5){
            echo "<p class='result' id='result'> IMC $imc_format - Magreza</p>";
        } else if($imc_format > 18.5 && $imc_format < 24.9 ){
            echo "<p class='result' id='result'> IMC $imc_format - Peso ideal</p>";
        } else if($imc_format > 25 && $imc_format < 29.9){
            echo "<p class='result' id='result'> IMC $imc_format - Sobrepeso</p>";
        } else if($imc_format > 30 && $imc_format < 34.9){
            echo "<p class='result' id='result'> IMC $imc_format - Obesidade grau 1</p>";
        } else if($imc_format > 35 && $imc_format < 39.9){
            echo "<p class='result' id='result'> IMC $imc_format - Obesidade grau 2</p>";
        } else if($imc_format > 40){
            echo "<p class='result' id='result'> IMC $imc_format - Obesidade grau 3</p>";
        }
    
    }

    ?>

    <script>
        const p = document.getElementById('result');

        setTimeout(() => {
            p.style.display = "none";
        }, 5000);
    </script>
