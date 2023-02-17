<!-- detail.php -->
<main>
  <section class="case-detail">
    <div class="copy">
      <h1 class="heading">
        <?php print_r($case->title); ?>
      </h1>
      <p class="paragraph">
        <?php print_r($case->paragraph); ?>
      </p>
    </div>
    <div class="gallery">
      <div class="gallery-wrapper">
      <?php
        foreach ($case->images as $image)
        {
          require(".." . "/view" . "/image.php");
        }
      ?>
    </div>
    </div>
  </section>
</main>
