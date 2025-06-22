<?php

use yii\helpers\Html;
use yii\helpers\Url;


$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';

?>
<div class="th-hero-wrapper hero-1" id="hero">
  <div
    class="swiper th-slider hero-slider-1"
    id="heroSlide1"
    data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="hero-inner">
          <div
            class="th-hero-bg"
            data-bg-src="<?= $basePath ?>assets/img/bg/8.jpg"></div>
          <div class="container">
            <div class="hero-style1">
              <span
                class="sub-title style1"
                data-ani="slideinup"
                data-ani-delay="0.2s">Empowering Youth Through</span>
              <h1
                class="hero-title"
                data-ani="slideinup"
                data-ani-delay="0.4s">
                Nature, Adventure and Community.
              </h1>
              <div
                class="btn-group"
                data-ani="slideinup"
                data-ani-delay="0.6s">
                <a href="<?= Url::to(['site/contact']) ?>" class="th-btn th-icon">Contact Us</a>
                <a href="<?= Url::to(['site/services']) ?>" class="th-btn style2 th-icon">Our Services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="hero-inner">
          <div
            class="th-hero-bg"
            data-bg-src="<?= $basePath ?>assets/img/bg/a.jpg"></div>
          <div class="container">
            <div class="hero-style1">
              <span
                class="sub-title style1"
                data-ani="slideinup"
                data-ani-delay="0.2s">Empowering Youth Through</span>
              <h1
                class="hero-title"
                data-ani="slideinup"
                data-ani-delay="0.4s">
                Nature, Adventure and Community.
              </h1>
              <div
                class="btn-group"
                data-ani="slideinup"
                data-ani-delay="0.6s">
                <a href="<?= Url::to(['site/contact']) ?>" class="th-btn th-icon">Contact Us</a>
                <a href="<?= Url::to(['site/services']) ?>" class="th-btn style2 th-icon">Our Services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="hero-inner">
          <div
            class="th-hero-bg"
            data-bg-src="<?= $basePath ?>assets/img/bg/o.jpg"></div>
          <div class="container">
            <div class="hero-style1">
              <span
                class="sub-title style1"
                data-ani="slideinup"
                data-ani-delay="0.2s">Empowering Youth Through</span>
              <h1
                class="hero-title"
                data-ani="slideinup"
                data-ani-delay="0.4s">
                Nature, Adventure and Community.
              </h1>
              <div
                class="btn-group"
                data-ani="slideinup"
                data-ani-delay="0.6s">
                <a href="<?= Url::to(['site/contact']) ?>" class="th-btn th-icon">Contact Us</a>
                <a href="<?= Url::to(['site/services']) ?>" class="th-btn style2 th-icon">Our Services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="th-swiper-custom">
      <button
        data-slider-prev="#heroSlide1"
        class="slider-arrow slider-prev">
        <img src="<?= $basePath ?>assets/img/icon/right-arrow.svg" alt="arrow" />
      </button>
      <div class="slider-pagination"></div>
      <button
        data-slider-next="#heroSlide1"
        class="slider-arrow slider-next">
        <img src="<?= $basePath ?>assets/img/icon/left-arrow.svg" alt="arrow" />
      </button>
    </div>
  </div>
</div>
<div
  class="about-area position-relative overflow-hidden space"
  id="about-sec"
  >
  <div class="container">
    <div class="row">
      <div class="col-xl-6">
        <div class="img-box6">
          <div class="img1">
            <img src="<?= $basePath ?>assets/img/bg/kids.jpg" alt="About" />
          </div>
          <div class="img2">
            <img src="<?= $basePath ?>assets/img/bg/ice.jpg" alt="About" />
          </div>
          <div class="img3">
            <img src="<?= $basePath ?>assets/img/bg/forest.jpg" alt="About" />
          </div>
        </div>
      </div>

      <div class="col-xl-6">
        <div class="ps-xl-5 ms-xl-3">
          <div class="title-area mb-20">
            <span class="sub-title style1">Our Mission</span>
            <h2 class="sec-title mb-20">A healthy Mind in a Healthy Body</h2>
            <p class="sec-text mb-30">
              Our mission is to create a space for immigrant and underprivileged youth to enhance
              their holistic development, foster community cohesion and promote a love for nature
              and adventure.
            </p>
          </div>
          <div class="about-item-wrap">
            <div class="about-item">
              <div class="about-item_img">
                <img src="<?= $basePath ?>assets/img/icon/map3.svg" alt="map" />
              </div>
              <div class="about-item_centent">
                <h5 class="box-title">Skill development</h5>
                <p class="about-item_text">
                  Building teamwork, leadership and problem solving skills through outdoor adventures.
                </p>
              </div>
            </div>
            <div class="about-item">
              <div class="about-item_img">
                <img src="<?= $basePath ?>assets/img/icon/guide.svg" alt="map" />
              </div>
              <div class="about-item_centent">
                <h5 class="box-title">Community Buiding</h5>
                <p class="about-item_text">
                  Strengthening bonds among diverse youth.
                </p>
              </div>
            </div>
          </div>
          <div class="mt-35">
            <a href="<?= Url::to(['site/about']) ?>" class="th-btn style3 th-icon">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section
      class="cta-area py-xl-5 py-lg-4 py-md-3 py-sm-2 space"
      data-overlay="title"
      data-opacity="8"
      data-bg-src="<?= $basePath?>/assets/img/bg/y.jpg "
      
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 pe-xl-4 ps-xl-4 ">
            <div class="title-area mb-30 mt-n3 text-center">
              <h2 class="sec-title text-white text-capitalize">
                get updated the latest news
              </h2>
            </div>
            <form class="newsletter-form style3">
            
              <a type="button" href="<?= Url::to(['site/about']) ?>" class="th-btn style1 btn-fw mb-3">
                About Us<img src="<?= $basePath?>assets/img/icon/plane2.svg" alt="" />
              </a>
              <a type="button" href="<?= Url::to(['site/support']) ?>" class="th-btn style1 btn-fw">
                Support a Youth <img src="<?= $basePath?>assets/img/icon/plane2.svg" alt="" />
              </a>
            </form>
          </div>
        </div>
      </div>
    </section>
<!-- our impact -->
<section
  class="testi-area7 bg-smoke overflow-hidden space"
  id="testi-sec"
  >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div class="title-area mb-40">
          <span class="sub-title">Our Impact</span>
          <h2 class="sec-title">Changing Lives One Adventure at a Time</h2>
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
                    “At KOAS, we've empowered over 300 youth, helping them build confidence through challenge, nature, and connection. With more than 50 outdoor adventures, we’ve turned the wilderness into both a playground and a classroom. More than 200 volunteers have stepped up to shape the next generation. Together, we’ve planted over 300 trees, healing not just the Earth, but the hearts and hopes of our youth—one seed at a time.”
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="testi-image-wrapp2">
          <div class="testi-img">
            <img src="<?= $basePath ?>assets/img/bg/c.jpg" alt="test" />
          </div>
          <div class="testi-shape2">
            <img src="<?= $basePath ?>assets/img/testimonial/testi_shape_1.png" alt="test1" />
          </div>
          <div class="testi-img2">
            <img src="<?= $basePath ?>assets/img/bg/d.jpg" alt="test2" />
          </div>
          <div class="testi-shape">
            <img src="<?= $basePath ?>assets/img/testimonial/testi_shape_2.png" alt="test3" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- sponsors -->
<div class="brand-area overflow-hidden space-bottom">
      <div class="container th-container">
        <h2 class=" sec-title"> A big Thanks to our Sponsors</h2>
        <div
          class="swiper th-slider brandSlider1"
          id="brandSlider1"
          data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'
        >
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_1.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_1.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_2.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_2.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_3.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_3.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_4.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_4.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_5.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_5.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_6.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_6.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_7.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_7.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_8.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_8.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_4.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_4.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_3.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_3.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_2.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_2.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="brand-box">
                <a href="home-tour.html"
                  ><img
                    class="original"
                    src="<?= $basePath ?>assets/img/brand/brand_1_1.svg"
                    alt="Brand Logo" />
                  <img
                    class="gray"
                    src="<?= $basePath ?>assets/img/brand/brand_1_1.svg"
                    alt="Brand Logo"
                /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- sign up newsletter -->

<div
  class="space-extra2-top space-extra2-bottom"
  >
  <div class="container">
    <div
      class="row flex-row-reverse justify-content-center align-items-center">
      <div class="col-lg-6">
        <!-- <div class="video-box1">
              <a
                href="https://www.youtube.com/watch?v=cQfIUPw72Dk"
                class="play-btn style2 popup-video"
                ><i class="fa-sharp fa-solid fa-play"></i
              ></a>
            </div> -->
      </div>
      <div class="col-lg-6">
        <div>
          <form
            action="https://html.themeholy.com/tourm/demo/mail.php"
            method="POST"
            class="contact-form style2 ajax-contact">
            <h3 class="sec-title mb-30 text-capitalize">Register with us</h3>
            <div class="row">
              <div class="col-12 form-group">
                <input
                  type="text"
                  class="form-control"
                  name="name"
                  id="name3"
                  placeholder="First Name" />
                <img src="<?= $basePath ?>assets/img/icon/user.svg" alt="user" />

              </div>
              <div class="col-12 form-group">
                <input
                  type="email"
                  class="form-control"
                  name="email3"
                  id="email3"
                  placeholder="Your Mail" />
                <img src="<?= $basePath ?>assets/img/icon/mail.svg" alt="email" />
              </div>
             
            
              <div class="form-btn col-12 mt-24">
                <button type="submit" class="th-btn style3">
                  Sign Up
                  <img src="<?= $basePath ?>assets/img/icon/plane.svg" alt="plane" />
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