<?php

use yii\helpers\Url;
use yii\helpers\Html;

$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';
// $basePath = \Yii::$app->request->baseUrl . '/assets/site/';

use app\providers\components\widgets\site\BreadcrumbWidget;


?>
<?= BreadcrumbWidget::widget([
  'title' => 'Partner',
  'subtitle' => 'Partner with us'
]) ?>

<section
  class="testi-area7 bg-smoke overflow-hidden space"
  id="testi-sec"
  >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div class="title-area mb-40">
          <span class="sub-title">Why partner with us</span>
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
                  Our strategic partnerships with organizations and community leaders enrich our programs by integrating invaluable mentorship opportunities. Through these collaborations, we impart essential knowledge and cultivate vital skills like teamwork, leadership, problem-solving, and communication. Thank you for Partnering with us!
                  </p>
                  <p class="box-text">Please contact us on how we can work together to make a lasting impact.</p>
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
            <img src="<?= $basePath ?>assets/img/bg/m.jpg" alt="test" />
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