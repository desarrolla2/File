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
 * File
 */
class File
{
    /**
     * @param string $fileName
     *
     * @return string
     * @throws RuntimeException
     */
    public static function read($fileName)
    {
        if (!file_exists($fileName)) {
            throw new RuntimeException($fileName.' not exist');
        }
        if (!is_readable($fileName)) {
            throw new RuntimeException($fileName.' not readable');
        }

        $fh = fopen($fileName, "r");
        $data = fread($fh, filesize($fileName));
        fclose($fh);

        return $data;
    }

    /**
     * @param string $fileName
     * @param string $data
     *
     * @throws RuntimeException
     */
    public static function write($fileName, $data)
    {
        if (!file_exists($fileName)) {
            if (!is_writable(dirname($fileName))) {
                throw new RuntimeException($fileName.' not writable');
            }
        } else {
            if (!is_writable($fileName)) {
                throw new RuntimeException($fileName.' not writable');
            }
        }

        $handler = fopen($fileName, 'w');
        fwrite($handler, (string)$data);
        fclose($handler);
    }
}
