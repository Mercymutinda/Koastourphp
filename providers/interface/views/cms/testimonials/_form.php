<?php

use helpers\Html;
use helpers\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var dashboard\models\Testimonials $model */
/** @var helpers\widgets\ActiveForm $form */
?>

<div class="testimonials-form">
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'data-pjax' => true]]) ?> 

    <div class="row">
        <div class="col-md-12">
          <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
          <?= $form->field($model, 'relation')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
          <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-12">
        <?= $form->field($model, 'imageFile')->fileInput() ?>
        <?php if ($model->image): ?>
    <div class="mb-2">
        <img src="<?= Yii::getAlias('@web') . '/' . $model->image ?>" alt="Current Board Image" style="max-width: 200px;">
    </div>
<?php endif; ?>

        </div>
       
    </div>
    <div class="block-content block-content-full text-center">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>