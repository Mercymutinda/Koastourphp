<?php
use yii\helpers\Url;
use yii\helpers\Html;

// $basePath = \Yii::$app->request->baseUrl . 'providers/interface/assets/site/assets/';
$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/'; 

use app\providers\components\widgets\site\BreadcrumbWidget;


?>
<?= BreadcrumbWidget::widget([
    'title'=> 'Contacts',
    'subtitle' => 'Contact Us'
]) ?>

<div class="space">
      <div class="container">
        <div class="title-area text-center">
          <span class="sub-title">Get In Touch</span>
          <h2 class="sec-title">Our Contact Information</h2>
        </div>
        <div class="row gy-4 justify-content-center">
          <div class="col-xl-4 col-lg-6">
            <div class="about-contact-grid style2">
              <div class="about-contact-icon"> 
                <img src="<?= $basePath ?>assets/img/icon/location-dot2.svg" alt="" />
              </div>
              <div class="about-contact-details">
                <h6 class="box-title">Our Address</h6>
                <p class="about-contact-details-text">
                  <!-- 2690 Hiltona Street Victoria -->
                </p>
                <p class="about-contact-details-text">Winnipeg MB, Canada</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6">
            <div class="about-contact-grid">
              <div class="about-contact-icon">
                <img src="<?= $basePath ?>assets/img/icon/call.svg" alt="" />
              </div>
              <div class="about-contact-details">
                <h6 class="box-title">Phone Number</h6>
                <p class="about-contact-details-text">
                  <a href="tel:+12042911303">+1 204 291 1303</a>
                </p>
                <p class="about-contact-details-text">
                  <!-- <a href="tel:+12042911303">+1 204 291 1303</a> -->
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6">
            <div class="about-contact-grid">
              <div class="about-contact-icon">
                <img src="<?= $basePath ?>assets/img/icon/mail.svg" alt="" />
              </div>
              <div class="about-contact-details">
                <h6 class="box-title">Email Address</h6>
                <p class="about-contact-details-text">
                  <a href="mailto:info@kifaruoutdoors.ca">info@kifaruoutdoors.ca</a>
                </p>
                <p class="about-contact-details-text">
                  <a href="mailto:kifaruoutdooradventures@hotmail.com">kifaruoutdooradventures@hotmail.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div
      class="space-extra2-top space-extra2-bottom"
      data-bg-src="<?= $basePath?>assets/img/bg/tree.jpg"
    >
      <div class="container">
        <div
          class="row flex-row-reverse justify-content-center align-items-center"
        >
          <div class="col-lg-6">
         
          </div>
          <div class="col-lg-6">
            <div>
              <form
                action="https://html.themeholy.com/tourm/demo/mail.php"
                method="POST"
                class="contact-form style2 ajax-contact"
              >
                <h3 class="sec-title mb-30 text-capitalize">Register with Us</h3>
                <div class="row">
                  <div class="col-12 form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="name"
                      id="name3"
                      placeholder="Full name / Organization"
                    />
                    <img src="<?= $basePath?>assets/img/icon/user.svg" alt="" />
                  </div>
                  <div class="col-12 form-group">
                    <input
                      type="email"
                      class="form-control"
                      name="email3"
                      id="email3"
                      placeholder="Your Email"
                    />
                    <img src="<?= $basePath?>assets/img/icon/mail.svg" alt="" />
                  </div>
                  <div class="form-group col-12">
                    <select
                      name="subject"
                      id="subject"
                      class="form-select nice-select"
                    >
                      <option
                        value="Select Tour Type"
                        selected="selected"
                        disabled="disabled"
                      >
                        Select Support Type
                      </option>
                      <option value="Africa Adventure">Volunteer</option>
                      <option value="Africa Wild">Partner</option>
                     
                    </select>
                  </div>
                  <div class="form-group col-12">
                    <textarea
                      name="message"
                      id="message"
                      cols="30"
                      rows="3"
                      class="form-control"
                      placeholder="Your Message"
                    ></textarea>
                    <img src="<?= $basePath?>assets/img/icon/chat.svg" alt="" />
                  </div>
                  <div class="form-btn col-12 mt-24">
                    <button type="submit" class="th-btn style3">
                     Sign Up
                      <img src="<?= $basePath?>assets/img/icon/plane.svg" alt="" />
                    </button>
                  </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>