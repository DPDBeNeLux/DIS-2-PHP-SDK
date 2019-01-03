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

class Parcel extends DataObject
{
    /**
     * @var string $ParcelNumber
     */
    protected $ParcelNumber;

    /**
     * @var string $CustomerReferenceNumber1
     */
    protected $CustomerReferenceNumber1;

    /**
     * @var string $CustomerReferenceNumber2
     */
    protected $CustomerReferenceNumber2;

    /**
     * @var string $CustomerReferenceNumber3
     */
    protected $CustomerReferenceNumber3;

    /**
     * @var string $CustomerReferenceNumber4
     */
    protected $CustomerReferenceNumber4;

    /**
     * @var string $ParcelVolume
     */
    protected $ParcelVolume;

    /**
     * @var int $ParcelWeight
     */
    protected $ParcelWeight;

    /**
     * @var Cod $Cod
     */
    protected $Cod;

    /**
     * @return string
     */
    public function getParcelNumber()
    {
        return $this->ParcelNumber;
    }

    /**
     * @param string $ParcelNumber
     */
    public function setParcelNumber($ParcelNumber)
    {
        $this->ParcelNumber = $ParcelNumber;
    }

    /**
     * @return string
     */
    public function getCustomerReferenceNumber1()
    {
        return $this->CustomerReferenceNumber1;
    }

    /**
     * @param string $CustomerReferenceNumber1
     */
    public function setCustomerReferenceNumber1($CustomerReferenceNumber1)
    {
        $this->CustomerReferenceNumber1 = $CustomerReferenceNumber1;
    }

    /**
     * @return string
     */
    public function getCustomerReferenceNumber2()
    {
        return $this->CustomerReferenceNumber2;
    }

    /**
     * @param string $CustomerReferenceNumber2
     */
    public function setCustomerReferenceNumber2($CustomerReferenceNumber2)
    {
        $this->CustomerReferenceNumber2 = $CustomerReferenceNumber2;
    }

    /**
     * @return string
     */
    public function getCustomerReferenceNumber3()
    {
        return $this->CustomerReferenceNumber3;
    }

    /**
     * @param string $CustomerReferenceNumber3
     */
    public function setCustomerReferenceNumber3($CustomerReferenceNumber3)
    {
        $this->CustomerReferenceNumber3 = $CustomerReferenceNumber3;
    }

    /**
     * @return string
     */
    public function getCustomerReferenceNumber4()
    {
        return $this->CustomerReferenceNumber4;
    }

    /**
     * @param string $CustomerReferenceNumber4
     */
    public function setCustomerReferenceNumber4($CustomerReferenceNumber4)
    {
        $this->CustomerReferenceNumber4 = $CustomerReferenceNumber4;
    }

    /**
     * @return string
     */
    public function getParcelVolume()
    {
        return $this->ParcelVolume;
    }

    /**
     * @param string $ParcelVolume
     */
    public function setParcelVolume($ParcelVolume)
    {
        $this->ParcelVolume = $ParcelVolume;
    }

    /**
     * @return int
     */
    public function getParcelWeight()
    {
        return $this->ParcelWeight;
    }

    /**
     * @param int $ParcelWeight
     */
    public function setParcelWeight($ParcelWeight)
    {
        $this->ParcelWeight = $ParcelWeight;
    }

    /**
     * @return Cod
     */
    public function getCod()
    {
        return $this->Cod;
    }

    /**
     * @param Cod $Cod
     */
    public function setCod($Cod)
    {
        $this->Cod = $Cod;
    }
}
