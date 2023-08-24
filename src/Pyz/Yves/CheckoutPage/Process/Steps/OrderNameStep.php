<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\CheckoutPage\Process\Steps;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Yves\StepEngine\Dependency\Step\StepWithBreadcrumbInterface;
use SprykerShop\Yves\CheckoutPage\Process\Steps\AbstractBaseStep;

class OrderNameStep extends AbstractBaseStep implements StepWithBreadcrumbInterface
{
 /**
  * @param \Spryker\Shared\Kernel\Transfer\AbstractTransfer $quoteTransfer
  *
  * @return bool
  */
    public function requireInput(AbstractTransfer $quoteTransfer): bool
    {
        return true;
    }

    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return bool
     */
    public function postCondition(AbstractTransfer $quoteTransfer): bool
    {
        return $quoteTransfer->getOrderName() !== null;
    }

    /**
     * @return string
     */
    public function getBreadcrumbItemTitle(): string
    {
        return 'checkout.step.order-name.title';
    }

    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return bool
     */
    public function isBreadcrumbItemEnabled(AbstractTransfer $quoteTransfer): bool
    {
        return true;
    }

    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return false
     */
    public function isBreadcrumbItemHidden(AbstractTransfer $quoteTransfer): bool
    {
        return false;
    }
}
