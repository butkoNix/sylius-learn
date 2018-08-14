<?php

namespace AppBundle\Entity;

use Sylius\Component\Shipping\Model\ShippingMethodTranslation as BaseShippingMethodTranslation;

class ShippingMethodTranslation extends BaseShippingMethodTranslation
{
    /**
     * @var string
     */
    private $deliveryConditions;

    /**
     * @return string
     */
    public function getDeliveryConditions(): string
    {
        return $this->deliveryConditions;
    }

    /**
     * @param string $deliveryConditions
     */
    public function setDeliveryConditions(string $deliveryConditions): void
    {
        $this->deliveryConditions = $deliveryConditions;
    }
}