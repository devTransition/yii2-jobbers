<?php

namespace devtransition\jobbers\yii\console;

use Yii;
use yii\console\Controller;

class DefaultController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'dispatch' => [
                'class' => 'devtransition\Jobbers\yii\console\DispatchAction',
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function getUniqueID()
    {
        return $this->id;
    }
}
