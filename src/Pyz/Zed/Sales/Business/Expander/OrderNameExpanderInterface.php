<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Sales\Business\Expander;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;

interface OrderNameExpanderInterface
{
    /**
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $salesOrderEntityTransfer
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer
     */
    public function expandSalesOrderEntityTransferWithOrderName(
        SpySalesOrderEntityTransfer $salesOrderEntityTransfer,
        QuoteTransfer $quoteTransfer,
    ): SpySalesOrderEntityTransfer;
}
