﻿<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?=Html::cssFile('./css/bootstrap.min.css')?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
