<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Sales\Business;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;
use Spryker\Zed\Sales\Business\SalesFacadeInterface as SprykerSalesFacadeInterface;

interface SalesFacadeInterface extends SprykerSalesFacadeInterface
{
    /**
     * Specification:
     * - Adds the order name property to the sales order entity transfer.
     *
     * @api
     *
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
