<?php
/**
 * Shippit Pty Ltd
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the terms
 * that is available through the world-wide-web at this URL:
 * http://www.shippit.com/terms
 *
 * @category   Shippit
 * @copyright  Copyright (c) Shippit Pty Ltd (http://www.shippit.com)
 * @author     Matthew Muscat <matthew@mamis.com.au>
 * @license    http://www.shippit.com/terms
 */

class Shippit_Shippit_Model_System_Config_Source_Shippit_MaxTimeslots
{
    const TIMESLOTS_MIN = 1;
    const TIMESLOTS_MAX = 20;

    public function toOptionArray()
    {
        $timeslots = range(self::TIMESLOTS_MIN, self::TIMESLOTS_MAX);

        $optionsArray = array();
        $optionsArray[] = array(
            'label' => '-- No Max Timeslots --',
            'value' => ''
        );

        foreach ($timeslots as $timeslot)
        {
            $optionsArray[] = array(
                'label' => $timeslot . ' Timeslots',
                'value' => $timeslot
            );
        }

        return $optionsArray;
    }
}
