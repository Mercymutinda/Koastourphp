<?php

use helpers\Html;
use helpers\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var dashboard\models\Gallery $model */
/** @var helpers\widgets\ActiveForm $form */
?>

<div class="gallery-form">
    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]);?>
    <div class="row">
        <div class="col-md-12">
          <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
        <?= $form->field($model, 'imageFile')->fileInput() ?>
        <?php if ($model->image): ?>
    <div class="mb-2">
        <img src="<?= Yii::getAlias('@web') . '/' . $model->image ?>" alt="Current Gallery Image" style="max-width: 200px;">
    </div>
<?php endif; ?>

        </div>
       
    </div>
    <div class="block-content block-content-full text-center">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
