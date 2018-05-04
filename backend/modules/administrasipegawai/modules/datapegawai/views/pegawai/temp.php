<?php

use yii\helpers\Html;
?>

<div class="site-index">
    
    <div class="row form-group">
        <?= Html::a('Kembali', ['view?id=' . $model->IdPegawai], ['class' => 'btn btn-warning pull-right']) ?>
    </div>
    
    <div class="jumbotron">
        <h1>Ini halaman contoh aja</h1>
    </div>

</div>
