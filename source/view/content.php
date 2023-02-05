<!-- content.php -->
<?php
  $cases_path = __DIR__ . "/.." . "/assets" . "/case" . "/";
  $cases_folder = sanitize(scandir($cases_path));
  $cases = array();

  /**
   * Class template for constructing a case object.
   */
  class caseComponent
  {
    /**
     * The folder name of the case, used for constructing paths.
     * @var string
     */
    public $folder_name;

    /**
     * The title of the case.
     * @var string
     */
    public $title;

    /**
     * The body text of the case.
     * @var string
     */
    public $paragraph;

    /**
     * The image collection of the case.
     * @var array
     */
    public $images;
    
    /**
     * The image thumbnail to display in the case card.
     * @var array
     */
    public $thumbnail;

    /**
     * The slug for the case.
     * @var string
     * @todo /!\ Refinement
     */
    public $link;

    function __construct(
      $_case,
      $_title,
      $_paragraph,
      $_images,
      $_thumbnail,
      $_link,
    ) {
      $this->folder_name = $_case;
      $this->title = $_title;
      $this->paragraph = $_paragraph;
      $this->images = $_images;
      $this->thumbnail = $_thumbnail;
      $this->link = $_link;
    }
  }

  foreach ($cases_folder as $case)
  {
    $case_path = $cases_path . "$case" . "/";
    $case_folder = sanitize(scandir($case_path));
    $case_title = trim(str_replace("_", " ", $case));
    $case_paragraph = file_get_contents($case_path . implode("", getFileCollection($case_folder, "txt")));
    $case_images = getFileCollection($case_folder, 'jpg');
    $case_thumbnail = $case_images[0]; /* /!\ Needs refinement */
    $case_link = null; /* /!\ Needs refinement */

    $case = new caseComponent(
      $case,
      $case_title,
      $case_paragraph,
      $case_images,
      $case_thumbnail,
      $case_link,
    );
    
    array_push($cases, $case);
  }

  renderCaseCards($cases_path, $cases);

  /**
   * Function to remove unwanted files.
   * @return array
   */
  function sanitize(array $folder)
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

  /**
   * Function to get collection of files with specified extension.
   * @return array
   */
  function getFileCollection(array $folder, string $extension) 
  {
    $array = array();

    foreach ($folder as $file) 
    {
      if (pathinfo($file)["extension"] === $extension)
      {
        array_push($array, $file);
      }
    }
    
    return $array;
  }

  function renderCaseCards(string $path, array $cases)
  {
    foreach ($cases as $case)
    {
      $case_path = "/assets" . "/case" . "/" . $case->folder_name . "/";
      $heading = $case->title;
      $thumbnail = $case->thumbnail;
      $slug = $case->link;

      require(__DIR__ . '/case.php');
    }
  }
?>
