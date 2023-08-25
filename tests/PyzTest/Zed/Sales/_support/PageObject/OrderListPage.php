<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\Sales\PageObject;

class OrderListPage
{
    /**
     * @var string
     */
    public const ORDER_LIST_URL = '/sales';

    public const ORDER_LIST_TABLE_ORDER_NAME_COLUMN_XPATH = '//th[@id="spy_sales_order.order_name"]';
}
