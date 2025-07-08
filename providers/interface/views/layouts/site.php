<?php

use yii\helpers\Html;
use ui\bundles\SiteAsset;

SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">


<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <?php $this->registerCsrfMetaTags() ?>
    <title>Kifaru Outdoor Adventures Society</title>
    <?php $this->head() ?>
</head>

<body>

    <?php $this->beginBody() ?>
    <!-- <div class="cursor-follower"></div> -->
    <div class="slider-drag-cursor">
        <i class="fas fa-angle-left me-2"></i> DRAG
        <i class="fas fa-angle-right ms-2"></i>
    </div>
    <?= $this->render('sections/site/_header') ?>
    <?= $content ?>
    <?= $this->render('sections/site/_footer') ?>

    <?php $this->endBody() ?>
    <?= $this->render('@app/providers/interface/views/components/site/floatingButton') ?>

</body>


</html>
<?php $this->endPage() ?>


<script>
  document.addEventListener('DOMContentLoaded', function () {
    let menuWrapper = document.querySelector('.th-menu-wrapper');

    window.addEventListener('scroll', function () {
      if (menuWrapper.classList.contains('th-body-visible')) {
        menuWrapper.classList.remove('th-body-visible');
      }
    });
  });
</script>
