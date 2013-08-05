<?php

/**
 * This file is part of hoppinger/config-target
 *
 * (c) Hoppinger BV <info@hoppinger.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Hop\Config\Target;

/**
 * @author Korstiaan de Ridder <korstiaan@korstiaan.com>
 */
class Target implements TargetInterface
{
    /**
     * The rootdir of the configuration used
     *
     * @var string
     */
    private $rootDir;

    /**
     * The name of the target
     *
     * @var string
     */
    private $target;

    /**
     * The mode of given target
     *
     * @var string
     */
    private $mode;

    /**
     * Constructor
     *
     * @param string $rootDir The rootdir of the configuration of your project
     * @param string $target  The name of the target in {mode}/{name} form
     */
    public function __construct($rootDir, $target)
    {
        $this->rootDir = $rootDir;
        $this->target  = $target;

        $targetAr = explode('/', $this->target);

        if (2 !== count($targetAr)) {
            throw new \InvalidArgumentException('Target should be {mode}/{name} form');
        }

        $this->mode = $targetAr[0];
    }

    /**
     * {@inheritDoc}
     */
    public function getRootDir()
    {
        return $this->rootDir;
    }

    /**
     * {@inheritDoc}
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * {@inheritDoc}
     */
    public function getMode()
    {
        return $this->mode;
    }
    

    /**
     * {@inheritDoc}
     */
    public function getTargetDir()
    {
        return $this->getTargetsDir().
            DIRECTORY_SEPARATOR.
            str_replace('/', DIRECTORY_SEPARATOR, $this->target)
            ;
    }

    /**
     * {@inheritDoc}
     */
    public function getModeDir()
    {
        return $this->getTargetsDir().
            DIRECTORY_SEPARATOR.
            $this->getMode()
            ;
    }

    /**
     * {@inheritDoc}
     */
    protected function getTargetsDir()
    {
        return $this->rootDir.
            DIRECTORY_SEPARATOR.
            'targets'
            ;
    }
    
    public function __toString()
    {
        return $this->mode;
    }
    
}
