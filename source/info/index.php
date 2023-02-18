<?php
  require(__DIR__ . "/.." . "/class" . "/case.class.php");
  require(__DIR__ . "/.." . "/class" . "/info.class.php");
  $page = $_GET['page'];
  $info = $info_items[$page];
?>
<!DOCTYPE html>
<html lang="nl-NL" case-id="<?php print_r($page); ?>"class="case-detail-page">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tessa Stelpstra | <?php print_r($info->title); ?></title>
  <link rel="stylesheet" href="../../style/main.css" type="text/css">
</head>
<body>
  <?php

    require_once(__DIR__ . "/.." . "/view" . "/header.php");

    switch ($page)
    {
      case "about" :
        require_once(__DIR__ . "/.." . "/view" . "/about.php");
        break;
      case "contact" :
        require_once(__DIR__ . "/.." . "/view" . "/contact.php");
        break;
      case "terms" :
        require_once(__DIR__ . "/.." . "/view" . "/terms.php");
        break;
    }

    require_once(__DIR__ . "/.." . "/view" . "/footer.php");

  ?>
</body>
</html>
