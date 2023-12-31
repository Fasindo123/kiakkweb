<!DOCTYPE html>
<html lang="hu">
<?php require_once('../components/head.php'); ?>
<body>
    <?php require_once('../components/loader.php'); ?>
    <?php require_once('../components/mobile-menu.php'); ?>
    <?php require_once('../components/header.php'); ?>

    <main class="main">
        <section id="custom-content" class="section block-section-2 is-mode bg-0 text-break">
            <div class="container" style="max-width: 70%">
                <?php
                if (isset($_GET["course_id"])) {
                    $result = sqlQuery("SELECT `long_description` FROM `courses` WHERE `id`=".$_GET["course_id"]." LIMIT 1");
                    if ($result) {
                        $result = $result->fetch_row();
                        echo $result[0];
                    } else {
                        echo "<h3>Hiba történt a betöltés közben! (Adatbázis hiba)</h3>";
                    }
                } else {
                    echo '<h3>Hiba történt a betöltés közben! (A képzés azonosítója üres!)</h3>';
                }
                ?>
            </div>
        </section>
    </main>

    <?php require_once("../components/footer.php"); ?>
    <div class="scroll-to-top" id="scroll-to-top"><i class="fa-solid fa-angles-up"></i></div>
    <?php require_once("../components/scripts.php"); ?>
</body>
</html>