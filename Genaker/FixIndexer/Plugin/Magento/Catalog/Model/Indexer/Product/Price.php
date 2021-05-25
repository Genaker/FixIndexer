<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\FixIndexer\Plugin\Magento\Catalog\Model\Indexer\Product;

class Price
{

    public function aroundExecute(
        \Magento\Catalog\Model\Indexer\Product\Price $subject,
        \Closure $proceed,
        $ids
    ) {
    
        $hour = date('G'); // 0 .. 23
	// Show run between 0am and 4am
	if ($hour <= 4) {
		$result = $proceed($ids);
        	return $result;
        }
    }
}

