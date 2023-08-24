<?php

namespace Pyz\Zed\Sales\Business\Expander;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;

interface OrderNameExpanderInterface
{
    /**
     * @param SpySalesOrderEntityTransfer $salesOrderEntityTransfer
     * @param QuoteTransfer $quoteTransfer
     * @return SpySalesOrderEntityTransfer
     */
    public function expandSalesOrderEntityTransferWithOrderName(
        SpySalesOrderEntityTransfer $salesOrderEntityTransfer,
        QuoteTransfer $quoteTransfer
    ): SpySalesOrderEntityTransfer;
}
