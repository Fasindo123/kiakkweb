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
            // Képek mappái
            $imageFolders = [
                '../assets/imgs/KÉPEK/',
                '../assets/imgs/KÉPEK/Cisco Labor/'
            ];

            // Képek kiterjesztése
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

            // Képek listája
            $imageFiles = [];

            // Képek kiválasztása a mappákból
            foreach ($imageFolders as $folder) {
                foreach (scandir($folder) as $file) {
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    if (in_array(strtolower($extension), $allowedExtensions)) {
                        $imageFiles[] = $folder . $file;
                    }
                }
            }

            foreach ($imageFiles as $image) {
                echo '<img src="' . $image . '" alt="Galéria további képei">';
            }
        ?>
    </div>

    <?php require_once("../components/footer.php"); ?>
    <div class="scroll-to-top" id="scroll-to-top"><i class="fa-solid fa-angles-up"></i></div>
    <?php require_once("../components/scripts.php"); ?>
</body>
</html>
