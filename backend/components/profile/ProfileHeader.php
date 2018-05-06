<?php

namespace backend\components\profile;

use yii\base\Widget;

/**
 * Description of ProfileHeader
 *
 * @author chakoo
 */
class ProfileHeader extends Widget {

    public $modelPegawai;
    public $backUrl;

    public function init() {
        parent::init();
    }

    public function run() {
        return $this->render('_header', ['model' => $this->modelPegawai, 'backUrl' => $this->backUrl]);
    }

}
