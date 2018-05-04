<?php

use yii\helpers\Html;

$this->title = 'Create Data Anak';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="tmst-keluarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    echo $this->render('_form', [
        'model' => $model,
    ]);
    ?>

</div>
