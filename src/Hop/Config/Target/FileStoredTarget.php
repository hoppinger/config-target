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
 * This class uses the {rootDir}/target file to determine the target
 *
 * @author Korstiaan de Ridder <korstiaan@korstiaan.com>
 */
class FileStoredTarget extends Target
{
    public function __construct($rootDir)
    {
        parent::__construct($rootDir, trim(file_get_contents($rootDir.DIRECTORY_SEPARATOR.'target')));
    }
}
