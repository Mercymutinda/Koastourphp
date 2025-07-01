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
                <div class="swiper-slide">
                  <div class="testi-grid2">
                    <div class="box-content">
                      <p class="box-text">
                        “KOAS helped me discover who I really am. I never felt so connected to nature and to myself.”
                      </p>
                      <h6 class="box-title">Sarah </h6>
                      <span class="box-desig">A KOAS youth participant</span>
                      <div class="box-review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
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
                </div>
                <!-- <div class="swiper-slide">
                  <div class="testi-grid2">
                    <div class="box-content">
                      <p class="box-text">
                        “Solar panels adorn the roof, harnessing renewable
                        energy to power the home and even feed excess
                        electricity back into the grid. harnessing renewable
                        energy to power the High-performance insulation and
                        triple-glazed”
                      </p>
                      <h6 class="box-title">Michel Smith</h6>
                      <span class="box-desig">Traveller</span>
                      <div class="box-review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testi-grid2">
                    <div class="box-content">
                      <p class="box-text">
                        A sophisticated rainwater harvesting system collects and
                        filters rainwater for irrigation and non-potable uses,
                        reducing reliance on municipal water sources. rainwater
                        harvesting system collects and Greywater systems
                      </p>
                      <h6 class="box-title">Jesmen</h6>
                      <span class="box-desig">Traveller</span>
                      <div class="box-review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testi-grid2">
                    <div class="box-content">
                      <p class="box-text">
                        Throughout the interior, eco-friendly materials like
                        reclaimed wood, bamboo flooring, and recycled glass
                        countertops create a luxurious yet interior eco-friendly
                        materials like reclaimed wood, sustainable ambiance.
                      </p>
                      <h6 class="box-title">Sarah Rahman</h6>
                      <span class="box-desig">Traveller</span>
                      <div class="box-review">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testi-grid2">
                    <div class="box-content">
                      <p class="box-text">
                        “A home that perfectly blends sustainability with luxury
                        until I discovered Ecoland Residence. From the moment I
                        stepped into this community, I knew it was where I
                        wanted to live. The commitment to eco-friendly living”
                      </p>
                      <h6 class="box-title">Angelina Rose</h6>
                      <span class="box-desig">Traveller</span>
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
                <div class="swiper-slide">
                  <div class="box-img">
                    <img
                      src="<?= $basePath ?>assets/img/testimonial/testi_4_1.png"
                      alt="Image"
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="box-img">
                    <img
                      src="<?= $basePath ?>assets/img/testimonial/testi_4_2.png"
                      alt="Image"
                    />
                  </div>
                </div>
                <!-- <div class="swiper-slide">
                  <div class="box-img">
                    <img
                      src="<?= $basePath ?>assets/img/testimonial/testi_4_3.png"
                      alt="Image"
                    />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="box-img">
                    <img
                      src="<?= $basePath ?>assets/img/testimonial/testi_4_4.png"
                      alt="Image"
                    />
                  </div>
                </div> -->
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
        <!-- <div
          class="shape-mockup d-none d-xl-block"
          data-bottom="-23%"
          data-left="-20%"
        >
          <img
            class="gmovingX"
            src="<?= $basePath ?>assets/img/shape/shape_17.png"
            alt="shape"
          />
        </div>
        <div
          class="shape-mockup d-none d-xl-block"
          data-bottom="23%"
          data-right="-20%"
        >
          <img src="<?= $basePath ?>assets/img/shape/shape_18.png" alt="shape" />
        </div> -->
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
        <!-- <div
          class="shape-mockup shape1 d-none d-xl-block"
          data-top="40%"
          data-left="-17%"
        >
          <img src="<?= $basePath ?>assets/img/shape/shape_1.png" alt="shape" />
        </div> -->
        <!-- <div
          class="shape-mockup shape2 d-none d-xl-block"
          data-top="55%"
          data-left="-18%"
        >
          <img src="<?= $basePath ?>assets/img/shape/shape_2.png" alt="shape" />
        </div> -->
        <!-- <div
          class="shape-mockup shape3 d-none d-xl-block"
          data-top="47%"
          data-left="-10%"
        >
          <img src="<?= $basePath ?>assets/img/shape/shape_3.png" alt="shape" />
        </div> -->
        <!-- <div
          class="shape-mockup spin d-none d-xl-block"
          data-bottom="-15%"
          data-left="-15%"
        >
          <img src="<?= $basePath ?>assets/img/shape/shape_2_3.png" alt="shape" />
        </div> -->
        <!-- <div
          class="shape-mockup jump d-none d-xl-block"
          data-top="30%"
          data-right="-14%"
        >
          <img src="<?= $basePath ?>assets/img/shape/shape_2_2.png" alt="shape" />
        </div> -->
        <!-- <div
          class="shape-mockup spin d-none d-xl-block"
          data-bottom="-10%"
          data-right="-14%"
        >
          <img src="<?= $basePath ?>assets/img/shape/shape_2_5.png" alt="shape" />
        </div> -->
      </div>
    </div>