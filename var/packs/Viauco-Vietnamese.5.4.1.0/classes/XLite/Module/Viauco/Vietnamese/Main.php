<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * @link      http://www.x-cart.com/
 */

namespace XLite\Module\Viauco\Vietnamese;

abstract class Main extends \XLite\Module\AModule
{
    const LANG_CODE = 'vi';

    /**
     * @return bool
     */
    public static function isActiveLanguage()
    {
        return static::LANG_CODE === \XLite\Core\Session::getInstance()->getLanguage()->getCode();
    }
}