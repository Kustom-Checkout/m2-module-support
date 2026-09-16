<?php
/**
 * Copyright 2025 Kustom AB (Originally developed by Klarna Bank AB)
 *
 * For the full copyright and license information, please view the NOTICE
 * and LICENSE files that were distributed with this source code.
 */
declare(strict_types=1);

namespace Klarna\Support\Model\System\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * @internal
 */
class Products implements OptionSourceInterface
{
    /**
     * Returns product options
     *
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            [
                'value'         => "OM",
                "label"         => "Order Management",
                "__disableTmpl" => true,
            ], [
                'value'         => "KCO",
                "label"         => "Klarna Checkout",
                "__disableTmpl" => true,
            ], [
                'value'         => "KSA",
                "label"         => "Klarna Shipping Assistant",
                "__disableTmpl" => true,
            ]
        ];
    }
}
