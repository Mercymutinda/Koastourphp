<?php

use yii\helpers\Url;
?>

<div class="floating-btn">
  <a href="<?= Url::to(['site/contact']) ?>" class="btn  btn-primary rounded-pill p-3">
    Contact Us Today
    <i class="fas fa-arrow-right ms-2"></i>
  </a>
</div>

<style>
  .floating-btn {
    position: fixed;
    bottom: 60px;
    transform: translateY(-50%);
    right: 30px;
    z-index: 9999;
    transition: transform 0.3s ease;
    animation: pulse 1.8s infinite;
  }

  .floating-btn:hover {
    transform: translateY(-50%) scale(1.05);
  }
/* Pulse keyframes */
@keyframes pulse {
  0% {
    transform: scale(1);
  }
  70% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}
  @media (max-width: 768px) {
    .floating-btn {
      bottom: 20px;
      right: 20px;
      font-size: 14px;
      padding: 10px 14px;
    }
  }
</style>