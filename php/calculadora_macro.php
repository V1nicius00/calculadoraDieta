<?php

function calc_macros($gender, $tmb, $lvl, $obj){

    # Definir fatores de conversão para os macros
    $proteina_por_grama = 4;
    $carboidrato_por_grama = 4;
    $gordura_por_grama = 9;
    
    # Determinar a necessidade calórica com base no objetivo
    if($obj == 'perder'){
        $calorias = $tmb - 500;
    }else if ($obj == 'manter'){
        $calorias = $tmb;
    }else if ($obj == 'hipertrofia'){
        $calorias = $tmb + 500;
    };
    
    // Ajustar macros com base no sexo
    if ($gender == 'm') {
        $proteinas = ($calorias * 0.3) / $proteina_por_grama;
        $carboidratos = ($calorias * 0.4) / $carboidrato_por_grama;
        $gorduras = ($calorias * 0.3) / $gordura_por_grama;
    } elseif ($gender == 'f') {
        $proteinas = ($calorias * 0.25) / $proteina_por_grama;
        $carboidratos = ($calorias * 0.45) / $carboidrato_por_grama;
        $gorduras = ($calorias * 0.3) / $gordura_por_grama;
    }

    // Ajustar macros com base no nível de atividade
    if ($lvl == 'lvl-1') {
        $proteinas *= 0.8;
        $carboidratos *= 0.8;
        $gorduras *= 0.8;
    } elseif ($lvl == 'lvl-2') {
        $proteinas *= 1.0;
        $carboidratos *= 1.0;
        $gorduras *= 1.0;
    } elseif ($lvl == 'lvl-3') {
        $proteinas *= 1.2;
        $carboidratos *= 1.2;
        $gorduras *= 1.2;
    } elseif ($lvl == 'lvl-4') {
        $proteinas *= 1.4;
        $carboidratos *= 1.4;
        $gorduras *= 1.4;
    }

    $protein_format = number_format($proteinas, 0);
    $carbo_format = number_format($carboidratos, 0);
    $gordura_format = number_format($gorduras, 0);

    echo "<p class='result-macro' id='result'> Quantidade de Proteína: $protein_format g | 
    Quantidade de Carboidratos: $carbo_format g | Quantidade de Gordura: $gordura_format g</p>";
    

}

    if(isset($_POST['tmb']) && isset($_POST['gender']) && isset($_POST['lvl-atv']) && isset($_POST['obj'])){

        $tmb = $_POST['tmb'];
        $gender = $_POST['gender'];
        $lvl = $_POST['lvl-atv'];
        $obj = $_POST['obj'];

        calc_macros($gender, $tmb, $lvl, $obj);

    }

?>


<script>
    
    const p = document.getElementById('result');

    setTimeout(() => {
        p.style.display = "none";
    }, 15000);

</script>