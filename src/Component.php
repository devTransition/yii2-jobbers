<?php

namespace devtransition\jobbers\yii;


use devtransition\jobbers\Jobbers;


class Component extends \yii\base\Component
{

    private $_config;

    public function init()
    {
        Jobbers::init();
    }

    public function setConfig($config)
    {
        $this->_config = $config;
        Jobbers::config($this->_config);
    }

}