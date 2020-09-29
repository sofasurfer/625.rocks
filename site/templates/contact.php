<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>      
      <div class="intro text">
        <?= $page->intro()->kirbytext() ?>
      </div>
      <div class="c-info grid gutter-1 col-2">
        <div class="column"> 
          <dl>
            <?php foreach($page->openinghours()->toStructure() as $item): ?>
              <dt><?= $item->title()->html() ?></dt>
              <dd><?= $item->text()->html() ?></dt>
            <?php endforeach ?>
          </dl>
        </div>
        <div class="column pull-right"> 
          <?= $page->address()->kirbytext() ?>
        </div>
      </div>
      <hr />      
    </header>
    
    <div class="wrap wide">

    <iframe class="map" src="<?= $page->mapurl() ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
      
    <div class="contact-twitter text wrap cf">
      <?= $page->text()->kirbytext() ?>
    </div>
    
  </main>

<?php snippet('footer') ?>