<?php

use yii\helpers\Url;
use yii\helpers\Html;

$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/'; 

use app\providers\components\widgets\site\BreadcrumbWidget;


?>
<?= BreadcrumbWidget::widget([
    'title' => 'Every youth deserves the chance to thrive',
    'subtitle' => 'Support a youth Today'
]) ?>
<section
      class="position-relative bg-smoke overflow-hidden space"
      id="service-sec"
    >
    <!-- data-bg-src="<?= $basePath?>assets/img/bg/shape_bg_1.png" -->
    
      <div class="container">
        <div class="row">
          <div class="col-lg-7 offset-lg-3">
            <div class="title-area text-center">
              <!-- <span class="sub-title">Immerse Yourself in Nature</span> -->
              <h2 class="sec-title">Your perfect forest adventure</h2>
              <p class="sec-text">
              Our work is powered by the incredible support of individuals and organizations who believe in empowering immigrant youth. Your contributions, in various forms, create a tangible and lasting impact on their lives, helping them thrive in their new communities.
              </p>
          
          </div>
        </div>
       
      </div>

      <div class="overflow-hidden space">
  <div class="container">
    <div class="row gy-3 justify-content-between align-items-center">
      <div class="col-lg-6">
        <div class="title-area">
          <span class="sub-title style1">Why Support Us</span>
          <h2 class="sec-title">Strategic partnerships</h2>
        </div>
      </div>
   
    </div>
    <div class="row gy-80">
      <div class="col-md-6 col-xl-4">
        <div class="choose-item">
          <div class="box-icon">
            <img src="<?= $basePath ?>assets/img/icon/choose_3_1.svg" alt="image" />
          </div>
          <div class="media-body">
            <h3 class="box-title">Volunteers</h3>
            <p class="box-text">
            Our volunteers are the heart of our outdoor programs. Their dedication helps immigrant youth connect with peers, forge friendships, and seamlessly integrate into the local community. These shared experiences foster a profound sense of belonging, directly combating feelings of isolation and nurturing confident, well-adjusted individuals.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="choose-item">
          <div class="box-icon">
            <img src="<?= $basePath ?>assets/img/icon/choose_3_2.svg" alt="image" />
          </div>
          <div class="media-body">
            <h3 class="box-title"> Donations</h3>
            <p class="box-text">
            Donations are crucial for providing safe and engaging outdoor activities. These funds enable immigrant youth to boost their physical fitness, improve mental well-being, and significantly reduce stress. Your financial support offers a vital outlet for healthy self-expression and encourages a lifelong commitment to healthy lifestyles.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-4">
        <div class="choose-item">
          <div class="box-icon">
            <img src="<?= $basePath ?>assets/img/icon/choose_3_3.svg" alt="image" />
          </div>
          <div class="media-body">
            <h3 class="box-title">partnership</h3>
            <p class="box-text">
            Our strategic partnerships with organizations and community leaders enrich our programs by integrating invaluable mentorship opportunities. Through these collaborations, we impart essential knowledge and cultivate vital skills like teamwork, leadership, problem-solving, and communication. 
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

    </section>


<section
      class="cta-area py-xl-5 py-lg-4 py-md-3 py-sm-2 space"
      data-overlay="title"
      data-opacity="8"
      data-bg-src="<?= $basePath?>/assets/img/bg/y.jpg "
      
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-6 pe-xl-4 ps-xl-4 ">
            <div class="title-area mb-30 mt-n3 text-center">
              <h2 class="sec-title text-white text-capitalize">
                support a youth today
              </h2>
            </div>

            <div
                class="btn-group" style="display:flex; flex-wrap:nowrap;"
                >
                <a href="<?= Url::to(['site/donate']) ?>" class="th-btn th-icon">Donate Today</a>
                <a href="<?= Url::to(['site/volunteer']) ?>" class="th-btn th-icon">Become a Volunteer</a>
                <a href="<?= Url::to(['site/partner']) ?>" class="th-btn th-icon">Partner With KOAS</a>
              </div>
           
          </div>
        </div>
      </div>
    </section>

    <section
      class="tour-area position-relative bg-top-center overflow-hidden space"
      id="service-sec"
      data-bg-src="assets/img/bg/tour_bg_1.jpg"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="title-area text-center">
              <span class="sub-title">Support us today.</span>
              <h2 class="sec-title">Ways to support</h2>
            </div>
          </div>
        </div>
        <div class="nav nav-tabs tour-tabs" id="nav-tab" role="tablist">
          <button
            class="nav-link th-btn active"
            id="nav-step1-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-step1"
            type="button"
          >
            <img src="<?= $basePath ?>assets/img/icon/tour_icon_1.svg" alt="" />Donate
          </button>
          <button
            class="nav-link th-btn active"
            id="nav-step1-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-step1"
            type="button"
          >
            <img src="<?= $basePath ?>assets/img/icon/tour_icon_1.svg" alt="" />Volunteer
          </button>
          <button
            class="nav-link th-btn active"
            id="nav-step1-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-step1"
            type="button"
          >
            <img src="<?= $basePath ?>assets/img/icon/tour_icon_1.svg" alt="" />Sponsor a Program
          </button>
          <button
            class="nav-link th-btn active"
            id="nav-step1-tab"
            data-bs-toggle="tab"
            data-bs-target="#nav-step1"
            type="button"
          >
            <img src="<?= $basePath ?>assets/img/icon/tour_icon_1.svg" alt="" />Partner with us
          </button>
          
          
        
        </div>

      </div>
    </section>

    