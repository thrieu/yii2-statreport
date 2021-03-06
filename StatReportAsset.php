<?php

namespace thrieu\statreport;

use yii\web\AssetBundle;

class StatReportAsset extends AssetBundle {
    public $sourcePath = '@vendor/thrieu/yii2-statreport/assets';
    public $css = [
        'statreport.css',
    ];
    public $js = [
        'statreport.js',
    ];
    public $depends = ['thrieu\statreport\DataTablesAsset'];
}