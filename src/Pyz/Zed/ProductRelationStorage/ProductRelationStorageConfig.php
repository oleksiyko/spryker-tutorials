<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ProductRelationStorage;

use Pyz\Zed\Synchronization\SynchronizationConfig;
use Spryker\Zed\ProductRelationStorage\ProductRelationStorageConfig as SprykerProductRelationStorageConfig;

class ProductRelationStorageConfig extends SprykerProductRelationStorageConfig
{
    /**
     * @return null|string
     */
    public function getProductAbstractRelationSynchronizationPoolName(): ?string
    {
        return SynchronizationConfig::DEFAULT_SYNCHRONIZATION_POOL_NAME;
    }
}
