<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\CheckoutPage\Process;

use Pyz\Yves\CheckoutPage\Plugin\Router\CheckoutPageRouteProviderPlugin;
use Pyz\Yves\CheckoutPage\Process\Steps\OrderNameStep;
use SprykerShop\Yves\CheckoutPage\Process\StepFactory as SprykerStepFactory;

/**
 * @method \Pyz\Yves\CheckoutPage\CheckoutPageConfig getConfig()
 */
class StepFactory extends SprykerStepFactory
{
    public function getSteps(): array
    {
        return [
            $this->createEntryStep(),
            $this->createCustomerStep(),
            $this->createOrderNameStep(),
            $this->createAddressStep(),
            $this->createShipmentStep(),
            $this->createPaymentStep(),
            $this->createSummaryStep(),
            $this->createPlaceOrderStep(),
            $this->createSuccessStep(),
            $this->createErrorStep(),
        ];
    }

    /**
     * @return \Pyz\Yves\CheckoutPage\Process\Steps\OrderNameStep
     */
    public function createOrderNameStep(): OrderNameStep
    {
        return new OrderNameStep(
            CheckoutPageRouteProviderPlugin::ROUTE_NAME_CHECKOUT_ORDER_NAME,
            $this->getConfig()->getEscapeRoute(),
        );
    }
}
