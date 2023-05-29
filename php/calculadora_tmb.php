<?php

    if(isset($_POST['weight']) && isset($_POST['height']) && isset($_POST['age']) && isset($_POST['gender'])){

        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];

        if($gender == "f"){

            $tmb = 447.6 + (9.2 * $weight) + (3.1 * $height) - (4.3 * $age);
            $tmb_format = number_format($tmb, 0);

            echo "<p class='result' id='result'> Sua taxa metabólica basal é de $tmb_format kcal </p>";

        } else if($gender == "m"){

            $tmb = 88.36 + (13.4 * $weight) + (4.8 * $height) - (5.7 * $age);
            $tmb_format = number_format($tmb, 0);

            echo "<p class='result' id='result'> Sua taxa metabólica basal é de $tmb_format kcal </p>";

        }

    }

?>

<script>

    const p = document.getElementById('result');

    setTimeout(() => {
        p.style.display = "none";
    }, 5000);

</script>