<?php
require_once(__DIR__ . '/header.php');
require_once(__DIR__ . '/oeuvres.php');
?>

        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $oeuvre) { ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $oeuvre['id_oeuvre'] ?>">
                    <img src=<?php echo $oeuvre['img_oeuvre'] ?>>
                    <h2><?php echo $oeuvre['nom_oeuvre'] ?></h2>
                    <p class="description"><?php echo $oeuvre['artiste'] ?></p>
                </a>
            </article>
            <?php } ?>
        </div>
    </main>

<?php require_once(__DIR__ . '/footer.php'); ?>