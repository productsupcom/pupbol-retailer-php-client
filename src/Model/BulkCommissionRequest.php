<?php

namespace Picqer\BolRetailerV6\Model;

// This class is auto generated by OpenApi\ModelGenerator
class BulkCommissionRequest extends AbstractModel
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
            'commissionQueries' => [ 'model' => BulkCommissionQuery::class, 'array' => true ],
        ];
    }

    /**
     * @var BulkCommissionQuery[]
     */
    public $commissionQueries = [];
}
