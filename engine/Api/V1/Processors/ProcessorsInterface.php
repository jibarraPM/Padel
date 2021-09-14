<?php

/* ----------------------------------------------------------------------------
 * Proyecto Mapache - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.2.0
 * ---------------------------------------------------------------------------- */

namespace EA\Engine\Api\V1\Processors;

/**
 * Interface ProcessorsInterface
 *
 * @deprecated
 *
 * @package EA\Engine\Api\V1\Processors
 */
interface ProcessorsInterface {
    public static function process(array &$response);
}
