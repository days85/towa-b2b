<?php

namespace Pyz\Zed\Sales\Communication\Table;

use Orm\Zed\Sales\Persistence\Map\SpySalesOrderTableMap;
use Spryker\Zed\Sales\Communication\Table\OrdersTable as SprykerOrdersTable;
use Spryker\Zed\Sales\Communication\Table\OrdersTableQueryBuilder;

class OrdersTable extends SprykerOrdersTable
{
    /**
     * @return string[]
     */
    protected function getHeaderFields(): array
    {
        return [
            SpySalesOrderTableMap::COL_ID_SALES_ORDER => '#',
            SpySalesOrderTableMap::COL_ORDER_NAME => 'Order Name',
            SpySalesOrderTableMap::COL_ORDER_REFERENCE => 'Order Reference',
            SpySalesOrderTableMap::COL_CREATED_AT => 'Created',
            SpySalesOrderTableMap::COL_CUSTOMER_REFERENCE => 'Customer Full Name',
            SpySalesOrderTableMap::COL_EMAIL => 'Email',
            static::ITEM_STATE_NAMES_CSV => 'Order State',
            static::GRAND_TOTAL => 'Grand Total',
            static::NUMBER_OF_ORDER_ITEMS => 'Number of Items',
            static::URL => 'Actions',
        ];
    }

    /**
     * @return string[]
     */
    protected function getSearchableFields(): array
    {
        return [
            SpySalesOrderTableMap::COL_ID_SALES_ORDER,
            SpySalesOrderTableMap::COL_ORDER_NAME,
            SpySalesOrderTableMap::COL_ORDER_REFERENCE,
            SpySalesOrderTableMap::COL_CREATED_AT,
            SpySalesOrderTableMap::COL_EMAIL,
            $this->getFullNameSearchableField(),
        ];
    }

    /**
     * @return string[]
     */
    protected function getSortableFields(): array
    {
        return [
            SpySalesOrderTableMap::COL_ID_SALES_ORDER,
            SpySalesOrderTableMap::COL_ORDER_NAME,
            SpySalesOrderTableMap::COL_ORDER_REFERENCE,
            SpySalesOrderTableMap::COL_CREATED_AT,
            SpySalesOrderTableMap::COL_EMAIL,
            static::NUMBER_OF_ORDER_ITEMS,
        ];
    }

    /**
     * @param array $queryResults
     * @return array
     */
    protected function formatQueryData(array $queryResults): array
    {
        $results = [];
        foreach ($queryResults as $item) {
            $itemLine = [
                SpySalesOrderTableMap::COL_ID_SALES_ORDER => $item[SpySalesOrderTableMap::COL_ID_SALES_ORDER],
                SpySalesOrderTableMap::COL_ORDER_NAME => $item[SpySalesOrderTableMap::COL_ORDER_NAME],
                SpySalesOrderTableMap::COL_ORDER_REFERENCE => $item[SpySalesOrderTableMap::COL_ORDER_REFERENCE],
                SpySalesOrderTableMap::COL_CREATED_AT => $this->utilDateTimeService->formatDateTime($item[SpySalesOrderTableMap::COL_CREATED_AT]),
                SpySalesOrderTableMap::COL_CUSTOMER_REFERENCE => $this->formatCustomer($item),
                SpySalesOrderTableMap::COL_EMAIL => $this->formatEmailAddress($item[SpySalesOrderTableMap::COL_EMAIL]),
                static::ITEM_STATE_NAMES_CSV => $this->groupItemStateNames($item[OrdersTableQueryBuilder::FIELD_ITEM_STATE_NAMES_CSV]),
                static::GRAND_TOTAL => $this->getGrandTotal($item),
                static::NUMBER_OF_ORDER_ITEMS => $item[OrdersTableQueryBuilder::FIELD_NUMBER_OF_ORDER_ITEMS],
                static::URL => implode(' ', $this->createActionUrls($item)),
            ];
            $itemLine = $this->applyUiPlugins($itemLine);

            $itemLine[SpySalesOrderTableMap::COL_ID_SALES_ORDER] = $this->formatInt($itemLine[SpySalesOrderTableMap::COL_ID_SALES_ORDER]);
            $itemLine[static::NUMBER_OF_ORDER_ITEMS] = $this->formatInt((int)$itemLine[static::NUMBER_OF_ORDER_ITEMS]);

            $results[] = $itemLine;
        }

        return $results;
    }
}
