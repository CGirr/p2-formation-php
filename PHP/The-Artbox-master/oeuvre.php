<?php
require_once(__DIR__ . '/header.php');
require_once(__DIR__ . '/oeuvres.php');

$id = $_GET['id'];
$i = array_search($id, array_column($oeuvres, 'id_oeuvre'));
$oeuvre = $oeuvres[$i];

?>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src=<?php echo $oeuvre['img_oeuvre']; ?>>
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['nom_oeuvre']; ?></h1>
            <p class="description"><?php echo $oeuvre['artiste']; ?></p>
            <p class="description-complete">
                <?php echo $oeuvre['description_oeuvre']; ?>
            </p>
        </div>
    </article>
    </main>

<?php require_once(__DIR__ . '/footer.php'); ?>