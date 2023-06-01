<?php

namespace Picqer\BolRetailerV10\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Filters extends AbstractModel
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
            'filterName' => [ 'model' => null, 'array' => false ],
            'filterValues' => [ 'model' => FilterValues::class, 'array' => true ],
        ];
    }

    /**
     * @var string The name of the filter.
     */
    public $filterName;

    /**
     * @var FilterValues[] The list of filter values in this filter.
     */
    public $filterValues = [];
}