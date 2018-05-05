<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

$this->title = $model->IdAnggotaKeluarga;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row form-group">
    <?php echo Html::a('Kembali', Url::to(['index', 'idPegawai' => $idPegawai]), ['class' => 'btn btn-warning pull-right']); ?>
</div>

<div class="tmst-keluarga-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdAnggotaKeluarga], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->IdAnggotaKeluarga], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'IdAnggotaKeluarga',
            //'IDPegawai',
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
    ])
    ?>

</div>
