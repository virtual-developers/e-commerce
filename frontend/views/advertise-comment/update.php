<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdvertiseComment */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Advertise Comment',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Advertise Comments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="advertise-comment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
