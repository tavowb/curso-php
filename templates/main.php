<main>
    <section>
        <img src="<?= $poster_url ?>" width="300" alt="Poster de <?= $title ?>" style="border-radius: 16px;">
    </section>
    <hgroup>
        <h1>La próxima película de Marvel</h1>
        <p> <strong> <?php $until_message ?> </strong> </p>
        <h3><?=  $title ?> Se estrena en <?= $days_until ?> Días </h3>
        <p>Fecha de estreno: <?= $release_date ?></p>
        <br>
        <h4>La siguiente por salir es: <strong><?= $following_production["title"] ?></strong> </h4>
    </hgroup>

</main>