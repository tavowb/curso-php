<?php
#
declare(strict_types=1);


function render_template (string $template, array $data = []){
    extract($data);
    require "templates/$template.php";
}

function get_data(string $url): array{
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}

function get_until_message(int $day): string{
    return match(true){
        $day === 0 => "Hoy se estrena la película! 🎉",
        $day === 1 => "Mañana se estrena la película! 🎉",
        $day < 7   => "Esta semana se estrena la película! 🎉",
        $day < 30  => "Este mes se estrena la película! 🎉",
        default    => "$day días para el estreno de la película 🎉",
    };
}



$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"]);
?>