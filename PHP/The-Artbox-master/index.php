<?php
require_once(__DIR__ . '/header.php');
require_once(__DIR__ . '/oeuvres.php');
?>
    <main>
        <div id="liste-oeuvres">
            <?php
            /** @var array $oeuvres */
            foreach ($oeuvres as $key => $oeuvre) {
                ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $key ?>">
                        <img alt="image de l'oeuvre" src=<?php echo $oeuvre['img_oeuvre'] ?>>
                        <h2><?php echo $oeuvre['nom_oeuvre'] ?></h2>
                        <p class="description"><?php echo $oeuvre['artiste'] ?></p>
                    </a>
                </article>
            <?php } ?>
        </div>
    </main>

<?php require_once(__DIR__ . '/footer.php'); ?>