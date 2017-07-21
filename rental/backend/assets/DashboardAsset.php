<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/fullcalendar.css',
        'css/datatables.css',
        'css/bootstrap.datatables.css',
        'css/chosen.css',
        'css/font-awesome.css',
        'css/app.css',
        'http://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300',
        'http://fonts.googleapis.com/css?family=Open+Sans',
   'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
  'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',

    ];
    public $js = [
      'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
      'http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js',
      'js/jquery.sparkline.min.js',
      'js/tab.js',
      'js/dropdown.js',
      'js/collapse.js',
      'js/transition.js',
      'js/tooltip.js',
      'js/jquery.knob.js',
      'js/fullcalendar.min.js',
      'js/datatables.min.js',
      'js/chosen.jquery.min.js',
      'js/bootstrap.datatables.js',
      'js/raphael-min.js',
      'js/morris-0.4.3.min.js',
      'js/color_settings.js',
      'js/application.js',
      'js/dashboard.js',
      'js/one.js',
      'js/two.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
