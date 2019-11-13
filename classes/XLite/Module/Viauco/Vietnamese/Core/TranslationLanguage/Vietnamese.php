<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * @link      http://www.x-cart.com/
 */

namespace XLite\Module\Viauco\Vietnamese\Core\TranslationLanguage;

/**
 * Vietnamese
 */
class Vietnamese extends \XLite\Core\TranslationLanguage\ATranslationLanguage
{
    // {{{ Label translators

    /**
     * Translate label 'X modules will be upgraded'
     *
     * @param array $arguments Arguments
     *
     * @return string
     */
    public function translateLabelXModulesWillBeUpgraded(array $arguments)
    {
        $number = $arguments['count'];
        $index = (($number % 10 === 1) && ($number % 100 !== 11))
            ? 0
            : (
            ($number % 10 >= 2) && ($number % 10 <= 4)
            && (($number % 100 < 10) || ($number % 100 >= 20))
                ? 1 : 2
            );

        $labels = array(
            'X module will be upgraded',
            'X modules will be upgraded',
            'X modules will be upgraded (5)',
        );

        return \XLite\Core\Translation::getInstance()->translateByString($labels[$index], $arguments);
    }

    /**
     * Translate label 'X modules will be disabled'
     *
     * @param array $arguments Arguments
     *
     * @return string
     */
    public function translateLabelXModulesWillBeDisabled(array $arguments)
    {
        $number = $arguments['count'];
        $index = (($number % 10 === 1) && ($number % 100 !== 11))
            ? 0
            : (
            ($number % 10 >= 2) && ($number % 10 <= 4)
            && (($number % 100 < 10) || ($number % 100 >= 20))
                ? 1 : 2
            );

        $labels = array(
            'X module will be disabled',
            'X modules will be disabled',
            'X modules will be disabled (5)',
        );

        return \XLite\Core\Translation::getInstance()->translateByString($labels[$index], $arguments);
    }

    // }}}
}