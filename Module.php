<?php

namespace devtransition\Jobbers\yii;

use \Yii;
use yii\base\BootstrapInterface;

class Module extends \yii\base\Module  implements BootstrapInterface
{
    //public $controllerNamespace = 'devtransition\Jobbers\yii\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
        \Yii::setAlias("@devtransition", __DIR__);
    }

    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        asdfasf();
        if ($app instanceof \yii\web\Application) {

            $app->getUrlManager()->addRules([
                $this->id => $this->id . '/default/index',
                $this->id . '/<id:\w+>' => $this->id . '/default/view',
                $this->id . '/<controller:[\w\-]+>/<action:[\w\-]+>' => $this->id . '/<controller>/<action>',
            ], false);
        } elseif ($app instanceof \yii\console\Application) {
            $app->controllerMap[$this->id] = [
                'class' => 'devtransition\Jobbers\yii\console\DefaultControllerX',
                'module' => $this,
            ];
        }

    }

}
