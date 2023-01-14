<main>
  <?php
    $path_cases = __DIR__ . "/.." . "/assets" . "/case" . "/";
    $cases = scandir($path_cases);

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

      return $folder;
    }

    function printCases(string $path, array $cases)
    {
      foreach ($cases as $case)
      {
        $heading = $case;
        $path_case = $path . "$case" . "/";
        $case = clearJunkFiles(scandir($path_case));

        print_r("<pre>$heading</pre>");

        printCase($path_case, $case);
      }
    }

    function printCase(string $path, array $case)
    {
      print_r("<pre>$path</pre>");
      
      foreach ($case as $item)
      {
        print_r("<pre>$item</pre>");
      }
    }
  ?>
  <pre>
    <?php var_dump(clearJunkFiles($cases)); ?>
    <?php printCases($path_cases, clearJunkFiles($cases)); ?>
  </pre>
</main>