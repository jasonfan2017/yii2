<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->username) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->password) ?></li>
	<li><label>Sex</label>: <?= Html::encode($model->sex) ?></li>
</ul>