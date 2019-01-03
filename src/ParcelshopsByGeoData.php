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
namespace DPDBenelux\SDK;

/**
 * Class ParcelshopsByGeoData
 * @package DPDBenelux
 */
class ParcelshopsByGeoData extends DataObject
{
    /**
     * @var string $Longitude
     */
    protected $Longitude;

    /**
     * @var string $Latitude
     */
    protected $Latitude;

    /**
     * @var string $CountryIso
     */
    protected $CountryIso;

    /**
     * @var int $Limit
     */
    protected $Limit;

    /**
     * @var bool $ConsigneePickupAllowed
     */
    protected $ConsigneePickupAllowed;

    /**
     * @var bool $ReturnAllowed
     */
    protected $ReturnAllowed;

    /**
     * @var bool $ExpressAllowed
     */
    protected $ExpressAllowed;

    /**
     * @var bool $HideOnHoliday
     */
    protected $HideOnHoliday;

    /**
     * @var bool $HideClosed
     */
    protected $HideClosed;

    /**
     * @var bool $AvailabilityDate ;
     */
    protected $AvailabilityDate;

    /**
     * @var bool $PrepaidAllowed
     */
    protected $PrepaidAllowed;

    /**
     * @var bool $CashOnDeliveryAllowed
     */
    protected $CashOnDeliveryAllowed;

    /**
     * @var bool $CashOnDeliveryPayment
     */
    protected $CashOnDeliveryPayment;

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return $this
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return $this
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryIso()
    {
        return $this->CountryIso;
    }

    /**
     * @param string $CountryIso
     * @return $this
     */
    public function setCountryIso($CountryIso)
    {
        $this->CountryIso = $CountryIso;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * @param int $Limit
     * @return $this
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;
        return $this;
    }

    /**
     * @return bool
     */
    public function isConsigneePickupAllowed()
    {
        return $this->ConsigneePickupAllowed;
    }

    /**
     * @param bool $ConsigneePickupAllowed
     * @return $this
     */
    public function setConsigneePickupAllowed($ConsigneePickupAllowed)
    {
        $this->ConsigneePickupAllowed = $ConsigneePickupAllowed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReturnAllowed()
    {
        return $this->ReturnAllowed;
    }

    /**
     * @param bool $ReturnAllowed
     * @return $this
     */
    public function setReturnAllowed($ReturnAllowed)
    {
        $this->ReturnAllowed = $ReturnAllowed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isExpressAllowed()
    {
        return $this->ExpressAllowed;
    }

    /**
     * @param bool $ExpressAllowed
     * @return $this
     */
    public function setExpressAllowed($ExpressAllowed)
    {
        $this->ExpressAllowed = $ExpressAllowed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHideOnHoliday()
    {
        return $this->HideOnHoliday;
    }

    /**
     * @param bool $HideOnHoliday
     * @return $this
     */
    public function setHideOnHoliday($HideOnHoliday)
    {
        $this->HideOnHoliday = $HideOnHoliday;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHideClosed()
    {
        return $this->HideClosed;
    }

    /**
     * @param bool $HideClosed
     * @return $this
     */
    public function setHideClosed($HideClosed)
    {
        $this->HideClosed = $HideClosed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAvailabilityDate()
    {
        return $this->AvailabilityDate;
    }

    /**
     * @param bool $AvailabilityDate
     * @return $this
     */
    public function setAvailabilityDate($AvailabilityDate)
    {
        $this->AvailabilityDate = $AvailabilityDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrepaidAllowed()
    {
        return $this->PrepaidAllowed;
    }

    /**
     * @param bool $PrepaidAllowed
     * @return $this
     */
    public function setPrepaidAllowed($PrepaidAllowed)
    {
        $this->PrepaidAllowed = $PrepaidAllowed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCashOnDeliveryAllowed()
    {
        return $this->CashOnDeliveryAllowed;
    }

    /**
     * @param bool $CashOnDeliveryAllowed
     * @return $this
     */
    public function setCashOnDeliveryAllowed($CashOnDeliveryAllowed)
    {
        $this->CashOnDeliveryAllowed = $CashOnDeliveryAllowed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCashOnDeliveryPayment()
    {
        return $this->CashOnDeliveryPayment;
    }

    /**
     * @param bool $CashOnDeliveryPayment
     * @return $this
     */
    public function setCashOnDeliveryPayment($CashOnDeliveryPayment)
    {
        $this->CashOnDeliveryPayment = $CashOnDeliveryPayment;
        return $this;
    }
}
