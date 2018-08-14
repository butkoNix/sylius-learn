<?php

namespace AppBundle\Entity;

use Sylius\Component\Addressing\Model\Country as BaseCountry;

class Country extends BaseCountry
{
    /**
     * @var bool
     */
    private $flag;

    /**
     * @return bool|null
     */
    public function getFlag(): ?bool
    {
        return $this->flag;
    }

    /**
     * @param bool $flag
     */
    public function setFlag(bool $flag): void
    {
        $this->flag = $flag;
    }
}