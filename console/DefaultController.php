<?php

namespace devtransition\Jobbers\yii\console;

use Yii;
use yii\base\InlineAction;
use yii\console\Controller;

class DefaultController extends Controller
{
    /**
     * @var \yii\gii\Module
     */
    public $module;
    /**
     * @var boolean whether to overwrite all existing code files when in non-interactive mode.
     * Defaults to false, meaning none of the existing code files will be overwritten.
     * This option is used only when `--interactive=0`.
     */
    public $overwrite = false;
    /**
     * @var array a list of the available code generators
     */
    public $generators = [];

    /**
     * @var array generator option values
     */
    private $_options = [];


    /**
     * @inheritdoc
     */
    public function __get($name)
    {
        return isset($this->_options[$name]) ? $this->_options[$name] : null;
    }

    /**
     * @inheritdoc
     */
    public function __set($name, $value)
    {
        $this->_options[$name] = $value;
    }


    /**
     * @inheritdoc
     */
    public function actions()
    {
        $actions = [];
        $actions['joooooober'] = [
            'class' => ' devtransition\Jobbers\yii\console\DispatchAction',
        ];
        return $actions;
    }

    public function actionIndex()
    {
        echo "INDEX";exit;
        $this->run('/help', ['gii']);
    }

    /**
     * @inheritdoc
     */
    public function getUniqueID()
    {
        return $this->id;
    }

}
