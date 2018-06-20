<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\CmsBlockProductStorage;

use Spryker\Zed\CmsBlockProductStorage\CmsBlockProductStorageConfig as AbstractCmsBlockProductStorageConfig;

class CmsBlockProductStorageConfig extends AbstractCmsBlockProductStorageConfig
{
    /**
     * @return bool
     */
    public function isSendingToQueue()
    {
        return true;
    }

    /**
     * @return string|null
     */
    public function getCmsBlockProductSynchronizationPoolName()
    {
        return 'synchronizationPool';
    }
}
