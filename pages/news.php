<!DOCTYPE html>
<html lang="hu">
<?php require_once('../components/head.php'); ?>
<body>
    <?php require_once('../components/loader.php'); ?>
    <?php require_once('../components/mobile-menu.php'); ?>
    <?php require_once('../components/header.php'); ?>

    <main class="main">
        <section id="custom-content" class="section block-section-2 is-mode bg-0">
            <?php 
                if (isset($_GET["news_id"])) {
                    $result = sqlQuery("SELECT `description` FROM `news` WHERE `id`=".$_GET["news_id"]." LIMIT 1");
                    $result = $result->fetch_row();
                    echo($result[0]);
                } else {
                    echo '<h3>Hiba törtébt a betöltés közben! (A hír azonosítója üres!)</h3>';
                }
            ?>
        </section>
    </main>

    <?php require_once("../components/footer.php"); ?>
    <div class="scroll-to-top" id="scroll-to-top"><i class="fa-solid fa-angles-up"></i></div>
    <?php require_once("../components/scripts.php"); ?>
</body>
</html>