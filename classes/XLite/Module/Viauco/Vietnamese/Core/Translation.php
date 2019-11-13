<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * @link      http://www.x-cart.com/
 */

namespace XLite\Module\Viauco\Vietnamese\Core;

/**
 * Translation core routine
 */
class Translation extends \XLite\Core\Translation implements \XLite\Base\IDecorator
{
    /**
     * Define translation languages
     *
     * @return array
     */
    protected function defineTranslationLanguages()
    {
        $list = parent::defineTranslationLanguages();
        $list['vi'] = '\XLite\Module\Viauco\Vietnamese\Core\TranslationLanguage\Vietnamese';

        return $list;
    }
}