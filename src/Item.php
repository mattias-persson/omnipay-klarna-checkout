<?php

namespace MyOnlineStore\Omnipay\KlarnaCheckout;

final class Item extends \Omnipay\Common\Item implements ItemInterface
{
    /**
     * @inheritDoc
     */
    public function getTaxRate()
    {
        return $this->getParameter('tax_rate');
    }

    /**
     * @inheritDoc
     */
    public function getTotalTaxAmount()
    {
        return $this->getParameter('total_tax_amount');
    }

    /**
     * @inheritDoc
     */
    public function getType()
    {
        return $this->getParameter('type');
    }

    /**
     * @param int $taxRate
     */
    public function setTaxRate($taxRate)
    {
        $this->setParameter('tax_rate', $taxRate);
    }

    /**
     * @param int $amount
     */
    public function setTotalTaxAmount($amount)
    {
        $this->setParameter('total_tax_amount', $amount);
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->setParameter('type', $type);
    }
}
