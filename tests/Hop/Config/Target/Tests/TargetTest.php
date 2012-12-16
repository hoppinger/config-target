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

use Hop\Config\Target\Target;

class TargetTest extends \PHPUnit_Framework_TestCase
{
    public function testGetRootDir()
    {
        $target = new Target(__DIR__, 'dev/foo');
        $this->assertEquals(__DIR__, $target->getRootDir());
    }

    public function testGetTarget()
    {
        $target = new Target(__DIR__, 'dev/foo');
        $this->assertEquals('dev/foo', $target->getTarget());
    }

    public function testGetTargetDir()
    {
        $target = new Target(__DIR__, 'dev/foo');
        $this->assertEquals(__DIR__.DIRECTORY_SEPARATOR.'targets'.DIRECTORY_SEPARATOR.'dev'.DIRECTORY_SEPARATOR.'foo', $target->getTargetDir());
    }

    public function testGetModeDir()
    {
        $target = new Target(__DIR__, 'dev/foo');
        $this->assertEquals(__DIR__.DIRECTORY_SEPARATOR.'targets'.DIRECTORY_SEPARATOR.'dev', $target->getModeDir());
    }

    public function testGetMode()
    {
        $target = new Target(__DIR__, 'dev/foo');
        $this->assertEquals('dev', $target->getMode());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidTarget()
    {
        new Target(__DIR__, 'dev/foo/bar');
    }
}
