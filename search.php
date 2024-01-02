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
    $error_message = "Nem adott meg keresési feltételt.";
} else {
    $search_results = searchNews($search_query);
}

?>

<!DOCTYPE html>
<html lang="hu">
<?php require_once('components/head.php'); ?>
<body>
    <?php require_once('components/loader.php'); ?>
    <?php require_once('components/mobile-menu.php'); ?>
    <?php require_once('components/header.php'); ?>


    <div class="container search-txt">
        <form role="search" method="get" action="search.php">
            <input type="search" id="search-text" name="s" value="<?php echo $search_query; ?>" placeholder="Keresés...">
            <button type="submit">Keresés</button><br><br><br>
        </form>
        <?php
        if (isset($error_message)) {
            echo '<p style="color: red; border: 2px solid red; padding: 10px; width: 50%; margin: 0 auto; text-align: center;">' . $error_message . '</p>';
        } else {
            echo '<p style="margin-bottom: 20px">Keresett szó: ' . $search_query . '</p>';
            // Ellenőrizze, hogy vannak-e találatok
            if (count($search_results) > 0) {
                echo '<p style="margin-bottom: 50px">Találatok: ' . count($search_results) . '</p><br><br><br>';
                echo '<div class="container">';
                echo '<div class="row">';
                foreach ($search_results as $result) {
                    $cover_img = "dashboard/" . $result['cover_img'];
                    echo '<div class="col-lg-6">
                            <div class="cardBlog">
                                <div class="cardImage"><a href="pages/news.php?news_id=' . $result['id'] . '"><img class="parallax-image" src="' . $cover_img . '" alt="' . $result['title'] . ' cikk borítóképe"></a></div>
                                <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="pages/news.php?news_id=' . $result['id'] . '">' . $result['date'] . '</a><a class="link-blog" href="pages/news.php?news_id=' . $result['id'] . '">
                                <h4 class="color-light-900 text-opacity">' . $result['title'] . '</h4></a></div>
                            </div>
                        </div>';
                }
                echo '</div></div>';
            } else {
                echo '<p class="fw-bold" style="color: red; border: 2px solid red; padding: 10px; width: 50%; margin: 0 auto; text-align: center;">Nincs találat.</p>';
            }
        }
        ?>
    </div>

    <?php require_once("components/footer.php"); ?>
    <?php require_once("components/scripts.php"); ?>
</body>
</html>
