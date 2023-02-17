<?php 
  require(__DIR__ . "/.." . "/class" . "/case.class.php");
  $case_key = $_GET['case'];
  $case = $cases[$case_key];
?>
<!DOCTYPE html>
<html lang="nl-NL" case-id="<?php print_r($case->folder_name); ?>"class="case-detail-page">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tessa Stelpstra | <?php print_r($case->title); ?></title>
  <link rel="stylesheet" href="../../style/main.css" type="text/css">
</head>
<body>
  <?php
    require_once(__DIR__ . "/.." . "/view" . "/header.php");
    require_once(__DIR__ . "/.." . "/view" . "/detail.php");
    require_once(__DIR__ . "/.." . "/view" . "/footer.php");
  ?>
</body>
</html>
