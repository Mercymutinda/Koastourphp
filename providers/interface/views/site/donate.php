<?php

use yii\helpers\Url;
use yii\helpers\Html;

$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';
// $basePath = \Yii::$app->request->baseUrl . '/assets/site/';

use app\providers\components\widgets\site\BreadcrumbWidget;


?>
<?= BreadcrumbWidget::widget([
  'title' => 'Donate',
  'subtitle' => 'Donate today'
]) ?>
<section
  class="testi-area7 bg-smoke overflow-hidden space"
  id="testi-sec"
  >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div class="title-area mb-40">
          <span class="sub-title">Why Donate</span>
          <h2 class="sec-title">Changing Lives One Donation at a Time</h2>
        </div>
        <div
          class="swiper th-slider testiSlide5"
          id="testiSlide7"
          data-slider-options='{"effect":"slide","loop":false,"thumbs":{"swiper":".testi-grid2-thumb"}}'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testi-grid2">
                <div class="box-content">
                  <p class="box-text">
                  Support our mission and help us reach more youth with life-changing programs.
                  Donations are crucial for providing safe and engaging outdoor activities. These funds enable immigrant youth to boost their physical fitness, improve mental well-being, and significantly reduce stress. Your financial support offers a vital outlet for healthy self-expression and encourages a lifelong commitment to healthy lifestyles.Your support allows for program development, expanding opportunities, and serving more young people. Thank you for your donation!
                  </p>
                <p class="box-text">Please contact us to make a donation.</p>
                
                  <a href="<?= Url::to(['site/contact']) ?>" class="th-btn th-icon">Contact us today</a>


             
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="testi-image-wrapp2">
          <div class="testi-img">
            <img src="<?= $basePath ?>assets/img/bg/n.jpeg" alt="test" />
          </div>
          <div class="testi-shape2">
            <img src="<?= $basePath ?>assets/img/testimonial/testi_shape_1.png" alt="test1" />
          </div>
          <!-- <div class="testi-img2">
            <img src="<?= $basePath ?>assets/img/testimonial/testi-img2.jpg" alt="test2" />
          </div> -->
          <!-- <div class="testi-shape">
            <img src="<?= $basePath ?>assets/img/testimonial/testi_shape_2.png" alt="test3" />
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>

