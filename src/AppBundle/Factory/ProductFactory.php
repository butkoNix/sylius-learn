<?php

namespace AppBundle\Factory;

use Sylius\Component\Product\Model\ProductInterface;
use Sylius\Component\Product\Factory\ProductFactoryInterface;

class ProductFactory implements ProductFactoryInterface
{
    /**
     * @var ProductFactoryInterface
     */
    private $decoratedFactory;

    /**
     * @param ProductFactoryInterface $factory
     */
    public function __construct(ProductFactoryInterface $factory)
    {
        $this->decoratedFactory = $factory;
    }

    /**
     * {@inheritdoc}
     */
    public function createNew(): ProductInterface
    {
        return $this->decoratedFactory->createNew();
    }

    /**
     * {@inheritdoc}
     */
    public function createWithVariant(): ProductInterface
    {
        return $this->decoratedFactory->createWithVariant();
    }

    /**
     * @return ProductInterface
     */
    public function createDisabled(): ProductInterface
    {
        /** @var ProductInterface $product */
        $product = $this->decoratedFactory->createWithVariant();

        $product->setEnabled(false);

        return $product;
    }
}