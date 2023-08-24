<?php

namespace Pyz\Zed\Sales\Business;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;
use Spryker\Zed\Sales\Business\SalesFacade as SprykerSalesFacade;

/**
 * @method SalesBusinessFactory getFactory()
 */
class SalesFacade extends SprykerSalesFacade implements SalesFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param SpySalesOrderEntityTransfer $salesOrderEntityTransfer
     * @param QuoteTransfer $quoteTransfer
     * @return SpySalesOrderEntityTransfer
     */
    public function expandSalesOrderEntityTransferWithOrderName(SpySalesOrderEntityTransfer $salesOrderEntityTransfer, QuoteTransfer $quoteTransfer): SpySalesOrderEntityTransfer
    {
        return $this->getFactory()
            ->createOrderNameExpander()
            ->expandSalesOrderEntityTransferWithOrderName($salesOrderEntityTransfer, $quoteTransfer);
    }
}
