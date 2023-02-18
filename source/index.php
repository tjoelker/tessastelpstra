<?php
  require(__DIR__ . "/class" . "/case.class.php");
  require(__DIR__ . "/class" . "/info.class.php");
?>
<!DOCTYPE html>
<html lang="nl-NL" class="home-page">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tessa Stelpstra</title>
  <link rel="stylesheet" href="./style/main.css" type="text/css">
  <script src="./script/main.js" type="text/javascript" defer></script>
</head>
<body>
  <?php
    require_once(__DIR__ . "/view" . "/header.php");
    require_once(__DIR__ . "/view" . "/main.php");
    require_once(__DIR__ . "/view" . "/footer.php");
  ?>
</body>
</html>
