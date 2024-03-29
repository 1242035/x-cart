<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Onboarding\Model\DTO\Product;

use Symfony\Component\Validator\Context\ExecutionContextInterface;
use XLite\Core\Request;
use XLite\Core\Translation;
use XLite\Model\DTO\Base\CommonCell;
use XLite\Module\XC\Onboarding\Core\WizardState;

 class Info extends \XLite\Model\DTO\Product\InfoAbstract implements \XLite\Base\IDecorator
{
    /**
     * @param mixed|\XLite\Model\Product $object
     */
    protected function init($object)
    {
        parent::init($object);

        if (!$this->default->identity && isset(Request::getInstance()->prefill)) {

            if (isset(Request::getInstance()->prefill['name'])) {
                $this->default->name = Request::getInstance()->prefill['name'];
            }

            if (isset(Request::getInstance()->prefill['price'])) {
                $this->prices_and_inventory->price = Request::getInstance()->prefill['price'];
            }
        }
    }

    /**
     * @param \XLite\Module\XC\Onboarding\Model\Product $object
     * @param array|null           $rawData
     */
    public function afterUpdate($object, $rawData = null)
    {
        parent::afterUpdate($object, $rawData);

        $object->dropDemoFlagOnUpdate();
    }

    public function afterCreate($object, $rawData = null)
    {
        parent::afterCreate($object, $rawData);

        if (isset(\XLite\Core\Request::getInstance()->onboarding)) {
            $data = json_decode(\XLite\Core\Request::getInstance()->onboarding, true);

            if (!empty($data['prefilled_form'])) {
                WizardState::getInstance()->setLastAddedProductId($object->getProductId());
            }
        }
    }
}
