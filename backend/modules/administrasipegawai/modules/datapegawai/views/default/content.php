<?php

use common\components\SikepHelper;
use yii\helpers\Html;
?>

<div class="row form-group">
    <?= Html::a('Kembali', ['default/index'], ['class' => 'btn btn-warning pull-right']) ?>
</div>

<div class="row form-group"> 
    <h3>Data Pokok</h3>
</div>

<div class="row form-group">            
    <div class="col-sm-2 col-sm-offset-1">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'biodata.png', [
                        'alt' => 'Biodata',
                        'width' => '64px',
                    ]), ['view?sub=pegawai&page=view&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Biodata</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'pasangan.png', [
                        'alt' => 'Pasangan',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Pasangan</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'anak.png', [
                        'alt' => 'Anak',
                        'width' => '64px'
                    ]), ['view?sub=anak&page=index&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Anak</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'orang_tua.png', [
                        'alt' => 'Orang Tua',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Orang Tua</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'kerabat.png', [
                        'alt' => 'Kerabat',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Kerabat</figcaption>
        </figure>
    </div>
</div>

<div class="row form-group"> 
    <h3>Riwayat Pekerjaan</h3>
</div>

<div class="row form-group">            
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'cpns.png', [
                        'alt' => 'CPNS',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>CPNS</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'pns.png', [
                        'alt' => 'PNS',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>PNS</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'pangkat.png', [
                        'alt' => 'Pangkat',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Pangkat</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'jabatan.png', [
                        'alt' => 'Jabatan',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Jabatan</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'fungsional.png', [
                        'alt' => 'Fungsional',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Fungsional</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'sanksi.png', [
                        'alt' => 'Sanksi',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Sanksi</figcaption>
        </figure>
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-2 col-sm-offset-3">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'kgb.png', [
                        'alt' => 'KGB',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>KGB</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'pensiun.png', [
                        'alt' => 'Pensiun/Berhenti',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Pensiun/Berhenti</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'pmk.png', [
                        'alt' => 'Peninjauan Masa Kerja',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Peninjauan Masa Kerja</figcaption>
        </figure>
    </div>
</div>

<div class="row form-group"> 
    <h3>Riwayat Pendidikan</h3>
</div>

<div class="row form-group">            
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'pendidikan.png', [
                        'alt' => 'Pendidikan',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Pendidikan</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'penghargaan.png', [
                        'alt' => 'Penghargaan',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Penghargaan</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'tugas_belajar.png', [
                        'alt' => 'Tugas Belajar',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Tugas Belajar</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'seminar.png', [
                        'alt' => 'Seminar',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Seminar</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'organisasi.png', [
                        'alt' => 'Organisasi',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Organisasi</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'luar_negeri.png', [
                        'alt' => 'Luar Negeri',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Luar Negeri</figcaption>
        </figure>
    </div>
</div>

<div class="row form-group"> 
    <h3>Riwayat Diklat</h3>
</div>

<div class="row form-group">            
    <div class="col-sm-2 col-sm-offset-1">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'prajab.png', [
                        'alt' => 'Diklat Pra Jabatan',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Diklat Pra Jabatan</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'penjenjangan.png', [
                        'alt' => 'Diklat Penjenjangan',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Diklat Penjenjangan</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'diklat_teknis.png', [
                        'alt' => 'Diklat Teknis',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Diklat Teknis</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'diklat_fungsional.png', [
                        'alt' => 'Diklat Fungsional',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>Diklat Fungsional</figcaption>
        </figure>
    </div>
    <div class="col-sm-2">
        <figure class="text-center">
            <?=
            Html::a(Html::img(SikepHelper::getPathAssetsDataPegawai() . 'dp3.png', [
                        'alt' => 'DP3',
                        'width' => '64px'
                    ]), ['view?sub=pegawai&page=temp&id=' . $id], ['class' => 'item-hover']);
            ?>
            <figcaption>DP3</figcaption>
        </figure>
    </div>
</div>