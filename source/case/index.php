<?php 
  require(__DIR__ . "/.." . "/class" . "/case.class.php");
  $case_key = $_GET['case'];
  $case = $cases[$case_key];
?>
<!DOCTYPE html>
<html lang="nl-NL">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio website of Tessa Stelpstra | <?php print_r($case->title); ?></title>
  <link rel="stylesheet" href="../../style/main.css" type="text/css">
  <script src="../../script/main.js" type="text/javascript" defer></script>
</head>
<body>
  <?php
    require_once(__DIR__ . "/.." . "/view" . "/header.php");
    require_once(__DIR__ . "/.." . "/view" . "/detail.php");
    require_once(__DIR__ . "/.." . "/view" . "/footer.php");
  ?>
</body>
</html>
