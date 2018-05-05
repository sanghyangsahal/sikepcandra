<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Update Anak: ' . $model->IdAnggotaKeluarga;
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="row form-group">
    <?php echo Html::a('Kembali', Url::to(['index', 'idPegawai' => $idPegawai]), ['class' => 'btn btn-warning pull-right']); ?>
</div>

<div class="tmst-keluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
    ])
    ?>

</div>
