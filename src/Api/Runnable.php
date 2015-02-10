<?php

/*
 * This file is part of the webmozart/console package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Console\Api;

use Webmozart\Console\Api\Input\Input;
use Webmozart\Console\Api\Output\Output;

/**
 * Runs a console input.
 *
 * @since  1.0
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface Runnable
{
    /**
     * Runs a console input.
     *
     * @param Input  $input       The console input.
     * @param Output $output      The standard output.
     * @param Output $errorOutput The error output.
     *
     * @return int Returns 0 on success and a positive integer on error.
     */
    public function run(Input $input, Output $output, Output $errorOutput);
}
