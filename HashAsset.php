<?php

/**
 * Hash Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\jqueryhash;

use yii\web\AssetBundle;

class HashAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery-hash';
    public $js = ['jquery.hash.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
