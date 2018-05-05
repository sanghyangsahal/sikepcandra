<?php

use yii\helpers\Html;
use kartik\grid\GridView;

$this->title = 'Saudara';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmst-keluarga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Saudara', ['create?idPegawai=' . $idPegawai], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdAnggotaKeluarga',
            'IDPegawai',
            'JenisHubunganKeluarga',
            'JenisKelamin',
            'NamaAnggotaKeluarga',
            //'TempatLahirAnggotaKeluarga',
            //'TanggalLahirAnggotaKeluarga',
            //'PekerjaanAnggotaKeluarga',
            //'AlamatKantorAnggotaKeluarga',
            //'NoIndukPegawaiKeluarga',
            //'Agama',
            //'StatusPerkawinan',
            //'TanggalNikah',
            //'StatusKesehatan',
            //'PendidikanTerakhir',
            //'IsHidup',
            //'BerhakTunjangan',
            //'DokumenHubunganKeluarga',
            //'NomorKARIS_KARSU',
            //'FotoAnggotaKeluarga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
