<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * @link      http://www.x-cart.com/
 */

return new \XLite\Rebuild\Hook(
    function () {
        $language = \XLite\Core\Database::getRepo('XLite\Model\Language')
            ->findOneByCode(\XLite\Module\Viauco\Vietnamese\Main::LANG_CODE);
        if ($language !== null) {
            $language->setModule(null);

            \XLite\Core\Database::getRepo('XLite\Model\Language')->update($language);
            \XLite\Core\Translation::getInstance()->reset();
        }
    }
);