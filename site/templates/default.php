<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
    </header>
    <div class="downloads wrap">
      <?php foreach( $page->documents() as $file): ?>
        <a href="<?= $file->url(); ?>" class="btn" target="_blank"><?= $file->filename(); ?></a>
      <?php endforeach ?>
      <hr />
    </div>
    <div class="text wrap">
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>