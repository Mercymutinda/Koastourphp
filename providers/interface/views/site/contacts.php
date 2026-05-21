<?php
use yii\helpers\Url;
use yii\helpers\Html;

$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';

use app\providers\components\widgets\site\BreadcrumbWidget;
?>

<?= BreadcrumbWidget::widget([
  'title'    => 'Contacts',
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
            <img src="<?= $basePath ?>assets/img/icon/location-dot2.svg" alt="Location" />
          </div>
          <div class="about-contact-details">
            <h6 class="box-title">Our Address</h6>
            <p class="about-contact-details-text">Winnipeg MB, Canada</p>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6">
        <div class="about-contact-grid">
          <div class="about-contact-icon">
            <img src="<?= $basePath ?>assets/img/icon/call.svg" alt="Phone" />
          </div>
          <div class="about-contact-details">
            <h6 class="box-title">Phone Number</h6>
            <p class="about-contact-details-text">
              <a href="tel:+12042911303">+1 204 291 1303</a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-6">
        <div class="about-contact-grid">
          <div class="about-contact-icon">
            <img src="<?= $basePath ?>assets/img/icon/mail.svg" alt="Email" />
          </div>
          <div class="about-contact-details">
            <h6 class="box-title">Email Address</h6>
            <p class="about-contact-details-text">
              <a href="mailto:info@kifaruoutdoors.ca">info@kifaruoutdoors.ca</a>
            </p>
            <p class="about-contact-details-text">
              <a href="mailto:kifaruoutdooradventuressociety@gmail.com">kifaruoutdooradventuressociety
              <span>
              @gmail.com</span> </a>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="space-extra2-top space-extra2-bottom" data-bg-src="<?= $basePath ?>assets/img/bg/tree.jpg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7 col-xl-6">

        <form action="<?= Url::to(['site/contact']) ?>" method="POST"
              class="contact-form style2 ajax-contact" id="mainContactForm">

          <input type="hidden"
                 name="<?= Yii::$app->request->csrfParam ?>"
                 value="<?= Yii::$app->request->csrfToken ?>" />

          <h3 class="sec-title mb-30 text-capitalize">Register with Us</h3>

          <div class="row">
            <div class="col-12 form-group">
              <input type="text" class="form-control" name="name"
                     placeholder="Full Name / Organization" required />
              <img src="<?= $basePath ?>assets/img/icon/user.svg" alt="" />
            </div>

            <div class="col-12 form-group">
              <input type="email" class="form-control" name="email"
                     placeholder="Your Email" required />
              <img src="<?= $basePath ?>assets/img/icon/mail.svg" alt="" />
            </div>

            <div class="form-group col-12">
              <select name="subject" class="form-select nice-select">
                <option value="" disabled selected>I want to...</option>
                <option value="Volunteer">Volunteer</option>
                <option value="Partner">Partner</option>
              </select>
            </div>

            <div class="form-group col-12">
              <textarea name="message" cols="30" rows="4" class="form-control"
                        placeholder="Your Message" required></textarea>
              <img src="<?= $basePath ?>assets/img/icon/chat.svg" alt="" />
            </div>

            <div class="form-btn col-12 mt-24">
              <button type="submit" class="th-btn style3" id="contactSubmitBtn">
                <span class="btn-label">Send Message</span>
                <span class="btn-spinner" style="display:none; align-items:center; gap:8px;">
                  <svg class="spin-icon" xmlns="http://www.w3.org/2000/svg"
                       width="16" height="16" viewBox="0 0 24 24"
                       fill="none" stroke="currentColor"
                       stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12a9 9 0 1 1-6.219-8.56" />
                  </svg>
                  Sending...
                </span>
              </button>
            </div>
          </div>

          <p class="form-messages mb-0 mt-3"></p>
        </form>

      </div>
    </div>
  </div>
</div>

<style>
@keyframes spin {
  to { transform: rotate(360deg); }
}
.spin-icon {
  animation: spin 0.8s linear infinite;
  flex-shrink: 0;
}
#contactSubmitBtn:disabled {
  opacity: 0.75;
  cursor: not-allowed;
}
</style>

<script>
(function () {
  var form     = document.getElementById('mainContactForm');
  var btn      = document.getElementById('contactSubmitBtn');
  var label    = btn.querySelector('.btn-label');
  var spinner  = btn.querySelector('.btn-spinner');
  var messages = form.querySelector('.form-messages');

  function setLoading(state) {
    btn.disabled = state;
    label.style.display   = state ? 'none'  : 'inline';
    spinner.style.display = state ? 'flex'  : 'none';
  }

  function resetBtn(text, cssClass) {
    setTimeout(function () {
      setLoading(false);
      label.style.display = 'inline';
      if (text)     btn.querySelector('.btn-label').textContent = text;
      if (cssClass) btn.classList.add(cssClass);
      // restore original label after 3s
      setTimeout(function () {
        btn.querySelector('.btn-label').textContent = 'Send Message';
        btn.classList.remove(cssClass);
      }, 3000);
    }, 300);
  }

  // Only intercept if the theme's ajax-contact handler is NOT already doing this.
  // This listener fires BEFORE the theme's handler so it shows the loader immediately.
  form.addEventListener('submit', function () {
    if (!form.checkValidity()) return; // let browser handle validation UI
    setLoading(true);
  });

  // Hook into the theme's ajax response if it fires a custom event or
  // updates .form-messages — watch for changes and reset the button.
  var observer = new MutationObserver(function (mutations) {
    mutations.forEach(function (m) {
      if (m.type === 'childList' || m.type === 'characterData') {
        var text = messages.textContent.trim();
        if (!text) return;
        if (/sent|success|thank/i.test(text)) {
          resetBtn('Message Sent ✓', 'btn-success');
        } else if (/error|fail|invalid/i.test(text)) {
          resetBtn('Try Again', 'btn-danger');
        } else {
          resetBtn(null, null);
        }
      }
    });
  });

  observer.observe(messages, {
    childList: true,
    subtree: true,
    characterData: true,
  });
})();
</script>