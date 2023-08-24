<?php

namespace Pyz\Yves\CheckoutPage\Process\Steps;

use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Yves\StepEngine\Dependency\Step\StepWithBreadcrumbInterface;
use SprykerShop\Yves\CheckoutPage\Process\Steps\AbstractBaseStep;

class OrderNameStep extends AbstractBaseStep implements StepWithBreadcrumbInterface
{

    /**
     * @param AbstractTransfer $quoteTransfer
     * @return bool
     */
    public function requireInput(AbstractTransfer $quoteTransfer): bool
    {
        return true;
    }

    /**
     * @param QuoteTransfer $quoteTransfer
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
     * @param QuoteTransfer $quoteTransfer
     * @return bool
     */
    public function isBreadcrumbItemEnabled(AbstractTransfer $quoteTransfer): bool
    {
        return true;
    }

    /**
     * @param QuoteTransfer $quoteTransfer
     * @return false
     */
    public function isBreadcrumbItemHidden(AbstractTransfer $quoteTransfer): bool
    {
        return false;
    }
}
