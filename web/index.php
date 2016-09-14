<?php

// comment out the following two lines when deployed to production
//defined('YII_DEBUG') or define('YII_DEBUG', true);
//defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');
echo "string";

(new yii\web\Application($config))->run();

?>
<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-orange index-image">
                <a target="_blank" href="http://sagt.anz/otrs/index.pl"><img src="images/logos/logoOTRS.png" title="Centro De Atencion y Soporte" /></a>
            </span>
            <div class="info-box-content">
              <a href="?r=naturaleza"><h4><b>Asistencia técnica.</b></h4></a>
                <a href="http://sagt.anz/otrs/index.pl"><h4><b>Asistencia técnica.</b></h4></a>
                <a href="http://sagt.anz/otrs/index.pl"><span class="info-box-text">Centro De Atencion y Soporte</span></a>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
    </div><!-- /.col -->
