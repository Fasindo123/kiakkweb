<?php
function searchNews($search_query) {
    require_once("dashboard/config.php");

    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM news WHERE title LIKE '%$search_query%'";
    $result = $conn->query($sql);

    $search_results = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $search_results[] = $row;
        }
    }

    $conn->close();

    return $search_results;
}

$search_query = isset($_GET['s']) ? htmlspecialchars($_GET['s']) : '';
$search_results = searchNews($search_query);
?>

<!DOCTYPE html>
<html lang="hu">
    <?php require_once('components/head.php'); ?>
<body>
    <?php require_once('components/header.php'); ?>
<br><br><br><br><br><br><br><br><br><br>
    <div class="search-txt">
        <p>Keresett szó: <?php echo $search_query; ?></p>
        <p>Találatok: <?php echo count($search_results); ?></p><br><br><br>
    </div>

    <div class="container">
        <div class="row">
            <?php
            foreach ($search_results as $result) {
                echo '<div class="col-lg-6">
                        <div class="cardBlog">
                            <div class="cardImage"><a href="#"><img class="parallax-image" src="' . $result['cover_img'] . '" alt="' . $result['title'] . ' cikk borítóképe"></a></div>
                            <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="#">' . $result['date'] . '</a><a class="link-blog" href="#">
                            <h4 class="color-light-900 text-opacity">' . $result['title'] . '</h4></a></div>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>

    <?php require_once("components/footer.php"); ?>

</body>
</html>
