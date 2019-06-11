<?php

namespace DPDBenelux\SDK\LabelRequest;

class Consignee
{
    /**
     * @var string
     */
    protected $Name1;

    /**
     * @var string
     */
    protected $Name2;

    /**
     * @var string
     */
    protected $Street;

    /**
     * @var string
     */
    protected $HouseNo;

    /**
     * @var string
     */
    protected $State;

    /**
     * @var string
     */
    protected $Country;

    /**
     * @var string
     */
    protected $ZipCode;

    /**
     * @var string
     */
    protected $City;

    /**
     * @var int
     */
    protected $Gln;

    /**
     * @var string
     */
    protected $Contact;

    /**
     * @var string
     */
    protected $Phone;

    /**
     * @var string
     */
    protected $Fax;

    /**
     * @var string
     */
    protected $Email;

    /**
     * @var string
     */
    protected $CustomerNumber;

    /**
     * @var string
     */
    protected $VatNumber;

    /**
     * @var string
     */
    protected $EoriNumber;

    /**
     * @return string
     */
    public function getName1()
    {
        return $this->Name1;
    }

    /**
     * @param string $Name1
     * @return Consignee
     */
    public function setName1($Name1)
    {
        $this->Name1 = $Name1;
        return $this;
    }

    /**
     * @return string
     */
    public function getName2()
    {
        return $this->Name2;
    }

    /**
     * @param string $Name2
     * @return Consignee
     */
    public function setName2($Name2)
    {
        $this->Name2 = $Name2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return Consignee
     */
    public function setStreet($Street)
    {
        $this->Street = $Street;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNo()
    {
        return $this->HouseNo;
    }

    /**
     * @param string $HouseNo
     * @return Consignee
     */
    public function setHouseNo($HouseNo)
    {
        $this->HouseNo = $HouseNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return Consignee
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return Consignee
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return Consignee
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return Consignee
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return int
     */
    public function getGln()
    {
        return $this->Gln;
    }

    /**
     * @param int $Gln
     * @return Consignee
     */
    public function setGln($Gln)
    {
        $this->Gln = $Gln;
        return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param string $Contact
     * @return Consignee
     */
    public function setContact($Contact)
    {
        $this->Contact = $Contact;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return Consignee
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return Consignee
     */
    public function setFax($Fax)
    {
        $this->Fax = $Fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return Consignee
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return Consignee
     */
    public function setCustomerNumber($CustomerNumber)
    {
        $this->CustomerNumber = $CustomerNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->VatNumber;
    }

    /**
     * @param string $VatNumber
     * @return Consignee
     */
    public function setVatNumber($VatNumber)
    {
        $this->VatNumber = $VatNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getEoriNumber()
    {
        return $this->EoriNumber;
    }

    /**
     * @param string $EoriNumber
     * @return Consignee
     */
    public function setEoriNumber($EoriNumber)
    {
        $this->EoriNumber = $EoriNumber;
        return $this;
    }
}
