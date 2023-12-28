<?php
function searchContent($search_query, $tables_to_search) {
    require_once("dashboard/config.php");

    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $search_results = [];

    foreach ($tables_to_search as $table) {
        $sql = "SELECT * FROM $table WHERE title LIKE '%$search_query%'";
        $result = $conn->query($sql);

        if ($result !== false && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $search_results[] = $row;
            }
        }
    }

    $conn->close();

    return $search_results;
}

$search_query = isset($_GET['s']) ? htmlspecialchars($_GET['s']) : '';
$tables_to_search = array("news", "courses", "oktatok", "infrastructure", "faqs", "dokumentumok", "tamogatok");
$search_results = searchContent($search_query, $tables_to_search);
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
        <p>Találatok: <?php echo count($search_results); ?></p><br><br><br>
    </div>

    <div class="container">
        <div class="row">
            <?php
            foreach ($search_results as $result) {
                $cover_img = $result['cover_img'] ?? '';
                $date = $result['date'] ?? '';
            
                echo '<div class="col-lg-6">
                        <div class="cardBlog">
                            <div class="cardImage"><a href="#"><img class="parallax-image" src="' . $cover_img . '" alt="' . $result['title'] . ' cikk borítóképe"></a></div>
                            <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="#">' . $date . '</a><a class="link-blog" href="#">
                            <h4 class="color-light-900 text-opacity">' . $result['title'] . '</h4></a></div>
                        </div>
                    </div>';
            }
            
            ?>
        </div>
    </div>

    <?php require_once("components/footer.php"); ?>
    <?php require_once("components/scripts.php"); ?>
</body>
</html>
