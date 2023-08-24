<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Sales\Business;

use Pyz\Zed\Sales\Business\Expander\OrderNameExpanderInterface;
use Pyz\Zed\Sales\Business\Expander\OrderNameNameExpander;
use Spryker\Zed\Sales\Business\SalesBusinessFactory as SprykerSalesBusinessFactory;

/**
 * @method \Spryker\Zed\Sales\Persistence\SalesEntityManagerInterface getEntityManager()
 * @method \Spryker\Zed\Sales\Persistence\SalesQueryContainerInterface getQueryContainer()
 * @method \Spryker\Zed\Sales\Persistence\SalesRepositoryInterface getRepository()
 * @method \Pyz\Zed\Sales\SalesConfig getConfig()
 */
class SalesBusinessFactory extends SprykerSalesBusinessFactory
{
    /**
     * @return \Pyz\Zed\Sales\Business\Expander\OrderNameExpanderInterface
     */
    public function createOrderNameExpander(): OrderNameExpanderInterface
    {
        return new OrderNameNameExpander();
    }
}
