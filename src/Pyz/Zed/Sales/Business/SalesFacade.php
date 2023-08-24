<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Sales\Business;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;
use Spryker\Zed\Sales\Business\SalesFacade as SprykerSalesFacade;

/**
 * @method \Pyz\Zed\Sales\Business\SalesBusinessFactory getFactory()
 * @method \Spryker\Zed\Sales\Persistence\SalesEntityManagerInterface getEntityManager()
 * @method \Spryker\Zed\Sales\Persistence\SalesRepositoryInterface getRepository()
 */
class SalesFacade extends SprykerSalesFacade implements SalesFacadeInterface
{
    /**
     * {@inheritDoc}
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
    ): SpySalesOrderEntityTransfer {
        return $this->getFactory()
            ->createOrderNameExpander()
            ->expandSalesOrderEntityTransferWithOrderName($salesOrderEntityTransfer, $quoteTransfer);
    }
}
