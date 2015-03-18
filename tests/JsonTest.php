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

use Desarrolla2\File\Json;

/**
 * JsonTest
 */
class JsonTest extends \PHPUnit_Framework_TestCase
{
    public function testWriteAndRead()
    {
        $fileName = sys_get_temp_dir().'/'.uniqid(true).'.php.test';
        $data = [uniqid(true) => uniqid(false)];

        Json::write($fileName, $data);

        $this->assertEquals(
            $data,
            Json::read($fileName)
        );
    }
}
