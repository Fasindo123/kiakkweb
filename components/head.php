<head>
    <meta charset="UTF-8">
    <meta name="description" content="Kaposvári Ágazati Képzőközpont">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">

    <meta name="description" content="Kaposvári Informatika Ágazati Képzőközpont Hivatalos Weboldala">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL">
    <meta name="author" content="Szita Máté Ferenc, Bodó Zoltán, Huber Péter György">

    <link href="/kiakkweb/assets/css/style.css?v=2.0.0" rel="stylesheet">
    <script src="https://kit.fontawesome.com/535ee732fe.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" type="image/x-icon" href="/kiakkweb/assets/imgs/template/logo-black.png">
    <title>Kaposvári Informatika Ágazati Képzőközpont</title>
</head>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/kiakkweb/dashboard/config.php");
  function sqlQuery($sql) {
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($sql);

    $conn->close();
    return $result;
  };

  function getPicture($img, $count) {
    if ($count != 1){
      if ($img) {
        for ($i = 0; $count-1; $i++) {
          $img[$i] = "dashboard/".$img[$i];
        }
        return $img;
      } else {
        for ($i = 0; $count-1; $i++) {
          $img[$i] = "assets/imgs/no-img.jpg";
        }
        return $img;
      }
    } else {
      if ($img) {
        return "dashboard/".$img;
      } else {
        return "assets/imgs/no-img.jpg";
      }
    }
  };
?>