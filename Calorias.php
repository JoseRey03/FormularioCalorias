<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    $peso = $_POST["peso"];
    $actividadfisica = $_POST["actividadfisica"];
    $objetivo = $_POST["objetivo"];
    $biotipo = $_POST["biotipo"];

    $libra = $peso * 2.20462;

    if (($actividadfisica == "Sedentario") && ($objetivo == "Rebajar")) {
        $min = $libra * 10;
        $max = $libra * 12;
    } elseif (($actividadfisica == "Sedentario") && ($objetivo == "Mantener")) {
        $min = $libra * 12;
        $max = $libra * 14;
    } elseif (($actividadfisica == "Sedentario") && ($objetivo == "Aumentar")) {
        $min = $libra * 16;
        $max = $libra * 18;
    } elseif (($actividadfisica == "Moderado") && ($objetivo == "Rebajar")) {
        $min = $libra * 12;
        $max = $libra * 14;
    } elseif (($actividadfisica == "Moderado") && ($objetivo == "Mantener")) {
        $min = $libra * 14;
        $max = $libra * 16;
    } elseif (($actividadfisica == "Moderado") && ($objetivo == "Aumentar")) {
        $min = $libra * 18;
        $max = $libra * 20;
    } elseif (($actividadfisica == "Activo") && ($objetivo == "Rebajar")) {
        $min = $libra * 14;
        $max = $libra * 16;
    } elseif (($actividadfisica == "Activo") && ($objetivo == "Mantener")) {
        $min = $libra * 16;
        $max = $libra * 18;
    } elseif (($actividadfisica == "Activo") && ($objetivo == "Aumentar")) {
        $min = $libra * 20;
        $max = $libra * 22;
    }

    switch ($biotipo) {
        case 'Ectomorfo':
            $carbohidratosmin = 0.5 / 4 * $min;
            $carbohidratosmax = 0.5 / 4 * $max;
            $proteinamin = 0.25 / 4 * $min;
            $proteinamax = 0.25 / 4 * $max;
            $Grasamin = 0.2 / 9 * $min;
            $Grasamax = 0.2 / 9 * $max;
            break;
        case 'Mesomorfo':
            $carbohidratosmin = 0.4 / 4 * $min;
            $carbohidratosmax = 0.4 / 4 * $max;
            $proteinamin = 0.3 / 4 * $min;
            $proteinamax = 0.3 / 4 * $max;
            $Grasamin = 0.3 / 9 * $min;
            $Grasamax = 0.3 / 9 * $max;
            break;
        case 'Endomorfo':
            $carbohidratosmin = 0.25 / 4 * $min;
            $carbohidratosmax = 0.25 / 4 * $max;
            $proteinamin = 0.4 / 4 * $min;
            $proteinamax = 0.4 / 4 * $max;
            $Grasamin = 0.35 / 4 * $min;
            $Grasamax = 0.35 / 4 * $max;
            break;


    }

    echo "<h1>Calculo de Calorias</h1>";
    echo "<h3>Dietetica y Nutricion</h3>";
    echo "<p><strong>Peso en KGs: </strong> $peso </p>";
    echo "<p><strong>Peso en libras: </strong> $libra </p>";
    echo "<p><strong>Rango Kcal: </strong> $min (min) / $max (max)</p>";
    echo "<p>Distribucion de Macronutrientes</p>";
    echo "<ul><li><p>Gramos de carbohidratos: $carbohidratosmin (min) / $carbohidratosmax  (max)</p></li></ul>";
    echo "<ul><li><p>Gramos de proteínas:  $proteinamin (min) / $proteinamax (max)</p></li></ul>";
    echo "<ul><li><p>Gramos de grasa: $Grasamin (min) / $Grasamax (max)</p></li></ul>";
    ?>
</body>

</html>