<main>
  <?php
    $path_cases = __DIR__ . '/..' . '/assets' . '/case' . '/';
    $cases = scandir($path_cases);
    $junk_files = [
      0 => '.',
      1 => '..',
    ];

    function clearJunkFiles(array $junk_array, array $cases_array)
    {
      foreach ($junk_array as $junk)
      {
        $junk_key = array_search($junk, $cases_array);

        if ($junk_key !== false)
        {
          unset($cases_array[$junk_key]);
        }
      }

      return $cases_array;
    }
  ?>
  <pre>
    <?php var_dump(clearJunkFiles($junk_files, $cases)); ?>
  </pre>
</main>