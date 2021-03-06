<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <style>
  :root {
    --main-bg-color: <?= site()->bgcolor(); ?>
  }
  </style>
  <?= css('assets/css/index.css?v=2.6') ?>

</head>
<body>

  <header class="header wrap wide" role="banner">
    <div class="grid">

      <div class="branding column">
        <a href="<?= url() ?>" rel="home"><figure><img src="/assets/images/logo.svg" /></figure></a>
      </div>

      <input type="checkbox" id="hamburg">
      <label for="hamburg" class="hamburg">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
      </label>
      <?php snippet('menu') ?>
    </div>
  </header>
