<?php
use app\providers\components\widgets\site\BreadcrumbWidget;
use yii\helpers\Url;
use yii\helpers\Html;
$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';

?>

<?= BreadcrumbWidget::widget([
  'title' => '"We foster a sense of shared purpose and family',
  'subtitle' => 'Learn more about our mission'
])

?>
<div class="overflow-hidden space">
  <div class="container">
    <div class="row gy-3 justify-content-between align-items-center">
      <div class="col-lg-6">
        <div class="title-area">
          <!-- <span class="sub-title style1">Why Choose KOAS</span> -->
          <h2 class="sec-title">Our Core Areas </h2>
        </div>
      </div>
      <div class="col-lg-5">
        <p class="mb-60">
          To create a space for immigrant and underprivileged youth
          to enhance their holistic development, foster community
          cohesion and promote a love for nature and adventure.
        </p>
      </div>
    </div>
    <div class="row gy-80">
    <?php foreach ($about as $item): ?>
      <div class="col-md-6 col-xl-4">
        <div class="choose-item">
          <div class="box-icon">
          <img
          class="team-photo"
          src="<?= Yii::getAlias('@web') . '/' . Html::encode($item->image ?: 'default.jpg') ?>"
          alt="<?= Html::encode($item->title) ?>"
        />
          </div>
          <div class="media-body">
            <h3 class="box-title"><?= Html::encode($item->title) ?></h3>
            <p class="box-text">
            <?= Html::encode($item->content) ?>
            </p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</div>
<div
  class="about-area position-relative overflow-hidden space overflow-hidden"
  id="about-sec">
  <div class="container">
    <div class="row gy-4">
      <div class="col-xl-6">
        <div class="img-box15 pe-xl-4">
          <div class="img1 global-img">
            <img src="<?= $basePath ?>assets/img/bg/e.jpg" alt="About" />
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="ps-xl-4">
          <div class="title-area mb-20">
            <!-- <span class="sub-title style1">mandate</span> -->
            <h2 class="sec-title mb-20">
            Mandate
            </h2>
            <p class="sec-text2 mb-50">
              Kifaru Outdoor Adventures exists to create opportunities for immigrant and underprivileged youth to develop holistically in their social, physical, and mental well-being while developing their leadership skills through participation in outdoor nature and nature-based activities. Our activities provide an environment that fosters community cohesion, breaks barriers of access to nature, and promote a love for nature and adventure.
            </p>

          </div>
          <!-- <div class="about-item-wrap style2">
            <div class="about-item style4">
              <div class="about-item_img">
                <img src="<?= $basePath ?>assets/img/icon/about_2_1.svg" alt="" />
              </div>
              <div class="about-item_centent">
                <h5 class="box-title">Secure Booking</h5>
                <p class="about-item_text">
                  Have a valid credit card or preferred payment method ready
                  to complete the booking process.
                </p>
              </div>
            </div>
            <div class="about-item style4">
              <div class="about-item_img">
                <img src="<?= $basePath ?>assets/img/icon/about_2_2.svg" alt="" />
              </div>
              <div class="about-item_centent">
                <h5 class="box-title">Cultural Tours</h5>
                <p class="about-item_text">
                  Have a valid credit card or preferred payment method ready
                  to complete the booking process.
                </p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>

