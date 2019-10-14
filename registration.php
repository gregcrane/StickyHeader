<?php
/**
 * @package     LeviathanStudios/Scheduler
 * @author      Greg Crane <gmc31886@gmail.com>
 */
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'LeviathanStudios_StickyHeader',
    __DIR__
);
