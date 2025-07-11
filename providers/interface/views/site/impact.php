<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\providers\components\widgets\site\BreadcrumbWidget;

// $basePath = \Yii::$app->request->baseUrl . 'providers/interface/<?= $basePath
// $basePath = \Yii::$app->request->baseUrl . '/assets/site/';
$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/'; 

?>
<?= BreadcrumbWidget::widget([
    'title'=> 'Positive role models make all the difference',
    'subtitle' => 'Our Impact'
]) ?>
<section
      class="testi-area5 bg-smoke overflow-hidden space"
      id="testi-sec"
      data-bg-src="<?= $basePath ?>assets/img/testimonial/testi_shape_2.png"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6">
            <div class="testi-image-wrapp">
              <div class="testi-img">
                <img src="<?= $basePath ?>assets/img/bg/k.jpg" alt="people" />
              </div>
              <div class="testi-img style2">
                <img src="<?= $basePath ?>assets/img/bg/l.jpg" alt="testimonial" />
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="title-area mb-40">
              <span class="sub-title">Testimonials</span>
              <h2 class="sec-title">What Client Say About us</h2>
            </div>
            <div
              class="swiper th-slider testiSlide5"
              id="testiSlide5"
              data-slider-options='{"effect":"slide","loop":false,"thumbs":{"swiper":".testi-grid2-thumb"}}'
            >
              <div class="swiper-wrapper">
              <?php foreach ($testimonials as $item): ?>
                <div class="swiper-slide">
                  <div class="testi-grid2">
                    <div class="box-content">
                      <p class="box-text">
                      “<?= Html::encode($item->content) ?>”                      </p>
          <h6 class="box-title"><?= Html::encode($item->name) ?></h6>
          <span class="box-desig"><?= Html::encode($item->relation) ?></span>                      <div class="box-review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; ?>
                <!-- <div class="swiper-slide">
                  <div class="testi-grid2">
                    <div class="box-content">
                      <p class="box-text">
                        “My daughter found mentors and friends at KOAS. She is more confident than ever.”
                      </p>
                      <h6 class="box-title">Angelina Rose</h6>
                      <span class="box-desig">KOAS parent</span>
                      <div class="box-review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div> -->
            
              </div>
            </div>
            <div
              class="swiper th-slider testi-grid2-thumb"
              id="testiSlide6"
              data-slider-options='{"effect":"slide","slidesPerView":"6","spaceBetween":7,"loop":false}'
            >
              <div class="swiper-wrapper">
              <?php foreach ($testimonials as $item): ?>
                <div class="swiper-slide">
                  <div class="box-img">
                  <img
          src="<?= Yii::getAlias('@web') . '/' . Html::encode($item->image ?: 'default.jpg') ?>"
          alt="<?= Html::encode($item->name) ?>"
        />
                  </div>
                </div>
              <?php endforeach; ?>
              </div>
              <div class="icon-box">
                <button
                  data-slider-prev="#testiSlide5, #testiSlide6"
                  class="slider-arrow default"
                >
                  <img src="<?= $basePath ?>assets/img/icon/right-arrow2.svg" alt="" />
                </button>
                <button
                  data-slider-next="#testiSlide5, #testiSlide6"
                  class="slider-arrow default"
                >
                  <img src="<?= $basePath ?>assets/img/icon/left-arrow2.svg" alt="" />
                </button>
              </div>
            </div>
          </div>
        </div>
     
      </div>
    </section>

    <div class="counter-sec2 space">
      <div class="container">
        <div class="row gy-4 align-items-center justify-content-center">
          <div class="col-md-6 col-xl-3">
            <div class="counter-card style3">
              <div class="counter-shape"><span></span></div>
              <div class="media-body">
                <h3 class="box-number">
                  <span >100+</span>
                  <!-- class="counter-number" -->
                </h3>
                <h6 class="counter-title">Adventures</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="counter-card style3">
              <div class="counter-shape"><span></span></div>
              <div class="media-body">
                <h3 class="box-number">
                  <span >50+</span>
                  <!-- class="counter-number" -->
                </h3>
                <h6 class="counter-title">Volunteers</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="counter-card style3">
              <div class="counter-shape"><span></span></div>
              <div class="media-body">
                <h3 class="box-number">
                  <span >300+</span>
                  <!-- class="counter-number" -->
                </h3>
                <h6 class="counter-title">Youth Impacted</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="counter-card style3">
              <div class="counter-shape"><span></span></div>
              <div class="media-body">
                <h3 class="box-number">
                  <span >50+</span>
                  <!-- class="counter-number" -->
                </h3>
                <h6 class="counter-title">Events organized</h6>
              </div>
            </div>
          </div>
        </div>
  
      </div>
    </div>