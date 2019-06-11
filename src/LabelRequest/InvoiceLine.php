<?php

namespace DPDBenelux\SDK\LabelRequest;

class InvoiceLine
{
    /**
     * @var string
     */
    protected $Description;

    /**
     * @var string
     */
    protected $HarmonizedSystemCode;

    /**
     * @var string
     */
    protected $OriginCountry;

    /**
     * @var int
     */
    protected $Quantity;

    /**
     * @var int
     */
    protected $TotalAmount;

    /**
     * @var int
     */
    protected $NetWeight;

    /**
     * @var int
     */
    protected $GrossWeight;

    /**
     * @var int
     */
    protected $InvoiceLineNumber;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return InvoiceLine
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getHarmonizedSystemCode()
    {
        return $this->HarmonizedSystemCode;
    }

    /**
     * @param string $HarmonizedSystemCode
     * @return InvoiceLine
     */
    public function setHarmonizedSystemCode($HarmonizedSystemCode)
    {
        $this->HarmonizedSystemCode = $HarmonizedSystemCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getOriginCountry()
    {
        return $this->OriginCountry;
    }

    /**
     * @param string $OriginCountry
     * @return InvoiceLine
     */
    public function setOriginCountry($OriginCountry)
    {
        $this->OriginCountry = $OriginCountry;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return InvoiceLine
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param int $TotalAmount
     * @return InvoiceLine
     */
    public function setTotalAmount($TotalAmount)
    {
        $this->TotalAmount = $TotalAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getNetWeight()
    {
        return $this->NetWeight;
    }

    /**
     * @param int $NetWeight
     * @return InvoiceLine
     */
    public function setNetWeight($NetWeight)
    {
        $this->NetWeight = $NetWeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getGrossWeight()
    {
        return $this->GrossWeight;
    }

    /**
     * @param int $GrossWeight
     * @return InvoiceLine
     */
    public function setGrossWeight($GrossWeight)
    {
        $this->GrossWeight = $GrossWeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceLineNumber()
    {
        return $this->InvoiceLineNumber;
    }

    /**
     * @param int $InvoiceLineNumber
     * @return InvoiceLine
     */
    public function setInvoiceLineNumber($InvoiceLineNumber)
    {
        $this->InvoiceLineNumber = $InvoiceLineNumber;
        return $this;
    }
}
