<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * @link      http://www.x-cart.com/
 */

namespace XLite\Module\Viauco\Vietnamese\View;

/**
 * Abstract widget
 */
abstract class AView extends \XLite\Module\XC\FacebookMarketing\View\APixel implements \XLite\Base\IDecorator
{
    /**
     * Return theme common files
     *
     * @return array
     */
    protected function getThemeFiles($adminZone = null)
    {
        $list = parent::getThemeFiles($adminZone);
        if (\XLite\Module\Viauco\Vietnamese\Main::isActiveLanguage()) {
            $list[static::RESOURCE_CSS][] = 'modules/Viauco/Vietnamese/css/layout.css';
        }

        return $list;
    }
}