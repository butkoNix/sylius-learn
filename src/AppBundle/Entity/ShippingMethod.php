<?php

namespace AppBundle\Entity;

use Sylius\Component\Core\Model\ShippingMethod as BaseShippingMethod;
use Sylius\Component\Shipping\Model\ShippingMethodTranslation;

class ShippingMethod extends BaseShippingMethod
{
    /**
     * @var string
     */
    private $estimatedDeliveryTime;

    /**
     * @var string
     */
    private $deliveryConditions;

    /**
     * @return string
     */
    public function getEstimatedDeliveryTime(): string
    {
        return $this->estimatedDeliveryTime;
    }

    /**
     * @param string $estimatedDeliveryTime
     */
    public function setEstimatedDeliveryTime(string $estimatedDeliveryTime): void
    {
        $this->estimatedDeliveryTime = $estimatedDeliveryTime;
    }

    /**
     * {@inheritdoc}
     */
//    protected function createTranslation(): ShippingMethodTranslation
//    {
//        return new ShippingMethodTranslation();
//    }

    /**
     * @return string
     */
    public function getDeliveryConditions(): string
    {
        return $this->getTranslation()->getDeliveryConditions();
    }

    /**
     * @param string $deliveryConditions
     */
    public function setDeliveryConditions(string $deliveryConditions): void
    {
        $this->getTranslation()->setDeliveryConditions($deliveryConditions);
    }
}
