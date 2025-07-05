<?php 
namespace app\providers\components\widgets\site;

use yii\base\Widget;

class BreadcrumbWidget extends widget{

    public $title = 'Services';
    public $subtitle = ' Explore the World with us';
    // public $bgimage= 'assets/images/breadcrumb-bg.jpg';

    public function run()
    {
        return $this->render('@app/providers/interface/views/components/site/breadcrumb', [
            'title' => $this->title,
            // 'bgImage' => $this->bgImage,
            'subtitle' => $this->subtitle,
        ]);
    }
}