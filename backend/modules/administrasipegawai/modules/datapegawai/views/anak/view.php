<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TmstKeluarga */

$this->title = $model->IdAnggotaKeluarga;
$this->params['breadcrumbs'][] = ['label' => 'Data Anak', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmst-keluarga-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdAnggotaKeluarga], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdAnggotaKeluarga], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdAnggotaKeluarga',
            'IDPegawai',
            'JenisHubunganKeluarga',
            'JenisKelamin',
            'NamaAnggotaKeluarga',
            'TempatLahirAnggotaKeluarga',
            'TanggalLahirAnggotaKeluarga',
            'PekerjaanAnggotaKeluarga',
            'AlamatKantorAnggotaKeluarga',
            'NoIndukPegawaiKeluarga',
            'Agama',
            'StatusPerkawinan',
            'TanggalNikah',
            'StatusKesehatan',
            'PendidikanTerakhir',
            'IsHidup',
            'BerhakTunjangan',
            'DokumenHubunganKeluarga',
            'NomorKARIS_KARSU',
            'FotoAnggotaKeluarga',
        ],
    ]) ?>

</div>
