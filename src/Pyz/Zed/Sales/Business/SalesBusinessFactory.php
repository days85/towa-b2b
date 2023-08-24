<?php

namespace Pyz\Zed\Sales\Business;

use Pyz\Zed\Sales\Business\Expander\OrderNameNameExpander;
use Pyz\Zed\Sales\Business\Expander\OrderNameExpanderInterface;
use Spryker\Zed\Sales\Business\SalesBusinessFactory as SprykerSalesBusinessFactory;

class SalesBusinessFactory extends SprykerSalesBusinessFactory
{
    /**
     * @return OrderNameExpanderInterface
     */
    public function createOrderNameExpander(): OrderNameExpanderInterface
    {
        return new OrderNameNameExpander();
    }
}
