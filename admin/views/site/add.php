<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
    <?php if($id): ?>
        <?= $form->field($model, 'id')->textInput(['value' => $id, 'disabled' => 'disabled']) ?>
    <?php endif;  ?>
    <?= $form->field($model, 'texture') ?>
    <?= $form->field($model, 'mark') ?>
    <?= $form->field($model, 'manufacturers') ?>
    <?= $form->field($model, 'price') ?>
    <div class="form-group">
        <?php if($id): ?>
        <?= Html::submitButton('修改', ['class' => 'btn btn-primary']) ?>
        <?php else:?>
        <?= Html::submitButton('添加', ['class' => 'btn btn-primary']) ?>
        <?php endif;  ?>
    </div>
<?php ActiveForm::end(); ?>