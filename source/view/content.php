<!-- content.php -->
<?php
  $path_cases = __DIR__ . "/.." . "/assets" . "/case" . "/";
  $cases = scandir($path_cases);

  printCases($path_cases, clearJunkFiles($cases));

  function clearJunkFiles(array $folder)
  {
    $junk_files = array(
      0 => ".",
      1 => "..",
    );

    foreach ($junk_files as $junk)
    {
      $junk_key = array_search($junk, $folder);

      if ($junk_key !== false)
      {
        unset($folder[$junk_key]);
      }
    }

    return array_values($folder);
  }

  function printCases(string $path, array $cases)
  {
    foreach ($cases as $case)
    {
      $heading = $case;
      $path_case = $path . "$case" . "/";
      $case = clearJunkFiles(scandir($path_case));

      // insert regex to pick first image in folder (array)

      printCaseCard($heading, $case);
    }
  }

  function printCaseCard(string $case, array $image)
  {
    $case = $case;
    $image = $image;

    require(__DIR__ . '/case.php');
  }
?>