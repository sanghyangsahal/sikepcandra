<?php

Yii::setAlias('@assetsdatapegawai', '/images/datapegawai');

//untuk upload-delete foto pegawai
Yii::setAlias('@uploadfotopegawaiurl', '/uploads/foto_pegawai');
Yii::setAlias('@uploadfotopegawaipath', dirname(dirname(__DIR__)) . '/backend/web/uploads/foto_pegawai');

//untuk upload-delete akta pegawai
Yii::setAlias('@uploadaktapegawaiurl', '/uploads/akta_pegawai');
Yii::setAlias('@uploadaktapegawaipath', dirname(dirname(__DIR__)) . '/backend/web/uploads/akta_pegawai');
