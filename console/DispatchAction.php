<?php

namespace devtransition\Jobbers\yii\console;

use yii\helpers\Console;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DispatchAction extends \yii\base\Action
{
    /**
     * @inheritdoc
     */
    public function run()
    {
        echo "Running '{$this->generator->getName()}'...\n\n";

        if ($this->generator->validate()) {
            $this->generateCode();
        } else {
            $this->displayValidationErrors();
        }
    }

    protected function test()
    {
        echo "TEST";
    }


    public function stdout($string)
    {
        if ($this->isColorEnabled()) {
            $args = func_get_args();
            array_shift($args);
            $string = Console::ansiFormat($string, $args);
        }
        return Console::stdout($string);
    }

    /**
     * Prints a string to STDERR
     *
     * You may optionally format the string with ANSI codes by
     * passing additional parameters using the constants defined in [[\yii\helpers\Console]].
     *
     * Example:
     *
     * ~~~
     * $this->stderr('This will be red and underlined.', Console::FG_RED, Console::UNDERLINE);
     * ~~~
     *
     * @param string $string the string to print
     * @return int|boolean Number of bytes printed or false on error
     */
    public function stderr($string)
    {
        if ($this->isColorEnabled(\STDERR)) {
            $args = func_get_args();
            array_shift($args);
            $string = Console::ansiFormat($string, $args);
        }
        return fwrite(\STDERR, $string);
    }
}
