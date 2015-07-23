<?php

/*
 * This file is part of the File package.
 *
 * Copyright (c) Daniel González
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Daniel González <daniel@desarrolla2.com>
 */

namespace Desarrolla2\File;

use RuntimeException;

/**
 * Json
 */
class Json extends File
{
    /**
     * @param string $fileName
     *
     * @return array
     * @throws RuntimeException
     */
    public static function read($fileName)
    {
        $data = parent::read($fileName);

        $json = json_decode($data, true);

        if (json_last_error()) {
            throw new \RuntimeException(json_last_error_msg());
        }

        return $json;
    }

    /**
     * @param string $fileName
     * @param array  $data
     *
     * @throws RuntimeException
     */
    public static function write($fileName, $data, $mode = 'w')
    {
        $json = json_encode($data, JSON_PRETTY_PRINT);

        if (json_last_error()) {
            throw new \RuntimeException(json_last_error_msg());
        }

        parent::write($fileName, $json, $mode);
    }
}
