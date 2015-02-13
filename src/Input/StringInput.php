<?php

/*
 * This file is part of the webmozart/console package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webmozart\Console\Input;

/**
 * An input that reads from a string.
 *
 * @since  1.0
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class StringInput extends StreamInput
{
    /**
     * Creates the input.
     *
     * @param string $string The input string.
     */
    public function __construct($string)
    {
        $handle = fopen('php://memory', 'rw');

        fwrite($handle, $string);
        rewind($handle);

        parent::__construct($handle);
    }
}
