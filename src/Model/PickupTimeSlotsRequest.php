<?php

namespace Picqer\BolRetailerV5\Model;

// This class is auto generated by OpenApi\ModelGenerator
class PickupTimeSlotsRequest extends AbstractModel
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
            'address' => [ 'model' => PickupTimeSlotsAddress::class, 'array' => false ],
            'numberOfLoadCarriers' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var PickupTimeSlotsAddress
     */
    public $address;

    /**
     * @var int The number of load carriers in this shipment.
     */
    public $numberOfLoadCarriers;
}