<!DOCTYPE html>
<html lang="hu">
<?php require_once('../components/head.php'); ?>
<style>
    /* Stílus a képekhez */
    .image-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px; /* Képek közötti tér */
    }

    .image-container img {
        flex: 1;
        max-width: calc(25% - 10px); /* 25% szélesség, azaz négy kép egy sorban */
        height: auto;
    }
</style>
<body>
    <?php require_once('../components/loader.php'); ?>
    <?php require_once('../components/mobile-menu.php'); ?>
    <?php require_once('../components/header.php'); ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- Képek megjelenítése -->
    <div class="image-container">
        <?php
        $imageFolder1 = '../assets/imgs/KÉPEK/';
        $imageFolder2 = '../assets/imgs/KÉPEK/Cisco Labor/';

        // Képek bejárása és megjelenítése
        function displayImages($folder) {
            $files = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            foreach ($files as $file) {
                echo '<img src="' . $file . '" alt="Kép">';
            }
        }

        // Az első mappa képeinek megjelenítése
        displayImages($imageFolder1);

        // A második mappa képeinek megjelenítése
        displayImages($imageFolder2);
        ?>
    </div>

    <?php require_once("../components/footer.php"); ?>
    <div class="scroll-to-top" id="scroll-to-top"><i class="fa-solid fa-angles-up"></i></div>
    <?php require_once("../components/scripts.php"); ?>
</body>
</html>
