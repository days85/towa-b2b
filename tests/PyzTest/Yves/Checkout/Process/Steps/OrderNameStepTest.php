<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Yves\Checkout\Process\Steps;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\QuoteTransfer;
use Pyz\Yves\CheckoutPage\Plugin\Router\CheckoutPageRouteProviderPlugin;
use Pyz\Yves\CheckoutPage\Process\Steps\OrderNameStep;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Yves
 * @group Checkout
 * @group Process
 * @group Steps
 * @group OrderNameStepTest
 * Add your own group annotations below this line
 */
class OrderNameStepTest extends Unit
{
    /**
     * @return void
     */
    public function testOrderNamePostConditionsShouldReturnTrueWhenOrderNameSet(): void
    {
        $quoteTransfer = new QuoteTransfer();
        $quoteTransfer->setOrderName('order_name');

        $orderNameStep = $this->createOrderNameStep();

        $this->assertTrue($orderNameStep->postCondition($quoteTransfer));
    }

    /**
     * @return OrderNameStep
     */
    protected function createOrderNameStep(): OrderNameStep
    {
        return new OrderNameStep(
            CheckoutPageRouteProviderPlugin::ROUTE_NAME_CHECKOUT_ORDER_NAME,
            'escape_route'
        );
    }
}
