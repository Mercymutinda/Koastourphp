<?php

namespace main\controllers;

use Yii;
use yii\web\Response;
use dashboard\models\Testimonials;
use dashboard\models\Gallery;
use dashboard\models\Banners;
use dashboard\models\Board;
use dashboard\models\About;


class SiteController extends \helpers\WebController
{
    public $layout = 'site';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return array_merge(parent::behaviors(),  [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'only' => ['index'],
                'formats' => [
                    'application/json' => Response::FORMAT_HTML,
                ],
            ],
        ]);
    }
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => 'errors'
            ],
        ];
    }
    public function actionIndex()
    {
        $banners = Banners::find()
        ->where(['is_deleted' => 0])
        ->orderBy(['created_at' => SORT_DESC])
        ->limit(12)
        ->all();
    return $this->render('index', [
        'banners' => $banners
    ]);
}
    public function actionAbout()
    {
        $about = About::find()
            ->where(['is_deleted' => 0])
            ->all();
        return $this->render('about', [
            'about' => $about
        ]);
    }
    public function actionServices()
    {
        $gallery = Gallery::find()
            ->where(['is_deleted' => 0])
            ->orderBy(['created_at' => SORT_DESC])
            ->limit(12)
            ->all();
        return $this->render('services', [
            'gallery' => $gallery
        ]);
    }
    public function actionSupport()
    {
        return $this->render('support');
    }
    public function actionContact()
    {
        return $this->render('contacts');
    }
    public function actionImpact()
    {
    $testimonials = Testimonials::find()
        ->where(['is_deleted' => 0])
        ->all();

    return $this->render('impact', [
        'testimonials' => $testimonials
    ]);
    }

    // public function actionImpact()
    // {
    //     return $this->render('impact');
    // }
    public function actionDonate()
    {
        return $this->render('donate');
    }
    public function actionVolunteer()
    {
        return $this->render('volunteer');
    } public function actionPartner()
    {
        return $this->render('partner');
    }   public function actionBoard()
    {
        $boardMembers = Board::find()
            ->where(['is_deleted' => 0])
            ->all();

        return $this->render('board', [
            'boardMembers' => $boardMembers
        ]);
    }
    public function actionDocs($mod = 'dashboard')
    {
        //$this->viewPath = '@swagger';
        return $this->render('docs', [
            'mod' => $mod
        ]);
    }
    public function actionAbout1()
    {
        return [
            'data' => [
                'id' => $_SERVER['APP_CODE'],
                'name' => $_SERVER['APP_NAME'],
                'enviroment' => $_SERVER['ENVIRONMENT'],
                'version' => $_SERVER['APP_VERSION'],
            ]
        ];
    }

    public function actionJsonDocs($mod = 'dashboard')
    {
        $roothPath = Yii::getAlias('@webroot/');
        $openapi = \OpenApi\Generator::scan(
            [
                $roothPath . 'modules/' . $mod,
                $roothPath . 'providers/swagger/config',
            ]
        );
        Yii::$app->response->headers->set('Access-Control-Allow-Origin', ['*']);
        Yii::$app->response->headers->set('Content-Type', 'application/json');
        $file =  $roothPath . 'modules/dashboard/docs/' . $mod . '-openapi-json-resource.json';
        if (file_exists($file)) {
            unlink($file);
            file_put_contents($file, $openapi->toJson());
        } else {
            file_put_contents($file, $openapi->toJson());
        }
        Yii::$app->response->sendFile($file, false, ['mimeType' => 'json', 'inline' => true]);
        return true;
    }
}
