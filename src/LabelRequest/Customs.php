<?php

namespace DPDBenelux\SDK\LabelRequest;

class Customs
{
    /**
     * @var string
     */
    protected $Terms;

    /**
     * @var string
     */
    protected $ReasonForExport;

    /**
     * @var Invoice
     */
    protected $Invoice;

    /**
     * @return string
     */
    public function getTerms()
    {
        return $this->Terms;
    }

    /**
     * @param string $Terms
     * @return Customs
     */
    public function setTerms($Terms)
    {
        $this->Terms = $Terms;
        return $this;
    }

    /**
     * @return string
     */
    public function getReasonForExport()
    {
        return $this->ReasonForExport;
    }

    /**
     * @param string $ReasonForExport
     * @return Customs
     */
    public function setReasonForExport($ReasonForExport)
    {
        $this->ReasonForExport = $ReasonForExport;
        return $this;
    }

    /**
     * @return Invoice
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }

    /**
     * @param Invoice $Invoice
     * @return Customs
     */
    public function setInvoice($Invoice)
    {
        $this->Invoice = $Invoice;
        return $this;
    }
}
