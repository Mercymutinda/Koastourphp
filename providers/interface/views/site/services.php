<?php

use yii\helpers\Url;
use yii\helpers\Html;

$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';
// $basePath = \Yii::$app->request->baseUrl . '/assets/site/';

use app\providers\components\widgets\site\BreadcrumbWidget;


?>
<?= BreadcrumbWidget::widget([
  'title' => 'Nature is our classroom and our playground',
  'subtitle' => 'What we do'
]) ?>
<section
  class="position-relative bg-smoke overflow-hidden space"
  id="service-sec"
  data-bg-src="assets/img/bg/shape_bg_1.png">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 offset-lg-3">
        <div class="title-area text-center">
          <span class="sub-title">Immerse Yourself in Nature</span>
          <!-- <h2 class="sec-title">Your perfect forest adventure</h2> -->
          <p class="sec-text mt-3">
          From forest hikes to canoe trips, KOAS helps youth experience the outdoors in meaningful ways; often for the first time.
          </p>

        </div>
      </div>
    </div>

  </div>
</section>
<div class="space">
  <div class="container">
    <div class="title-area text-center">
      <span class="sub-title">What We Do </span>
      <h2 class="sec-title">Activities to partcipate in</h2>
    </div>
    <div class="row gy-4 justify-content-center">
      <div class="col-xl-3 col-lg-6">
        <div class="about-contact-grid style2">

          <div class="about-contact-details">
            <h6 class="box-title mb-2 text-primary">Outdoor Adventure Activities</h6>
            <p class="about-contact-details-text">
              Experience the thrill of the outdoors with our diverse adventure activities. We offer guided hiking, immersive camping, exciting kayaking, challenging rock climbing, and peaceful nature walks. Get ready to explore and create unforgettable memories in nature.
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="about-contact-grid">

          <div class="about-contact-details">
            <h6 class="box-title mb-2 text-primary">Mentorship and Leadership Training</h6>
            <p class="about-contact-details-text">
            Develop essential skills with our mentorship and leadership training. Our programs include engaging workshops, dynamic team-building exercises, and transformative leadership camps. Build confidence, inspire others, and become an effective leader.
            </p>

          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="about-contact-grid">

          <div class="about-contact-details">
            <h6 class="box-title mb-2 text-primary">Cultural Exchange Events</h6>

            <p class="about-contact-details-text">
            Connect with diverse communities through our vibrant cultural exchange events. Join us for lively multicultural potlucks and captivating storytelling nights around a campfire. Learn, celebrate diversity, and forge meaningful relationships.
            </p>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="about-contact-grid">

          <div class="about-contact-details">
            <h6 class="box-title mb-2 text-primary">Environmental Stewardship projects</h6>

            <p class="about-contact-details-text">
            Make a difference for our planet with our impactful environmental stewardship projects. Participate in community tree planting, invigorating clean-up hikes, and comprehensive ecosystem education. Work with us for a healthier, sustainable future.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container th-container2">
  <div class="row gy-24 gx-24 justify-content-center">
    <?php foreach ($gallery as $item): ?>
      <div class="col-lg-3 gallery-box_wrapp">
        <div class="gallery-box">
          <div class="gallery-img global-img">
            <a href="<?= Yii::getAlias('@web') . '/' . Html::encode($item->image) ?>" class="popup-image">
              <div class="icon-btn">
                <i class="fal fa-magnifying-glass-plus"></i>
              </div>
              <img
                src="<?= Yii::getAlias('@web') . '/' . Html::encode($item->image) ?>"
                alt="<?= Html::encode($item->title ?: 'gallery image') ?>" />
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
