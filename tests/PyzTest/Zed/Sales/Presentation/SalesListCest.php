<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace PyzTest\Zed\Sales\Presentation;

use PyzTest\Zed\Sales\PageObject\OrderListPage;
use PyzTest\Zed\Sales\SalesPresentationTester;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group Sales
 * @group Presentation
 * @group SalesListCest
 * Add your own group annotations below this line
 */
class SalesListCest
{
    /**
     * @param \PyzTest\Zed\Sales\SalesPresentationTester $i
     *
     * @return void
     */
    public function testICanSeeOrderNameColumn(SalesPresentationTester $i): void
    {
        $i->amLoggedInUser();
        $i->amOnPage(OrderListPage::ORDER_LIST_URL);

        $i->waitForElementVisible(OrderListPage::ORDER_LIST_TABLE_ORDER_NAME_COLUMN_XPATH, 10);
    }
}
