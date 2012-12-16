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
interface TargetInterface
{
    /**
     * Returns the name of the target
     *
     * @return string
     */
    public function getTarget();

    /**
     * Returns the root dir of the configuration
     *
     * @return string
     */
    public function getRootDir();

    /**
     * Returns the dir of the target
     *
     * @return string
     */
    public function getTargetDir();

    /**
     * Returns the dir of mode of the target
     *
     * @return string
     */

    public function getModeDir();
    /**
     * Returns the  mode of the target
     *
     * @return string
     */
    public function getMode();
}
