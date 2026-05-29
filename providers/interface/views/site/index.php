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
              <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                Nature, Adventure and Community.
              </h1>
              <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                <a href="<?= Url::to(['site/contact']) ?>" class="th-btn th-icon">Contact Us</a>
                <a href="<?= Url::to(['site/services']) ?>" class="th-btn style2 th-icon">Our Services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="hero-inner">
          <div class="th-hero-bg" data-bg-src="<?= $basePath ?>assets/img/bg/a.jpg"></div>
          <div class="container">
            <div class="hero-style1">
              <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Empowering Youth Through</span>
              <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                Nature, Adventure and Community.
              </h1>
              <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                <a href="<?= Url::to(['site/contact']) ?>" class="th-btn th-icon">Contact Us</a>
                <a href="<?= Url::to(['site/services']) ?>" class="th-btn style2 th-icon">Our Services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="hero-inner">
          <div class="th-hero-bg" data-bg-src="<?= $basePath ?>assets/img/bg/o.jpg"></div>
          <div class="container">
            <div class="hero-style1">
              <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Empowering Youth Through</span>
              <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                Nature, Adventure and Community.
              </h1>
              <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                <a href="<?= Url::to(['site/contact']) ?>" class="th-btn th-icon">Contact Us</a>
                <a href="<?= Url::to(['site/services']) ?>" class="th-btn style2 th-icon">Our Services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="swiper-slide">
        <div class="hero-inner">
          <div class="th-hero-bg" data-bg-src="<?= $basePath ?>assets/img/bg/image.jpg"></div>
          <div class="container">
            <div class="hero-style1">
              <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">
                Embrace the Spirit of Adventure
              </span>
              <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                Inspiring Growth, Creating Leaders.
              </h1>
              <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                <a href="<?= Url::to(['site/contact']) ?>" class="th-btn th-icon">Contact Us</a>
                <a href="<?= Url::to(['site/services']) ?>" class="th-btn style2 th-icon">Our Services</a>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
    <div class="th-swiper-custom">
      <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev">
        <img src="<?= $basePath ?>assets/img/icon/right-arrow.svg" alt="arrow" />
      </button>
      <div class="slider-pagination"></div>
      <button data-slider-next="#heroSlide1" class="slider-arrow slider-next">
        <img src="<?= $basePath ?>assets/img/icon/left-arrow.svg" alt="arrow" />
      </button>
    </div>
  </div>
</div>
<div class="about-area position-relative overflow-hidden space" id="about-sec">
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

<section class="cta-area py-xl-5 py-lg-4 py-md-3 py-sm-2 space" data-overlay="title" data-opacity="8"
  data-bg-src="<?= $basePath ?>/assets/img/bg/y.jpg ">
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
            About Us<img src="<?= $basePath ?>assets/img/icon/plane2.svg" alt="" />
          </a>
          <a type="button" href="<?= Url::to(['site/support']) ?>" class="th-btn style1 btn-fw">
            Support a Youth <img src="<?= $basePath ?>assets/img/icon/plane2.svg" alt="" />
          </a>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- our impact -->
<section class="testi-area7 bg-smoke overflow-hidden space" id="testi-sec">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div class="title-area mb-40">
          <span class="sub-title">Our Impact</span>
          <h2 class="sec-title">Changing Lives One Adventure at a Time</h2>
        </div>
        <div class="swiper th-slider testiSlide5" id="testiSlide7"
          data-slider-options='{"effect":"slide","loop":false,"thumbs":{"swiper":".testi-grid2-thumb"}}'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testi-grid2">
                <div class="box-content">
                  <p class="box-text">
                    “At KOAS, we've empowered over 300 youth, helping them build confidence through challenge, nature,
                    and connection. With more than 50 outdoor adventures, we’ve turned the wilderness into both a
                    playground and a classroom. More than 200 volunteers have stepped up to shape the next generation.
                    Together, we’ve planted over 300 trees, healing not just the Earth, but the hearts and hopes of our
                    youth—one seed at a time.”
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

<!-- ====== Events Section Start ====== -->

<!-- EVENTS -->
<section class="py-5 space-bottom" id="events">
  <div class="container">

    <div class="text-center mb-5">
      <span class="text-uppercase text-primary d-block" style="font-size:12px; letter-spacing:.08em;">Our Events</span>
      <h2 class="fw-bold">Upcoming Adventures</h2>
    </div>

    <div class="row g-0 align-items-stretch">

      <!-- Left: Event image + info -->
      <div class="col-lg-6 d-flex flex-column">
        <div style="position:relative; width:100%; height:280px; overflow:hidden; border-radius:12px 12px 0 0; cursor:zoom-in;"
          id="eventBannerWrap">
          <img src="<?= $basePath ?>assets/img/newevent.jpeg"
            alt="Desert sand dunes — Spirit of Adventure hike"
            id="eventBannerImg"
            style="width:100%; height:100%; object-fit:cover; object-position:center; display:block; transition:opacity .15s;"
            onmouseover="this.style.opacity='.88'"
            onmouseout="this.style.opacity='1'"
            title="Click to enlarge" />
          <div style="position:absolute; bottom:10px; right:12px; background:rgba(0,0,0,.45);
                      color:#fff; font-size:11px; padding:3px 8px; border-radius:20px; pointer-events:none;">
            <i class="fal fa-search-plus me-1"></i>Click to enlarge
          </div>
        </div>

        <div class="flex-grow-1 p-4"
          style="background:#fff; border:0.5px solid rgba(0,0,0,.1); border-top:none; border-radius:0 0 12px 12px;">
          <h3 class="fw-bold mb-1">Healthy Hearts and Minds Project for Seniors</h3>
          
          <p class="text-muted mb-3" style="font-size:13px;">
            <i class="fal fa-calendar-alt me-2"></i>June 20th & July 18th &nbsp;·&nbsp; Grand Beach & Spruce Woods
          </p>
          
          <p class="mb-4" style="font-size:14px; line-height:1.7;">
            Presented by Kifaru Outdoor Adventures Society in conjunction with Afrimama Peace and Cultural Initiative & Pan African Legacy. 
            <br><br>
            Join us for a <strong>Barbeque at Grand Beach Provincial Park</strong> on June 20th, and a <strong>Wagon ride at the Spirit Sands trail</strong> in Spruce Woods Provincial Park on July 18th. 
            <br><br>
            <span class="text-primary fw-bold">Limited spots available!! Transport and food provided.</span>
          </p>

          <a href="https://forms.gle/Ar2Y2yW3DQEYxhmB7" target="_blank"
            class="d-flex align-items-center gap-3 text-decoration-none rounded-3 p-3"
            style="background:#E6F1FB; border:1px solid #B5D4F4; transition:background .15s;"
            onmouseover="this.style.background='#B5D4F4'"
            onmouseout="this.style.background='#E6F1FB'">
            <div class="d-flex align-items-center justify-content-center rounded-2 flex-shrink-0"
              style="width:36px; height:36px; background:#185FA5;">
              <i class="fas fa-file-alt text-white" style="font-size:14px;"></i>
            </div>
            <div>
              <small class="d-block text-primary mb-1" style="font-size:11px;">Prefer a quicker experience?</small>
              <span class="fw-semibold" style="font-size:13px; color:#0C447C;">Register via Google Forms &rarr;</span>
            </div>
          </a>
          
          <div class="mt-3 text-muted text-center" style="font-size: 11px;">
            Or email: info@kifaruoutdoors.ca | Afrimama.ampci@gmail.com | corporate@panafricanlegacy.org
          </div>
        </div>
      </div>

      <!-- Right: Registration form -->
      <div class="col-lg-6 d-flex flex-column">
        <div class="flex-grow-1 p-4 p-xl-5"
          style="background:#fff; border:0.5px solid rgba(0,0,0,.1); border-left:none; border-radius:0 12px 12px 0;">
          <h4 class="fw-bold mb-1">Reserve Your Spot</h4>
          <p class="text-muted mb-4" style="font-size:13px;">Fill in your details below to secure your place.</p>

          <form id="eventRegForm"
                action="<?= \yii\helpers\Url::to(['site/contact']) ?>"
                method="POST">
            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
              value="<?= Yii::$app->request->csrfToken ?>" />

            <div class="mb-3">
              <label class="form-label" style="font-size:13px; font-weight:500;">Full Name</label>
              <input type="text" class="form-control" name="name" placeholder="Jane Smith" required />
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:13px; font-weight:500;">Email Address</label>
              <input type="email" class="form-control" name="email" placeholder="jane@example.com" required />
            </div>

            <div class="mb-3">
              <label class="form-label" style="font-size:13px; font-weight:500;">Phone Number</label>
              <input type="tel" class="form-control" name="phone" placeholder="+1 204 000 0000" required />
            </div>

            <!-- FIX: replaced nice-select multiple with custom checkbox dropdown -->
            <div class="mb-4">
              <label class="form-label" style="font-size:13px; font-weight:500;">Select Event(s)</label>

              <div id="eventDropdown" class="event-dropdown">
                <div class="event-dropdown-trigger" id="eventDropdownTrigger">
                  <span id="eventDropdownLabel">Choose one or more events...</span>
                  <i class="fas fa-chevron-down event-dropdown-arrow" id="eventDropdownArrow"></i>
                </div>
                <div class="event-dropdown-menu" id="eventDropdownMenu">
                  <?php
                  $events = [
                    'Barbeque and Swimming'  => 'Grand Beach · Jun 20 — BBQ & Swimming (Meet 10:00am at Legislative Building)',
                    'Wagon Ride'             => 'Spirit Sands Wagon Ride · Jul 18 (Meet 9:30am at Legislative Building)',
                    'Guided Walk'            => 'Bunns Creek Trail Walk & Picnic · Sep 5 (Time TBD)',
                    'Pottery Class'          => 'Pottery Class · Oct 3 (Time & Place TBD)',
                    'Zumba Class'            => 'Zumba Dance Class · Jan 16 (Time & Place TBD)',
                  ];
                  foreach ($events as $value => $label): ?>
                  <label class="event-option">
                    <input type="checkbox" name="eventSelection[]" value="<?= htmlspecialchars($value) ?>" />
                    <span class="event-option-text"><?= htmlspecialchars($label) ?></span>
                  </label>
                  <?php endforeach; ?>
                </div>
              </div>
              <!-- Hidden summary of selected shown below trigger -->
              <div id="eventSelectedTags" class="event-tags mt-2"></div>
            </div>

            <button type="submit" class="th-btn style3 w-100" id="eventRegBtn">
              <span class="btn-label">Register</span>
              <span class="btn-spinner" style="display:none; align-items:center; justify-content:center; gap:8px;">
                <svg class="spin-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 12a9 9 0 1 1-6.219-8.56" />
                </svg>
                Sending...
              </span>
            </button>
          </form>

          <p class="form-messages mb-0 mt-3" id="eventFormMsg"></p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Image modal -->
<div id="eventImgOverlay"
  style="display:none; position:fixed; inset:0; background:rgba(0,0,0,.72); z-index:9999;
         align-items:center; justify-content:center; padding:1.5rem;">
  <button id="eventImgOverlayClose"
    style="position:fixed; top:1.2rem; right:1.4rem; background:rgba(255,255,255,.15);
           border:none; color:#fff; font-size:22px; width:38px; height:38px;
           border-radius:50%; cursor:pointer; display:flex; align-items:center; justify-content:center;">
    &times;
  </button>
  <img id="eventModalImg" src="" alt="Event banner enlarged"
    style="max-width:min(90vw,860px); max-height:90vh; border-radius:12px; object-fit:contain;" />
</div>

<!-- Toast notification -->
<div id="koas-toast"
  style="position:fixed; bottom:1.5rem; right:1.5rem; z-index:10000;
         min-width:280px; max-width:360px; padding:1rem 1.25rem;
         border-radius:10px; font-size:14px; font-weight:500;
         box-shadow:0 8px 24px rgba(0,0,0,.15); display:none;
         align-items:center; gap:12px; transition:opacity .3s;">
  <span id="koas-toast-icon" style="font-size:18px; flex-shrink:0;"></span>
  <span id="koas-toast-msg"></span>
</div>

<style>
/* Spinner */
@keyframes spin { to { transform: rotate(360deg); } }
.spin-icon { animation: spin 0.8s linear infinite; flex-shrink: 0; }
#eventRegBtn:disabled { opacity: .75; cursor: not-allowed; }

/* Custom event dropdown */
.event-dropdown { position: relative; }
.event-dropdown-trigger {
  display: flex; align-items: center; justify-content: space-between;
  padding: .5rem .75rem; border: 1px solid #dee2e6; border-radius: 6px;
  background: #fff; cursor: pointer; font-size: 14px;
  user-select: none; transition: border-color .15s;
}
.event-dropdown-trigger:hover { border-color: #185FA5; }
.event-dropdown-trigger.open { border-color: #185FA5; box-shadow: 0 0 0 3px #E6F1FB; }
.event-dropdown-arrow { font-size: 11px; color: #888; transition: transform .2s; }
.event-dropdown-trigger.open .event-dropdown-arrow { transform: rotate(180deg); }

.event-dropdown-menu {
  display: none; position: absolute; top: calc(100% + 4px); left: 0; right: 0;
  background: #fff; border: 1px solid #dee2e6; border-radius: 8px;
  box-shadow: 0 6px 20px rgba(0,0,0,.1); z-index: 200;
  max-height: 260px; overflow-y: auto; padding: 6px 0;
}
.event-dropdown-menu.open { display: block; }

.event-option {
  display: flex; align-items: flex-start; gap: 10px;
  padding: 9px 14px; cursor: pointer; margin: 0;
  transition: background .1s;
}
.event-option:hover { background: #f0f7ff; }
.event-option input[type="checkbox"] {
  margin-top: 2px; flex-shrink: 0;
  width: 15px; height: 15px; cursor: pointer;
  accent-color: #185FA5;
}
.event-option-text { font-size: 13px; line-height: 1.5; color: #333; }

/* Selected tags */
.event-tags { display: flex; flex-wrap: wrap; gap: 6px; }
.event-tag {
  display: inline-flex; align-items: center; gap: 6px;
  background: #E6F1FB; border: 1px solid #B5D4F4;
  color: #0C447C; font-size: 12px; font-weight: 500;
  padding: 3px 10px; border-radius: 20px;
}
.event-tag-remove {
  cursor: pointer; font-size: 14px; line-height: 1;
  color: #185FA5; background: none; border: none; padding: 0;
}
.event-tag-remove:hover { color: #c0392b; }
</style>

<script>
(function () {

  /* ── Image modal ── */
  var wrap     = document.getElementById('eventBannerWrap');
  var thumb    = document.getElementById('eventBannerImg');
  var overlay  = document.getElementById('eventImgOverlay');
  var modal    = document.getElementById('eventModalImg');
  var closeBtn = document.getElementById('eventImgOverlayClose');

  wrap.addEventListener('click', function () { modal.src = thumb.src; overlay.style.display = 'flex'; });
  closeBtn.addEventListener('click', function () { overlay.style.display = 'none'; });
  overlay.addEventListener('click', function (e) { if (e.target === overlay) overlay.style.display = 'none'; });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape') overlay.style.display = 'none'; });


  /* ── Custom event dropdown ── */
  var trigger   = document.getElementById('eventDropdownTrigger');
  var menu      = document.getElementById('eventDropdownMenu');
  var labelEl   = document.getElementById('eventDropdownLabel');
  var tagsEl    = document.getElementById('eventSelectedTags');
  var checkboxes = menu.querySelectorAll('input[type="checkbox"]');

  trigger.addEventListener('click', function (e) {
    e.stopPropagation();
    var isOpen = menu.classList.toggle('open');
    trigger.classList.toggle('open', isOpen);
  });
  document.addEventListener('click', function () {
    menu.classList.remove('open');
    trigger.classList.remove('open');
  });
  menu.addEventListener('click', function (e) { e.stopPropagation(); });

  function updateTags() {
    var selected = Array.from(checkboxes).filter(function (c) { return c.checked; });
    labelEl.textContent = selected.length
      ? selected.length + ' event' + (selected.length > 1 ? 's' : '') + ' selected'
      : 'Choose one or more events...';

    tagsEl.innerHTML = '';
    selected.forEach(function (cb) {
      var tag = document.createElement('span');
      tag.className = 'event-tag';
      // Show only the short name (value), not the full label
      tag.innerHTML = cb.value +
        '<button type="button" class="event-tag-remove" data-val="' + cb.value + '">&times;</button>';
      tagsEl.appendChild(tag);
    });

    tagsEl.querySelectorAll('.event-tag-remove').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var val = this.getAttribute('data-val');
        checkboxes.forEach(function (c) { if (c.value === val) c.checked = false; });
        updateTags();
      });
    });
  }

  checkboxes.forEach(function (cb) { cb.addEventListener('change', updateTags); });


  /* ── Toast helper ── */
  var toast    = document.getElementById('koas-toast');
  var toastMsg = document.getElementById('koas-toast-msg');
  var toastIcon = document.getElementById('koas-toast-icon');

  function showToast(message, type) {
    var isSuccess = type === 'success';
    toast.style.background  = isSuccess ? '#d1fae5' : '#fee2e2';
    toast.style.color       = isSuccess ? '#065f46' : '#991b1b';
    toast.style.borderLeft  = '4px solid ' + (isSuccess ? '#10b981' : '#ef4444');
    toastIcon.textContent   = isSuccess ? '✓' : '✕';
    toastMsg.textContent    = message;
    toast.style.display     = 'flex';
    toast.style.opacity     = '1';
    setTimeout(function () {
      toast.style.opacity = '0';
      setTimeout(function () { toast.style.display = 'none'; }, 300);
    }, 4000);
  }


  /* ── AJAX form submission ── */
  var form    = document.getElementById('eventRegForm');
  var btn     = document.getElementById('eventRegBtn');
  var btnLabel   = btn.querySelector('.btn-label');
  var btnSpinner = btn.querySelector('.btn-spinner');

  function setLoading(state) {
    btn.disabled           = state;
    btnLabel.style.display  = state ? 'none' : 'inline';
    btnSpinner.style.display = state ? 'flex' : 'none';
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault(); // STOP full page reload

    // Require at least one event selected
    var anyChecked = Array.from(checkboxes).some(function (c) { return c.checked; });
    if (!anyChecked) {
      showToast('Please select at least one event.', 'error');
      return;
    }

    setLoading(true);

    var data = new FormData(form);

    fetch(form.action, {
      method: 'POST',
      headers: { 'X-Requested-With': 'XMLHttpRequest' },
      body: data
    })
    .then(function (res) { return res.json(); })
    .then(function (json) {
      setLoading(false);
      if (json.success) {
        showToast(json.message || 'Registration sent successfully!', 'success');
        form.reset();
        updateTags(); // clear tags after reset
      } else {
        showToast(json.message || 'Something went wrong. Please try again.', 'error');
      }
    })
    .catch(function () {
      setLoading(false);
      showToast('Network error. Please check your connection and try again.', 'error');
    });
  });

})();
</script>