<?php
#Constante de la API
const API_URL = "https://whenisthenextmcufilm.com/api";

#Inicializar una nueva sesión de cURL; ch =  curl handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la petición y no mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

#Ejecutar la petición y guardar la respuesta
$response = curl_exec($ch);
$data = json_decode($response, true);

#Cerrar la sesión de cURL
curl_close($ch);

#Imprimir la respuesta
#var_dump($data);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>La proxima película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>
</head>
<main>
    <section>
        <img src="<?= $data["poster_url"] ?>" width="300" alt="Poster de <?= $data["title"] ?>" style="border-radius: 16px;">
    </section>
    <hgroup>
        <h1>La próxima película de Marvel</h1>
        <p>El título de la película es: <strong><?php echo $data["title"]; ?></strong></p>
        <h3><?=  $data["title"] ?> Se estrena en <?= $data["days_until"] ?> Días </h3>
        <p>Fecha de estreno: <?= $data["release_date"] ?></p>
        <br>
        <h4>La siguiente por salir es: <strong><?= $data["following_production"]["title"] ?></strong> </h4>
    </hgroup>

</main>
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
