<?php

use yii\helpers\Url;
use yii\helpers\Html;

$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';
// $basePath = \Yii::$app->request->baseUrl . '/assets/site/';

use app\providers\components\widgets\site\BreadcrumbWidget;


?>
<?= BreadcrumbWidget::widget([
  'title' => 'Volunteer',
  'subtitle' => 'Become a volunteer today'
]) ?>

<section
  class="testi-area7 bg-smoke overflow-hidden space"
  id="testi-sec"
  >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div class="title-area mb-40">
          <span class="sub-title">Why volunteer</span>
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
                  Our volunteers are the heart of our outdoor programs. Their dedication helps immigrant youth connect with peers, forge friendships, and seamlessly integrate into the local community. These shared experiences foster a profound sense of belonging, directly combating feelings of isolation and nurturing confident, well-adjusted individuals.  Thank you for volunteering!.
                  </p>
                
                
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
            <img src="<?= $basePath ?>assets/img/bg/n.jpg" alt="test" />
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

<div
  class="about-area position-relative overflow-hidden space overflow-hidden"
  id="about-sec">
  <div class="container">
  <h2 class="sec-title mb-1 ">How to Volunteer</h2>

    <div class="row gy-4">
      <!-- <div class="col-xl-6">
        <div class="img-box15 pe-xl-4">
          <div class="img1 global-img">
            <img src="<?= $basePath ?>assets/img/bg/68.jpg" alt="About" />
          </div>
        </div>
      </div> -->
      <div class="">
        <div class="ps-xl-4">
          <div class="title-area mb-20">
            <!-- <span class="sub-title style1">mandate</span> -->
            <h2 class="sec-title mb-20">
            Be a mentor
            </h2>
            <p class="sec-text2 mb-50">
            Becoming a mentor with KOAS means guiding young people as they discover their strengths and overcome challenges. Your presence provides encouragement, support, and a sense of belonging. Share your journey, wisdom, and life experience to help a youth grow in confidence and purpose through meaningful outdoor adventures, leadership activities, and a strong, nurturing community.            </p>

          </div>
         
        </div>
      </div>
      <div class="">
        <div class="ps-xl-4">
          <div class="title-area mb-20">
            <!-- <span class="sub-title style1">mandate</span> -->
            <h2 class="sec-title mb-20">
            Join an event 
            </h2>
            <p class="sec-text2 mb-50">
            Join a KOAS event and be part of something transformative. Whether it’s hiking, tree planting, kayaking, or cultural exchange, each activity connects youth to nature and each other. Your presence helps create inclusive outdoor experiences that promote wellness, leadership, and teamwork while building lifelong memories. No experience needed—just your energy and willingness to show up.            </p>

          </div>
        <!-- "swiftmailer/swiftmailer": "^6.3", -->
        <!-- 104.37.183.1 -->
        </div>
      </div>
      <div class="">
        <div class="ps-xl-4">
          <div class="title-area mb-20">
            <!-- <span class="sub-title style1">mandate</span> -->
            <h2 class="sec-title mb-20">
            Lend your skills to make a difference
            </h2>
            <p class="sec-text2 mb-50">
            Use your unique skills to create impact! Whether you're a photographer, web designer, counselor, or cook, KOAS welcomes passionate individuals who want to help behind the scenes. Your contribution helps shape enriching programs and events for youth. Every skill shared—big or small—builds toward a stronger, empowered community rooted in adventure, connection, and purpose.            </p>

          </div>
         
        </div>
      </div>
    </div>
  </div>
</div>