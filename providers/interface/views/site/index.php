<?php
use yii\helpers\Html;
use yii\helpers\Url;

$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';
?>

<div class="th-hero-wrapper hero-1" id="hero">
  <div class="swiper th-slider hero-slider-1" id="heroSlide1"
    data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="hero-inner">
          <div class="th-hero-bg" data-bg-src="<?= $basePath ?>assets/img/bg/8.jpg"></div>
          <div class="container">
            <div class="hero-style1">
              <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Empowering Youth Through</span>
              <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Nature, Adventure and Community.</h1>
              <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                <a href="<?= Url::to(['site/contact']) ?>" class="th-btn th-icon">Contact Us</a>
                <a href="<?= Url::to(['site/services']) ?>" class="th-btn style2 th-icon">Our Services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="th-swiper-custom">
      <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img
          src="<?= $basePath ?>assets/img/icon/right-arrow.svg" alt="arrow" /></button>
      <div class="slider-pagination"></div>
      <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><img
          src="<?= $basePath ?>assets/img/icon/left-arrow.svg" alt="arrow" /></button>
    </div>
  </div>
</div>

<div class="about-area position-relative overflow-hidden space" id="about-sec">
  <div class="container">
    <div class="row">
      <div class="col-xl-6">
        <div class="img-box6">
          <div class="img1"><img src="<?= $basePath ?>assets/img/bg/kids.jpg" alt="About" /></div>
          <div class="img2"><img src="<?= $basePath ?>assets/img/bg/ice.jpg" alt="About" /></div>
          <div class="img3"><img src="<?= $basePath ?>assets/img/bg/forest.jpg" alt="About" /></div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="ps-xl-5 ms-xl-3">
          <div class="title-area mb-20">
            <span class="sub-title style1">Our Mission</span>
            <h2 class="sec-title mb-20">A healthy Mind in a Healthy Body</h2>
            <p class="sec-text mb-30">Our mission is to create a space for immigrant and underprivileged youth to
              enhance their holistic development, foster community cohesion and promote a love for nature and adventure.
            </p>
          </div>
          <div class="mt-35">
            <a href="<?= Url::to(['site/about']) ?>" class="th-btn style3 th-icon">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="testi-area7 bg-smoke overflow-hidden space" id="testi-sec">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div class="title-area mb-40">
          <span class="sub-title">Our Impact</span>
          <h2 class="sec-title">Changing Lives One Adventure at a Time</h2>
        </div>
        <div class="testi-grid2">
          <div class="box-content">
            <p class="box-text">“At KOAS, we've empowered over 300 youth, helping them build confidence through
              challenge, nature, and connection...”</p>
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="testi-image-wrapp2">
          <div class="testi-img"><img src="<?= $basePath ?>assets/img/bg/c.jpg" alt="Impact" /></div>
          <div class="testi-shape2"><img src="<?= $basePath ?>assets/img/testimonial/testi_shape_1.png" alt="shape" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- EVENTS  -->

<section class="py-5 space-bottom" id="events">
  <div class="container">

    <div class="text-center mb-5">
      <span class="text-uppercase text-primary d-block" style="font-size:12px; letter-spacing:.08em;">Our Events</span>
      <h2 class="fw-bold">Upcoming Adventures</h2>
    </div>

    <div class="row g-0 align-items-stretch">

      <div class="col-lg-6 d-flex flex-column">

        <div
          style="position:relative; width:100%; height:280px; overflow:hidden; border-radius:12px 12px 0 0; cursor:zoom-in;"
          id="eventBannerWrap">
          <img src="<?= $basePath ?>assets/img/bg/desertsafari.jpeg" alt="Desert sand dunes — Spirit of Adventure hike"
            id="eventBannerImg"
            style="width:100%; height:auto; object-fit:cover; object-position:center; display:block; transition:opacity .15s;"
            onmouseover="this.style.opacity='.88'" onmouseout="this.style.opacity='1'" title="Click to enlarge" />
          <div style="position:absolute; bottom:10px; right:12px; background:rgba(0,0,0,.45);
                      color:#fff; font-size:11px; padding:3px 8px; border-radius:20px; pointer-events:none;">
            <i class="fal fa-search-plus me-1"></i>Click to enlarge
          </div>
        </div>

        <div class="flex-grow-1 p-4"
          style="background:#fff; border:0.5px solid rgba(0,0,0,.1); border-top:none; border-radius:0 0 12px 12px;">
          <h3 class="fw-bold mb-1">The Spirit of Adventure</h3>
          <p class="text-muted mb-3" style="font-size:13px;">
            <i class="fal fa-calendar-alt me-2"></i>June 06, 2026 &nbsp;·&nbsp; Kiche Manitou Provincial Park
          </p>
          <p class="mb-4" style="font-size:14px; line-height:1.7;">
            Join us for a hike through the Spirit Sands trail in Kiche Manitou Provincial Park.
            Walk through Manitoba's desert, with real sand dunes and see the famous Devil's Punch Bowl
            and its magnificent turquoise color!
          </p>

          <a href="https://forms.gle/CkgHHEJLVHVj6RMM9" target="_blank"
            class="d-flex align-items-center gap-3 text-decoration-none rounded-3 p-3"
            style="background:#E6F1FB; border:1px solid #B5D4F4; transition:background .15s;"
            onmouseover="this.style.background='#B5D4F4'" onmouseout="this.style.background='#E6F1FB'">
            <div class="d-flex align-items-center justify-content-center rounded-2 flex-shrink-0"
              style="width:36px; height:36px; background:#185FA5;">
              <i class="fas fa-file-alt text-white" style="font-size:14px;"></i>
            </div>
            <div>
              <small class="d-block text-primary mb-1" style="font-size:11px;">Prefer a quicker experience?</small>
              <span class="fw-semibold" style="font-size:13px; color:#0C447C;">Register via Google Forms &rarr;</span>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-6 d-flex flex-column">
        <div class="flex-grow-1 p-4 p-xl-5"
          style="background:#fff; border:0.5px solid rgba(0,0,0,.1); border-left:none; border-radius:0 12px 12px 0;">
          <h4 class="fw-bold mb-1">Reserve Your Spot</h4>
          <p class="text-muted mb-4" style="font-size:13px;">Fill in your details below to secure your place.</p>

          <form action="<?= \yii\helpers\Url::to(['site/contact']) ?>" method="POST" class="contact-form ajax-contact">
            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
              value="<?= Yii::$app->request->csrfToken ?>" />
            <input type="hidden" name="subject" value="Event Registration: Spirit of Adventure" />

            <div class="mb-3">
              <label class="form-label" style="font-size:13px; font-weight:500;">Full Name</label>
              <input type="text" class="form-control" name="name" placeholder="Jane Smith" required />
            </div>

            <div class="mb-4">
              <label class="form-label" style="font-size:13px; font-weight:500;">Email Address</label>
              <input type="email" class="form-control" name="email" placeholder="jane@example.com" required />
            </div>

            <button type="submit" class="th-btn style3 w-100">Confirm Registration</button>

            <div class="d-flex align-items-center gap-2 mt-4" style="font-size:12px; color:#aaa;">
              <hr class="flex-grow-1 m-0" />
              or use the quick link above
              <hr class="flex-grow-1 m-0" />
            </div>
          </form>

          <p class="form-messages mb-0 mt-3"></p>
        </div>
      </div>

    </div><!-- .row -->
  </div><!-- .container -->
</section>


<div id="eventImgOverlay" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,.72); z-index:9999;
            align-items:center; justify-content:center; padding:1.5rem;">
  <button id="eventImgOverlayClose" style="position:fixed; top:1.2rem; right:1.4rem; background:rgba(255,255,255,.15);
                 border:none; color:#fff; font-size:22px; width:38px; height:38px;
                 border-radius:50%; cursor:pointer; display:flex; align-items:center; justify-content:center;">
    &times;
  </button>
  <img id="eventModalImg" src="" alt="Event banner enlarged"
    style="max-width:min(90vw,860px); max-height:90vh; border-radius:12px; object-fit:contain;" />
</div>

<script>
  (function () {
    var wrap = document.getElementById('eventBannerWrap');
    var thumb = document.getElementById('eventBannerImg');
    var overlay = document.getElementById('eventImgOverlay');
    var modal = document.getElementById('eventModalImg');
    var closeBtn = document.getElementById('eventImgOverlayClose');

    wrap.addEventListener('click', function () {
      modal.src = thumb.src;
      overlay.style.display = 'flex';
    });
    closeBtn.addEventListener('click', function () {
      overlay.style.display = 'none';
    });
    overlay.addEventListener('click', function (e) {
      if (e.target === overlay) overlay.style.display = 'none';
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') overlay.style.display = 'none';
    });
  })();
</script>