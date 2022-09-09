<?php

namespace Picqer\BolRetailerV6\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Stock extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'amount' => [ 'model' => null, 'array' => false ],
            'correctedStock' => [ 'model' => null, 'array' => false ],
            'managedByRetailer' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var int The amount of stock available for the specified product present in the retailers warehouse. Note: this
     * should not be the FBB stock! Defaults to 0.
     */
    public $amount;

    /**
     * @var int The amount of items in stock minus handled order and minus open orders. As compared to the stock you
     * sent us. When this reaches 0, your offer will not be for sale on the shop.
     */
    public $correctedStock;

    /**
     * @var bool Configures whether the retailer manages the stock levels or that bol.com should calculate the corrected
     * stock based on actual open orders. In case the configuration is set to 'false', all open orders are used to
     * calculate the corrected stock. In case the configuration is set to 'true', only orders that are placed after the
     * last offer update are taken into account.
     */
    public $managedByRetailer;
}
