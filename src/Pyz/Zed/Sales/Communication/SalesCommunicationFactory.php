<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Sales\Communication;

use Pyz\Zed\Sales\Communication\Table\OrdersTable;
use Spryker\Zed\Sales\Communication\SalesCommunicationFactory as SprykerSalesCommunicationFactory;
use Spryker\Zed\Sales\SalesDependencyProvider;

/**
 * @method \Spryker\Zed\Sales\Persistence\SalesEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\Sales\Business\SalesFacadeInterface getFacade()
 * @method \Spryker\Zed\Sales\Persistence\SalesQueryContainerInterface getQueryContainer()
 * @method \Spryker\Zed\Sales\Persistence\SalesRepositoryInterface getRepository()
 * @method \Pyz\Zed\Sales\SalesConfig getConfig()
 */
class SalesCommunicationFactory extends SprykerSalesCommunicationFactory
{
    /**
     * @return \Pyz\Zed\Sales\Communication\Table\OrdersTable
     */
    public function createOrdersTable(): OrdersTable
    {
        return new OrdersTable(
            $this->createOrdersTableQueryBuilder(),
            $this->getProvidedDependency(SalesDependencyProvider::FACADE_MONEY),
            $this->getProvidedDependency(SalesDependencyProvider::SERVICE_UTIL_SANITIZE),
            $this->getProvidedDependency(SalesDependencyProvider::SERVICE_DATE_FORMATTER),
            $this->getProvidedDependency(SalesDependencyProvider::FACADE_CUSTOMER),
            $this->getSalesTablePlugins(),
        );
    }
}
