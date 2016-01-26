<?php

namespace devtransition\jobbers\yii\console;

use devtransition\daemon\BaseDaemonAction;
use yii\helpers\Console;


class DispatchAction extends BaseDaemonAction
{
    /**
     * Start dispatcher as daemon
     *
     * @return bool
     * @throws \yii\base\NotSupportedException
     */
    public function run()
    {
        return parent::run();
    }

    /**
     * @return array
     */
    protected function defineJobs()
    {
        /*
        TODO: return task list, extracted from DB, queue managers and so on.
        Extract tasks in small portions, to reduce memory usage.
        */
    }

    /**
     * @return bool
     */
    protected function doJob($job)
    {
        /*
        TODO: implement you logic
        Don't forget to mark task as completed in your task source
        */
    }
}
