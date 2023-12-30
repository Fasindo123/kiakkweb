<?php
function searchNews($search_query) {
    require_once("dashboard/config.php");

    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $search_results = [];

    $sql = "SELECT * FROM news WHERE title LIKE '%$search_query%'";
    $result = $conn->query($sql);

    if ($result !== false && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $search_results[] = $row;
        }
    }

    $conn->close();

    return $search_results;
}

$search_query = isset($_GET['s']) ? htmlspecialchars($_GET['s']) : '';

// Ellenőrizze, hogy van-e keresési lekérdezés
if (empty($search_query)) {
    // Ha nincs keresési lekérdezés, irányítson át az index.php-re
    header("Location: index.php");
    exit();
}

$search_results = searchNews($search_query);
?>

<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>
<body>
    <?php require_once('components/loader.php'); ?>
    <?php require_once('components/mobile-menu.php'); ?>
    <?php require_once('components/header.php'); ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="search-txt">
        <p>Keresett szó: <?php echo $search_query; ?></p>
        <?php
        // Ellenőrizze, hogy vannak-e találatok
        if (count($search_results) > 0) {
            echo '<p>Találatok: ' . count($search_results) . '</p><br><br><br>';
            echo '<div class="container">';
            echo '<div class="row">';
            foreach ($search_results as $result) {
                $cover_img = "dashboard/" . $result['cover_img'];
                echo '<div class="col-lg-6">
                        <div class="cardBlog">
                            <div class="cardImage"><a href="#"><img class="parallax-image" src="' . $cover_img . '" alt="' . $result['title'] . ' cikk borítóképe"></a></div>
                            <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="#">' . $result['date'] . '</a><a class="link-blog" href="#">
                            <h4 class="color-light-900 text-opacity">' . $result['title'] . '</h4></a></div>
                        </div>
                    </div>';
            }
            echo '</div></div>';
        } else {
            echo '<p style="color: red; border: 2px solid red; padding: 10px; width: 50%; margin: 0 auto; text-align: center;">Nincs találat.</p>';
        }
        ?>
    </div>

    <?php require_once("components/footer.php"); ?>
    <?php require_once("components/scripts.php"); ?>
</body>
</html>
