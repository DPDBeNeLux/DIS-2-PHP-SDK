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

class ParcelShop extends DataObject
{
    /**
     * @var string
     */
    protected $ParcelShopId;
    /**
     * @var string
     */
    protected $Company;
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
     * @var int
     */
    protected $CountryN;
    /**
     * @var string
     */
    protected $IsoAlpha2;
    /**
     * @var string
     */
    protected $IsoAlpha3;
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
    protected $ExtraInfo;
    /**
     * @var bool
     */
    protected $PickupByConsigneeAllowed;
    /**
     * @var bool
     */
    protected $ReturnAllowed;
    /**
     * @var bool
     */
    protected $ExpressAllowed;
    /**
     * @var bool
     */
    protected $ExpressPickupTime;
    /**
     * @var bool
     */
    protected $PrepaidAllowed;
    /**
     * @var bool
     */
    protected $CashOnDeliveryAllowed;
    /**
     * @var bool
     */
    protected $CashOnDeliveryPaymentCash;
    /**
     * @var bool
     */
    protected $CashOnDeliveryPaymentCheque;
    /**
     * @var bool
     */
    protected $CashOnDeliveryPaymentCreditCard;
    /**
     * @var string
     */
    protected $Distance;
    /**
     * @var string
     */
    protected $Longitude;
    /**
     * @var string
     */
    protected $Latitude;
    /**
     * @var string
     */
    protected $CoordinateX;
    /**
     * @var string
     */
    protected $CoordinateY;
    /**
     * @var string
     */
    protected $CoordinateZ;
    /**
     * @var object
     */
    protected $OpeningHours;
    /**
     * @var string
     */
    protected $Holiday;

    /**
     * @return string
     */
    public function getParcelShopId()
    {
        return $this->ParcelShopId;
    }

    /**
     * @param string $parcelShopId
     * @return $this
     */
    public function setParcelShopId($parcelShopId)
    {
        $this->ParcelShopId = $parcelShopId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->Company = $company;
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
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->Street = $street;
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
     * @param string $houseNo
     * @return $this
     */
    public function setHouseNo($houseNo)
    {
        $this->HouseNo = $houseNo;
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
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->State = $state;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryN()
    {
        return $this->CountryN;
    }

    /**
     * @param int $countryN
     * @return $this
     */
    public function setCountryN($countryN)
    {
        $this->CountryN = $countryN;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsoAlpha2()
    {
        return $this->IsoAlpha2;
    }

    /**
     * @param string $IsoAlpha2
     * @return $this
     */
    public function setIsoAlpha2($IsoAlpha2)
    {
        $this->IsoAlpha2 = $IsoAlpha2;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsoAlpha3()
    {
        return $this->IsoAlpha3;
    }

    /**
     * @param string $IsoAlpha3
     * @return $this
     */
    public function setIsoAlpha3($IsoAlpha3)
    {
        $this->IsoAlpha3 = $IsoAlpha3;
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
     * @param string $zipCode
     * @return $this
     */
    public function setZipCode($zipCode)
    {
        $this->ZipCode = $zipCode;
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
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->City = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo()
    {
        return $this->ExtraInfo;
    }

    /**
     * @param string $extraInfo
     * @return $this
     */
    public function setExtraInfo($extraInfo)
    {
        $this->ExtraInfo = $extraInfo;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPickupByConsigneeAllowed()
    {
        return $this->PickupByConsigneeAllowed;
    }

    /**
     * @param bool $pickupByConsigneeAllowed
     * @return $this
     */
    public function setPickupByConsigneeAllowed($pickupByConsigneeAllowed)
    {
        $this->PickupByConsigneeAllowed = $pickupByConsigneeAllowed;
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
     * @param bool $returnAllowed
     * @return $this
     */
    public function setReturnAllowed($returnAllowed)
    {
        $this->ReturnAllowed = $returnAllowed;
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
     * @param bool $expressAllowed
     * @return $this
     */
    public function setExpressAllowed($expressAllowed)
    {
        $this->ExpressAllowed = $expressAllowed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isExpressPickupTime()
    {
        return $this->ExpressPickupTime;
    }

    /**
     * @param bool $expressPickupTime
     * @return $this
     */
    public function setExpressPickupTime($expressPickupTime)
    {
        $this->ExpressPickupTime = $expressPickupTime;
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
     * @param bool $prepaidAllowed
     * @return $this
     */
    public function setPrepaidAllowed($prepaidAllowed)
    {
        $this->PrepaidAllowed = $prepaidAllowed;
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
     * @param bool $cashOnDeliveryAllowed
     * @return $this
     */
    public function setCashOnDeliveryAllowed($cashOnDeliveryAllowed)
    {
        $this->CashOnDeliveryAllowed = $cashOnDeliveryAllowed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCashOnDeliveryPaymentCash()
    {
        return $this->CashOnDeliveryPaymentCash;
    }

    /**
     * @param bool $cashOnDeliveryPaymentCash
     * @return $this
     */
    public function setCashOnDeliveryPaymentCash($cashOnDeliveryPaymentCash)
    {
        $this->CashOnDeliveryPaymentCash = $cashOnDeliveryPaymentCash;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCashOnDeliveryPaymentCheque()
    {
        return $this->CashOnDeliveryPaymentCheque;
    }

    /**
     * @param bool $cashOnDeliveryPaymentCheque
     * @return $this
     */
    public function setCashOnDeliveryPaymentCheque($cashOnDeliveryPaymentCheque)
    {
        $this->CashOnDeliveryPaymentCheque = $cashOnDeliveryPaymentCheque;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCashOnDeliveryPaymentCreditCard()
    {
        return $this->CashOnDeliveryPaymentCreditCard;
    }

    /**
     * @param bool $cashOnDeliveryPaymentCreditCard
     * @return $this
     */
    public function setCashOnDeliveryPaymentCreditCard($cashOnDeliveryPaymentCreditCard)
    {
        $this->CashOnDeliveryPaymentCreditCard = $cashOnDeliveryPaymentCreditCard;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistance()
    {
        return $this->Distance;
    }

    /**
     * @param string $distance
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->Distance = $distance;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $longitude
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->Longitude = $longitude;
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
     * @param string $latitude
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->Latitude = $latitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoordinateX()
    {
        return $this->CoordinateX;
    }

    /**
     * @param string $coordinateX
     * @return $this
     */
    public function setCoordinateX($coordinateX)
    {
        $this->CoordinateX = $coordinateX;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoordinateY()
    {
        return $this->CoordinateY;
    }

    /**
     * @param string $coordinateY
     * @return $this
     */
    public function setCoordinateY($coordinateY)
    {
        $this->CoordinateY = $coordinateY;
        return $this;
    }

    /**
     * @return string
     */
    public function getCoordinateZ()
    {
        return $this->CoordinateZ;
    }

    /**
     * @param string $coordinateZ
     * @return $this
     */
    public function setCoordinateZ($coordinateZ)
    {
        $this->CoordinateZ = $coordinateZ;
        return $this;
    }

    /**
     * @return object
     */
    public function getOpeningHours()
    {
        return $this->OpeningHours;
    }

    /**
     * @param object $openingHours
     * @return $this
     */
    public function setOpeningHours($openingHours)
    {
        $this->OpeningHours = $openingHours;
        return $this;
    }

    /**
     * @return string
     */
    public function getHoliday()
    {
        return $this->Holiday;
    }

    /**
     * @param string $holiday
     * @return $this
     */
    public function setHoliday($holiday)
    {
        $this->Holiday = $holiday;
        return $this;
    }
}
