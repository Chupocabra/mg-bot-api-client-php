<?php

/**
 * PHP version 7.0
 *
 * Serializer
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Common;

/**
 * PHP version 7.0
 *
 * Serializer class
 *
 * @package  RetailCrm\Common
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */
class Serializer
{
    /**
     * Serialization flag: serialize object to PHP Array
     */
    const S_ARRAY = 0;

    /**
     * Serialization flag: serialize object to JSON string
     */
    const S_JSON = 1;

    /**
     * Serialize given object to JSON or Array
     *
     * @param object $request
     * @param int    $serialize
     *
     * @return array|string
     */
    public static function serialize($request, $serialize = self::S_JSON)
    {
        $serialized = null;

        switch ($serialize) {
            case self::S_ARRAY:
                $serialized = $request->asArray();
                break;
            case self::S_JSON:
            default:
                $serialized = $request->asJson();
                break;
        }

        return $serialized;
    }
}
