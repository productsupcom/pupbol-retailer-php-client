<?php

namespace Picqer\BolRetailerV6\Model;

// This class is auto generated by OpenApi\ModelGenerator
class SubscriptionResponse extends AbstractModel
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
            'id' => [ 'model' => null, 'array' => false ],
            'resources' => [ 'model' => null, 'array' => true ],
            'url' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string A unique identifier for the subscription.
     */
    public $id;

    /**
     * @var array Type of event.
     */
    public $resources = [];

    /**
     * @var string URL to receive this WebHook notification.
     */
    public $url;
}
