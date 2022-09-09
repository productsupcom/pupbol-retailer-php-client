<?php

namespace Picqer\BolRetailerV6\Model;

// This class is auto generated by OpenApi\ModelGenerator
class UpdateReplenishmentRequest extends AbstractModel
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
            'state' => [ 'model' => null, 'array' => false ],
            'deliveryInfo' => [ 'model' => UpdateDeliveryInfo::class, 'array' => false ],
            'numberOfLoadCarriers' => [ 'model' => null, 'array' => false ],
            'loadCarriers' => [ 'model' => UpdateLoadCarrier::class, 'array' => true ],
        ];
    }

    /**
     * @var string Update the state of the replenishment to cancel the replenishment.
     */
    public $state;

    /**
     * @var UpdateDeliveryInfo
     */
    public $deliveryInfo;

    /**
     * @var int The number of parcels in this replenishment. Note: for first mile this is only a maximum of 20 load
     * carriers.
     */
    public $numberOfLoadCarriers;

    /**
     * @var UpdateLoadCarrier[]
     */
    public $loadCarriers = [];

    /**
     * Returns expectedDeliveryDate from deliveryInfo.
     * @return string ExpectedDeliveryDate from deliveryInfo.
     */
    public function getDeliveryInfoExpectedDeliveryDate(): string
    {
        return $this->deliveryInfo->expectedDeliveryDate;
    }

    /**
     * Sets deliveryInfo by expectedDeliveryDate.
     * @param string $expectedDeliveryDate ExpectedDeliveryDate for deliveryInfo.
     */
    public function setDeliveryInfoExpectedDeliveryDate(string $expectedDeliveryDate): void
    {
        $this->deliveryInfo = UpdateDeliveryInfo::constructFromArray(['expectedDeliveryDate' => $expectedDeliveryDate]);
    }

    /**
     * Returns an array with the ssccs from loadCarriers.
     * @return string[] Ssccs from loadCarriers.
     */
    public function getLoadCarriersSsccs(): array
    {
        return array_map(function ($model) {
            return $model->sscc;
        }, $this->loadCarriers);
    }

    /**
     * Sets loadCarriers by an array of ssccs.
     * @param string[] $ssccs Ssccs for loadCarriers.
     */
    public function setLoadCarriersSsccs(array $ssccs): void
    {
        $this->loadCarriers = array_map(function ($sscc) {
            return UpdateLoadCarrier::constructFromArray(['sscc' => $sscc]);
        }, $ssccs);
    }

    /**
     * Adds a new UpdateLoadCarrier to loadCarriers by sscc.
     * @param string $sscc Sscc for the UpdateLoadCarrier to add.
     */
    public function addLoadCarriersSscc(string $sscc): void
    {
        $this->loadCarriers[] = UpdateLoadCarrier::constructFromArray(['sscc' => $sscc]);
    }
}
