<?php

/**
 * This file is part of hoppinger/config-target
 *
 * (c) Hoppinger BV <info@hoppinger.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Hop\Config\Target\Tests;

use Hop\Config\Target\FileStoredTarget;

use Hop\Config\Target\Target;

class FileStoredTargetTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTarget()
    {
        $target = new FileStoredTarget(__DIR__.DIRECTORY_SEPARATOR.'Fixtures');
        $this->assertEquals('dev/foo', $target->getTarget());
    }
}
