<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Sales\Communication\Plugin;

use Generated\Shared\Transfer\QuoteTransfer;
use Generated\Shared\Transfer\SpySalesOrderEntityTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Sales\Dependency\Plugin\OrderExpanderPreSavePluginInterface;

/**
 * @method \Pyz\Zed\Sales\Business\SalesFacadeInterface getFacade()
 * @method \Pyz\Zed\Sales\Communication\SalesCommunicationFactory getFactory()
 * @method \Spryker\Zed\Sales\Persistence\SalesQueryContainerInterface getQueryContainer()
 * @method \Pyz\Zed\Sales\SalesConfig getConfig()
 */
class OrderNameOrderExpanderPreSavePlugin extends AbstractPlugin implements OrderExpanderPreSavePluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\SpySalesOrderEntityTransfer $salesOrderEntityTransfer
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Generated\Shared\Transfer\SpySalesOrderEntityTransfer
     */
    public function expand(SpySalesOrderEntityTransfer $salesOrderEntityTransfer, QuoteTransfer $quoteTransfer): SpySalesOrderEntityTransfer
    {
        return $this->getFacade()->expandSalesOrderEntityTransferWithOrderName($salesOrderEntityTransfer, $quoteTransfer);
    }
}
