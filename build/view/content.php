<!-- content.php -->
<?php

$horizontal_index = 0;
$vertical_index_list = array(
  0 => true,
  1 => false,
  2 => false,
  3 => true
);

foreach ($cases as $case)
{
  if ($horizontal_index === 4)
  {
    $horizontal_index = 0;
  }

  $vertical_index = $vertical_index_list[$horizontal_index];
  $horizontal_index++;

  require(__DIR__ . '/case.php');
}
