<?php
require_once(__DIR__ . '/header.php');
require_once(__DIR__ . '/oeuvres.php');
?>
    <main>
        <?php
        $oeuvre = $oeuvres[$_GET['id']] ?? null;
        if ($oeuvre === null) { ?>
            <div><?php echo('Cette oeuvre n\'existe pas.'); ?></div>
        <?php } else { ?>
            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img alt="image de l'oeuvre" src=<?php echo $oeuvre['img_oeuvre']; ?>>
                </div>
                <div id="contenu-oeuvre">
                    <h1><?php echo $oeuvre['nom_oeuvre']; ?></h1>
                    <p class="description"><?php echo $oeuvre['artiste']; ?></p>
                    <p class="description-complete">
                        <?php echo $oeuvre['description_oeuvre']; ?>
                    </p>
                </div>
            </article>
        <?php } ?>
    </main>

<?php require_once(__DIR__ . '/footer.php'); ?>