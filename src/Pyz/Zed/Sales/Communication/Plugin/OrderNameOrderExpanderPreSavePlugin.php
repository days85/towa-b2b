<?php

namespace Pyz\Zed\Sales\Communication\Plugin;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;
use Pyz\Zed\Sales\Business\SalesFacadeInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Sales\Dependency\Plugin\OrderExpanderPreSavePluginInterface;

/**
 * @method SalesFacadeInterface getFacade()
 */
class OrderNameOrderExpanderPreSavePlugin extends AbstractPlugin implements OrderExpanderPreSavePluginInterface
{
    /**
     * @param SpySalesOrderEntityTransfer $salesOrderEntityTransfer
     * @param QuoteTransfer $quoteTransfer
     * @return SpySalesOrderEntityTransfer
     */
    public function expand(SpySalesOrderEntityTransfer $salesOrderEntityTransfer, QuoteTransfer $quoteTransfer): SpySalesOrderEntityTransfer
    {
        return $this->getFacade()->expandSalesOrderEntityTransferWithOrderName($salesOrderEntityTransfer, $quoteTransfer);
    }
}
