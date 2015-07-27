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

namespace Desarrolla2\File\Test;

use Desarrolla2\File\File;

/**
 * FileTest
 */
class FileTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @coverage Desarrolla2\File\File::read
     * @coverage Desarrolla2\File\File::write
     */
    public function testWriteAndRead()
    {
        $fileName = sys_get_temp_dir().'/'.uniqid(true).'.php.test';
        $data = uniqid(true);

        File::write($fileName, $data);

        $this->assertEquals(
            $data,
            File::read($fileName)
        );
    }
}
