<?php
//Variables
    $name = "Tavo";
    $age = 25;
    $hobbies = ["Programar", "Leer", "Jugar"];
    $isOld = false;
    $isYoung = true;
    $isOld = $age > 60;
    $isDev = true;

//Constantes
//Constante Global
    define("Logo_url","https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg");
    
//Constante Local
    const NOMBRE = "Tavo";

    var_dump($name);
    var_dump($age);
    var_dump($hobbies);
    var_dump($isOld);
    var_dump($isYoung);

//If
    if($age > 18){
        echo "<h2> Eres mayor de edad </h2>";
    }else{
        echo "<h2> Eres menor de edad </h2>";
    }

?>

//If Ternario
<?php if ($isOld): ?>
    <h2> Eres mayor de 60 años </h2>
<?php elseif ($isDev): ?>
    <h2> Eres desarrollador </h2>
<?php else: ?>
    <h2> Eres menor de 60 años </h2>
<?php endif; ?>

//ternario
<?php
$ouputAge = $age > 18 ? "Eres mayor de edad" : "Eres menor de edad";
echo "<h2> $ouputAge </h2>";
?>

//Match
<?php
$ouputAge = match($age){
    18 => "Eres mayor de edad",
    25 => "Eres mayor de 25 años",
    default => "Eres menor de edad"
};
echo "<h2> $ouputAge </h2>";
?>

//Array 
<?php
    $bestLanguages = ["PHP", "JavaScript", "Python",1,2];
    $bestLanguages[3] = "Java";
    $bestLanguages[] = "C#";

    echo "<h2> El mejor lenguaje es: $bestLanguages[5] </h2>";

?>

//ForEach
<ul>
    <?php foreach($bestLanguages as $key =>  $language): ?>
        <li> <?= $key ." ". $language ?> </li>
    <?php endforeach; ?>
</ul>

//Diccionarios
<?php
    $person = [
        "name" => "Tavo",
        "age" => 25,
        "hobbies" => ["Programar", "Leer", "Jugar"],
        "isOld" => false
    ];

    $person["isOld"] = $person["age"] > 60;
    $person["isYoung"] = $person["age"] < 18;

    var_dump($person);
?>



<img 
src="<?= Logo_url ?>" 
alt="Logo de PHP"
>

<h1>
    <?= "Mi primera app!!!!" ;?>
</h1>
<h1>
    <?= NOMBRE ?>
</h1>

<Style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</Style>
