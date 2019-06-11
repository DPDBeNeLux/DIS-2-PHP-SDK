<?php

namespace DPDBenelux\SDK\LabelRequest;

class Consignor
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
     * @return Consignor
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
     * @return Consignor
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
     * @return Consignor
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
     * @return Consignor
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
     * @return Consignor
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
     * @return Consignor
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
     * @return Consignor
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
     * @return Consignor
     */
    public function setCity($City)
    {
        $this->City = $City;
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
     * @return Consignor
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
     * @return Consignor
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
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
     * @return Consignor
     */
    public function setEoriNumber($EoriNumber)
    {
        $this->EoriNumber = $EoriNumber;
        return $this;
    }
}
