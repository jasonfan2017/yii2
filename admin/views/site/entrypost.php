
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<?=Html::cssFile('./css/bootstrap.min.css')?>
<?php
$form = ActiveForm::begin(['method'=>'post',]); ?>
 
<?= $form->field($model, 'username')->textInput(['maxlength' => 20]) ?>

<?= $form->field($model, 'password')->passwordInput(['maxlength' => 20]) ?>

<?= $form->field($model, 'sex')->radioList(['1'=>'男','0'=>'女']) ?>

<?= Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>
   
<?= Html::resetButton('重置', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>

<?php ActiveForm::end(); ?>