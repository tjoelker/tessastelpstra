<?php

$info_path = __DIR__ . "/.." . "/assets" . "/info" . "/";
$info_folder = sanitize(scandir($info_path));
$info_items = array();

/**
 * Class template for constructing a info object.
 */
class infoComponent
{
  /**
   * The folder name of the info, used for constructing paths.
   * @var string
   */
  public $folder_name;

  /**
   * The title of the info.
   * @var string
   */
  public $title;

  /**
   * The body text of the info.
   * @var string
   */
  public $paragraph;

  /**
   * The image collection of the info.
   * @var array
   */
  public $images;

  /**
   * The path for the info.
   * @var string
   */
  public $path;

  function __construct(
    $_info,
    $_title,
    $_paragraph,
    $_images,
    $_path,
  ) {
    $this->folder_name = $_info;
    $this->title = $_title;
    $this->paragraph = $_paragraph;
    $this->images = $_images;
    $this->path = $_path;
  }
}

foreach ($info_folder as $info) 
{
  $info_item_path = $info_path . $info . "/";
  $info_item_folder = sanitize(scandir($info_item_path));
  $info_item_title = ucfirst(trim(str_replace("_", " ", $info)));
  $info_item_paragraph = file_get_contents($info_item_path . implode("", getFileCollection($info_item_folder, 'txt')));
  $info_item_images = getFileCollection($info_item_folder, 'jpg');
  $info_item_path = "/assets" . "/info" . "/" . $info . "/";
  
  $info_items[$info] = new infoComponent(
    $info,
    $info_item_title,
    $info_item_paragraph,
    $info_item_images,
    $info_item_path,
  );
}
