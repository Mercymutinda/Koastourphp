<?php

use yii\helpers\Url;
use yii\helpers\Html;

$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';

use app\providers\components\widgets\site\BreadcrumbWidget;

?>
<?= BreadcrumbWidget::widget([
    'title' => 'Every youth deserves the chance to thrive',
    'subtitle' => 'Meet our Board'
]) ?>

<style>
  .member-card {
    text-align: center;
  }

  .team-photo {
    width: 160px;
    height: 160px;
    object-fit: cover;
    border-radius: 8px;
    margin: 0 auto;
    display: block;
  }

  .member-name {
    font-size: 16px;
    font-weight: 500;
    margin-top: 10px;
    color: #333;
  }

  @media (min-width: 768px) {
    .team-photo {
      width: 180px;
      height: 180px;
    }
    .member-name {
      font-size: 17px;
    }
  }
</style>

<section class="space" id="team-sec">
  <div class="container">
    <div class="title-area text-center">
      <span class="sub-title">Meet Our Board</span>
      <h2 class="sec-title">Our Board Members</h2>
      <p class="mb-60 text-dark">We are a team of dedicated individuals committed to empowering youth through outdoor activities and community engagement.</p>
    <div class="row gy-4 justify-content-center">
      <?php
      $members = [
        ['name' => 'Mawazo', 'img' => 'mawazo.jpg'],
        ['name' => 'Ruth', 'img' => 'ruth.jpg'],
        ['name' => 'dylan', 'img' => 'dylan.jpg'],
       
      ];

      foreach ($members as $member) :
      ?>
        <div class="col-lg-3 col-md-4 col-6">
          <div class="member-card">
            <img class="team-photo" src="<?= $basePath ?>assets/img/bg/<?= $member['img'] ?>" alt="<?= Html::encode($member['name']) ?>" />
            <div class="member-name"><?= Html::encode($member['name']) ?></div>
            <div class="member-position text-dark">Board Member</div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
