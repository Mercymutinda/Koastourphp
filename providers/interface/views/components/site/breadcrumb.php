<?php
use yii\helpers\Url;
use yii\helpers\Html;
$basePath = \Yii::$app->request->baseUrl . '/providers/interface/assets/site/';
/** @var string $title */
/** @var string $bgImage */
/** @var string $subtitle */
?>

<div class="breadcumb-wrapper " data-bg-src="<?= $basePath ?>assets/img/bg/breadcrumb.jpg">

    <div class="container">
        <div class="breadcumb-content">
            <h1 class="sub-title text-white  fw-bold" style="font-size: 3rem;"><?= htmlspecialchars($title) ?></h1>
            <ul class="breadcumb-menu">
                <li><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                <li><?= htmlspecialchars($subtitle) ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- providers/interface/assets/site/ -->
