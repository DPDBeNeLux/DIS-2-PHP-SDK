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
     * @var string $CustomerReference1
     */
    protected $CustomerReference1;

    /**
     * @var string $CustomerReference2
     */
    protected $CustomerReference2;

    /**
     * @var string $CustomerReference3
     */
    protected $CustomerReference3;

    /**
     * @var string $CustomerReference4
     */
    protected $CustomerReference4;

    /**
     * @var string $Volume
     */
    protected $Volume;

    /**
     * @var int $Weight
     */
    protected $Weight;

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
    public function getCustomerReference1()
    {
        return $this->CustomerReference1;
    }

    /**
     * @param string $CustomerReference1
     */
    public function setCustomerReference1($CustomerReference1)
    {
        $this->CustomerReference1 = $CustomerReference1;
    }

    /**
     * @return string
     */
    public function getCustomerReference2()
    {
        return $this->CustomerReference2;
    }

    /**
     * @param string $CustomerReference2
     */
    public function setCustomerReference2($CustomerReference2)
    {
        $this->CustomerReference2 = $CustomerReference2;
    }

    /**
     * @return string
     */
    public function getCustomerReference3()
    {
        return $this->CustomerReference3;
    }

    /**
     * @param string $CustomerReference3
     */
    public function setCustomerReference3($CustomerReference3)
    {
        $this->CustomerReference3 = $CustomerReference3;
    }

    /**
     * @return string
     */
    public function getCustomerReference4()
    {
        return $this->CustomerReference4;
    }

    /**
     * @param string $CustomerReference4
     */
    public function setCustomerReference4($CustomerReference4)
    {
        $this->CustomerReference4 = $CustomerReference4;
    }

    /**
     * @return string
     */
    public function getVolume()
    {
        return $this->Volume;
    }

    /**
     * @param string $Volume
     */
    public function setVolume($Volume)
    {
        $this->Volume = $Volume;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param int $Weight
     */
    public function setWeight($Weight)
    {
        $this->Weight = $Weight;
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
