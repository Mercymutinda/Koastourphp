<?php

use yii\helpers\Url;

$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';

?>
<footer class="footer-wrapper bg-title footer-layout2 footer-layout5 ">

  <div class="widget-area">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-6 col-xl-3 ms-xl-5">
          <div class="widget footer-widget">
            <div class="th-widget-about">
              <div class="about-logo">
                <a href="<?= Url::to(['site/index']) ?>"><img src="<?= $basePath ?>assets/img/bg/logov3.png"
                    style="width:80px; height:80px;" alt="Koas" /></a>
              </div>
              <p class="about-text">
                Kifaru Outdoor Adventures Society (KOAS) is a non-profit organization dedicated to providing outdoor
                experiences for youth.
              </p>
              <div class="th-social">
                <!-- <a href="https://www.facebook.com/"
                      ><i class="fab fa-facebook-f"></i
                    ></a> -->
                <a href="https://youtube.com/@kifaruoutdooradventuressociety?si=CKaUfjLl-1jIggbP" target="_blank"><i
                    class="fab fa-youtube"></i></a>
                <a href="https://www.linkedin.com/in/kifaru-outdooradventures-19a62b362?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                  target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <!-- <a href="https://www.whatsapp.com/"
                      ><i class="fab fa-twitter"></i
                    ></a> -->
                <a href="https://www.instagram.com/kifaru_koas?igsh=MWF0ZDh1bnZqb2tzbQ==" target="_blank"><i
                    class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-auto">
          <div class="widget widget_nav_menu footer-widget">
            <h3 class="widget_title">Quick Links</h3>
            <div class="menu-all-pages-container">
              <ul class="menu">
                <li> <a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                <li> <a href="<?= Url::to(['site/about']) ?>">About us</a></li>
                <li> <a href="<?= Url::to(['site/services']) ?>">Our Service</a></li>
                <li> <a href="<?= Url::to(['site/contact']) ?>">Contact us</a></li>
                <li> <a href="<?= Url::to(['site/support']) ?>">Support Us</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-auto">
          <div class="widget footer-widget">
            <h3 class="widget_title">Get In Touch</h3>
            <div class="th-widget-contact">
              <div class="info-box_text">
                <div class="icon">
                  <img src="<?= $basePath ?>assets/img/icon/phone.svg" alt="img" />
                </div>
                <div class="details">

                  <p>
                    <a href="tel:+12042911303 class=" info-box_link">
                      +1(204)291-1303</a>
                  </p>
                </div>
              </div>
              <div class="info-box_text">
                <div class="icon">
                  <img src="<?= $basePath ?>assets/img/icon/envelope.svg" alt="img" />
                </div>
                <div class="details">
                  <p>
                    <a href="mailto:info@kifaruoutdoors.ca" class="info-box_link">info@kifaruoutdoors.ca</a>
                  </p>
                  <p>
                    <a href="kifaruoutdooradventures@hotmail.com"
                      class="info-box_link">kifaruoutdooradventures@hotmail.com</a>
                  </p>
                </div>
              </div>
              <div class="info-box_text">
                <div class="icon">
                  <img src="<?= $basePath ?>assets/img/icon/location-dot.svg" alt="img" />
                </div>
                <div class="details">
                  <p>Winnipeg MB, Canada</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="copyright-wrap">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
          <p class="copyright-text">
            Kifaru Outdoors Adventures Society.
            Copyright 2025 . All Rights
            Reserved.
          </p>
        </div>
        <!-- <div class=" col-lg-3 col-md-6">
          <div class="copyright-menu">
          <p>
            Developed by
         <a class="text-primary" href="https://www.github.com"> <?= $_SERVER['APP_DEVELOPER'] ?></a>
          </p>  
          </div>
      </div> -->
    </div>
  </div>
  <!-- <div
        class="shape-mockup spin d-none d-xxl-block"
        data-top="10%"
        data-left="4%"
      >
        <img src="<?= $basePath ?>assets/img/shape/shape_2_11.png" alt="shape" />
      </div>
      <div
        class="shape-mockup movingX d-none d-xxl-block"
        data-top="20%"
        data-right="5%"
      >
        <img src="<?= $basePath ?>assets/img/shape/shape_2_2.png" alt="shape" />
      </div> -->
</footer>