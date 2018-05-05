<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TmstKeluarga */

$this->title = 'Create Tmst Keluarga';
$this->params['breadcrumbs'][] = ['label' => 'Tmst Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmst-keluarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
