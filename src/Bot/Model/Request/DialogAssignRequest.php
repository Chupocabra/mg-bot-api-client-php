<?php

/**
 * PHP version 7.0
 *
 * Dialog assign request
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 */

namespace RetailCrm\Mg\Bot\Model\Request;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PHP version 7.0
 *
 * DialogAssignRequest class. Parameters:
 *
 * | Parameter name | Data type |
 * |----------------|-----------|
 * | dialog_id      | int       |
 * | user_id        | int       |
 * | bot_id         | int       |
 *
 * @package  RetailCrm\Mg\Bot\Model\Request
 * @author   retailCRM <integration@retailcrm.ru>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://help.retailcrm.pro/docs/Developers
 *
 * @method int   getDialogId()           "Get `dialog_id` value"
 * @method $this setDialogId(int $value) "Set `dialog_id` value"
 * @method int   getUserId()             "Get `user_id` value"
 * @method $this setUserId(int $value)   "Set `user_id` value"
 * @method int   getBotId()              "Get `bot_id` value"
 * @method $this setBotId(int $value)    "Set `bot_id` value"
 */
class DialogAssignRequest extends LazyJsonMapper
{
    /**
     * JSON fields. Use setters and getters to work with this values.
     * Setters will return model instance, so you can construct any model like this:
     * ```
     * $request = (new InfoRequest())
     *              ->setName("...")
     *              ->setRoles([...]);
     *```
     * Model constructor can accept array as initial data. You can use
     * this to initialize models:
     * ```
     * $request = new InfoRequest(["name" => "...", "roles" => [...]]);
     * ```
     */
    const JSON_PROPERTY_MAP = [
        'dialog_id' => 'int',
        'user_id' => 'int',
        'bot_id' => 'int'
    ];
}
