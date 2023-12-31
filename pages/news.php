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
                if (isset($_GET["news_id"])) {
                    $result = sqlQuery("SELECT `title`, `description`, `date` FROM `news` WHERE `id`=".$_GET["news_id"]." LIMIT 1");
                    if ($result) {
                        $result = $result->fetch_assoc();
                        echo    '<div class="row">
                                    <div class="col-6">
                                        <h5>'.$result["title"].'</h5>
                                    </div>
                                    <div class="col-6 text-end">
                                        <h5>'.$result["date"].'</h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        '.$result["description"].'
                                    </div>
                                </div>';
                    } else {
                        echo "<h3>Hiba történt a betöltés közben! (Adatbázis hiba)</h3>";
                    }
                } else {
                    echo '<h3>Hiba történt a betöltés közben! (A hír azonosítója üres!)</h3>';
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