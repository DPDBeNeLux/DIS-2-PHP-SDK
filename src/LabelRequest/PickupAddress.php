<?php

namespace DPDBenelux\SDK\LabelRequest;

use DPDBenelux\SDK\DataObject;

class PickupAddress extends DataObject
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
     * @return string
     */
    public function getName1()
    {
        return $this->Name1;
    }

    /**
     * @param string $Name1
     * @return PickupAddress
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
     * @return PickupAddress
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
     * @return PickupAddress
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
     * @return PickupAddress
     */
    public function setHouseNo($HouseNo)
    {
        $this->HouseNo = $HouseNo;
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
     * @return PickupAddress
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
     * @return PickupAddress
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
     * @return PickupAddress
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
     * @return PickupAddress
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
     * @return PickupAddress
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
     * @return PickupAddress
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
     * @return PickupAddress
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
     * @return PickupAddress
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }
}
