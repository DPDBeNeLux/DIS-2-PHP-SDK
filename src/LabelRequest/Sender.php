<?php
/**
 * This file is part of the DIS 2.0 PHP SDK of DPD Nederland B.V.
 *
 * Copyright (C) 2018  DPD Nederland B.V.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
namespace DPDBenelux\SDK\LabelRequest;

use DPDBenelux\SDK\DataObject;

class Sender extends DataObject
{
    /**
     * @var string $Name1
     */
    protected $Name1;

    /**
     * @var string $Name2
     */
    protected $Name2;

    /**
     * @var string $Street
     */
    protected $Street;

    /**
     * @var string $HouseNo
     */
    protected $HouseNo;

    /**
     * @var string $State
     */
    protected $State;

    /**
     * @var string $Country
     */
    protected $Country;

    /**
     * @var string $ZipCode
     */
    protected $ZipCode;

    /**
     * @var string $City
     */
    protected $City;

    /**
     * @var string $Gln
     */
    protected $Gln;

    /**
     * @var string $Contact
     */
    protected $Contact;

    /**
     * @var string $Phone
     */
    protected $Phone;

    /**
     * @var string $Fax
     */
    protected $Fax;

    /**
     * @var string $Email
     */
    protected $Email;

    /**
     * @var string $Comment
     */
    protected $Comment;

    /**
     * @var string
     */
    protected $CompanyName;

    /**
     * @var bool
     */
    protected $IsCommercialAddress;

    /**
     * @var string
     */
    protected $Floor;

    /**
     * @var string
     */
    protected $Building;

    /**
     * @var string
     */
    protected $Department;

    /**
     * @var string
     */
    protected $Website;

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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getGln()
    {
        return $this->Gln;
    }

    /**
     * @param string $Gln
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return $this
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return Sender
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return bool
     */
    public function isIsCommercialAddress()
    {
        return $this->IsCommercialAddress;
    }

    /**
     * @param bool $IsCommercialAddress
     * @return Sender
     */
    public function setIsCommercialAddress($IsCommercialAddress)
    {
        $this->IsCommercialAddress = $IsCommercialAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getFloor()
    {
        return $this->Floor;
    }

    /**
     * @param string $Floor
     * @return Sender
     */
    public function setFloor($Floor)
    {
        $this->Floor = $Floor;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuilding()
    {
        return $this->Building;
    }

    /**
     * @param string $Building
     * @return Sender
     */
    public function setBuilding($Building)
    {
        $this->Building = $Building;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
        return $this->Department;
    }

    /**
     * @param string $Department
     * @return Sender
     */
    public function setDepartment($Department)
    {
        $this->Department = $Department;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * @param string $Website
     * @return Sender
     */
    public function setWebsite($Website)
    {
        $this->Website = $Website;
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
     * @return Sender
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
     * @return Sender
     */
    public function setEoriNumber($EoriNumber)
    {
        $this->EoriNumber = $EoriNumber;
        return $this;
    }
}
