<?php

namespace DPDBenelux\SDK\LabelRequest;

class Invoice
{
    /**
     * @var int
     */
    protected $TotalAmount;

    /**
     * @var string
     */
    protected $TotalCurrency;

    /**
     * @var array
     */
    protected $DocumentTypes;

    /**
     * @var string
     */
    protected $InvoiceNumber;

    /**
     * @var string
     */
    protected $InvoiceDate;

    /**
     * @var array
     */
    protected $MovementReferenceNumbers;

    /**
     * @var InvoiceLine[]
     */
    protected $InvoiceLines;

    /**
     * @var Consignee
     */
    protected $Consignee;

    /**
     * @var Consignor
     */
    protected $Consignor;

    /**
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }

    /**
     * @param int $TotalAmount
     * @return Invoice
     */
    public function setTotalAmount($TotalAmount)
    {
        $this->TotalAmount = $TotalAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getTotalCurrency()
    {
        return $this->TotalCurrency;
    }

    /**
     * @param string $TotalCurrency
     * @return Invoice
     */
    public function setTotalCurrency($TotalCurrency)
    {
        $this->TotalCurrency = $TotalCurrency;
        return $this;
    }

    /**
     * @return array
     */
    public function getDocumentTypes()
    {
        return $this->DocumentTypes;
    }

    /**
     * @param array $DocumentTypes
     * @return Invoice
     */
    public function setDocumentTypes($DocumentTypes)
    {
        $this->DocumentTypes = $DocumentTypes;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return Invoice
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->InvoiceDate;
    }

    /**
     * @param string $InvoiceDate
     * @return Invoice
     */
    public function setInvoiceDate($InvoiceDate)
    {
        $this->InvoiceDate = $InvoiceDate;
        return $this;
    }

    /**
     * @return array
     */
    public function getMovementReferenceNumbers()
    {
        return $this->MovementReferenceNumbers;
    }

    /**
     * @param array $MovementReferenceNumbers
     * @return Invoice
     */
    public function setMovementReferenceNumbers($MovementReferenceNumbers)
    {
        $this->MovementReferenceNumbers = $MovementReferenceNumbers;
        return $this;
    }

    /**
     * @return InvoiceLine[]
     */
    public function getInvoiceLines()
    {
        return $this->InvoiceLines;
    }

    /**
     * @param InvoiceLine[] $InvoiceLines
     * @return Invoice
     */
    public function setInvoiceLines($InvoiceLines)
    {
        $this->InvoiceLines = $InvoiceLines;
        return $this;
    }

    /**
     * @return Consignee
     */
    public function getConsignee()
    {
        return $this->Consignee;
    }

    /**
     * @param Consignee $Consignee
     * @return Invoice
     */
    public function setConsignee($Consignee)
    {
        $this->Consignee = $Consignee;
        return $this;
    }

    /**
     * @return Consignor
     */
    public function getConsignor()
    {
        return $this->Consignor;
    }

    /**
     * @param Consignor $Consignor
     * @return Invoice
     */
    public function setConsignor($Consignor)
    {
        $this->Consignor = $Consignor;
        return $this;
    }
}
