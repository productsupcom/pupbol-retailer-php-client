<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class NotPublishableReason extends AbstractModel
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
            'code' => [ 'model' => null, 'array' => false ],
            'description' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string Error code signalling that the offer is invalid.
     */
    public $code;

    /**
     * @var string Error message describing the reason the offer is invalid.
     */
    public $description;
}
