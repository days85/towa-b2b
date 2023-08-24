<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\CheckoutPage;

use Pyz\Yves\CheckoutPage\Form\FormFactory;
use Pyz\Yves\CheckoutPage\Process\StepFactory;
use SprykerShop\Yves\CheckoutPage\CheckoutPageFactory as SprykerCheckoutPageFactory;

class CheckoutPageFactory extends SprykerCheckoutPageFactory
{
    /**
     * @return \Pyz\Yves\CheckoutPage\Form\FormFactory
     */
    public function createPyzCheckoutFormFactory(): FormFactory
    {
        return new FormFactory();
    }

    /**
     * @return array<string>
     */
    public function getOrderNamePageWidgetPlugins(): array
    {
        return $this->getProvidedDependency(CheckoutPageDependencyProvider::PLUGIN_ORDER_NAME_PAGE_WIDGETS);
    }

    /**
     * @return StepFactory
     */
    public function createStepFactory(): StepFactory
    {
        return new StepFactory();
    }
}
