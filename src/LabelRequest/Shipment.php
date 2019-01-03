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

class Shipment extends DataObject
{
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
     * @var string $SendingDepot
     */
    protected $SendingDepot;

    /**
     * @var string $ShipmentVolume
     */
    protected $ShipmentVolume;

    /**
     * @var int $ShipmentWeight
     */
    protected $ShipmentWeight;

    /**
     * @var string $ExpectedSendingDate
     */
    protected $ExpectedSendingDate;

    /**
     * @var string $ExpectedSendingTime
     */
    protected $ExpectedSendingTime;

    /**
     * @var Sender $Sender
     */
    protected $Sender;

    /**
     * @var Recipient $Recipient
     */
    protected $Recipient;

    /**
     * @var ProductAndServices $ProductAndServices
     */
    protected $ProductAndServices;

    /**
     * @var Parcel[] $Parcels
     */
    protected $Parcels = array();

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
    public function getSendingDepot()
    {
        return $this->SendingDepot;
    }

    /**
     * @param string $SendingDepot
     */
    public function setSendingDepot($SendingDepot)
    {
        $this->SendingDepot = $SendingDepot;
    }

    /**
     * @return string
     */
    public function getShipmentVolume()
    {
        return $this->ShipmentVolume;
    }

    /**
     * @param string $ShipmentVolume
     */
    public function setShipmentVolume($ShipmentVolume)
    {
        $this->ShipmentVolume = $ShipmentVolume;
    }

    /**
     * @return int
     */
    public function getShipmentWeight()
    {
        return $this->ShipmentWeight;
    }

    /**
     * @param int $ShipmentWeight
     */
    public function setShipmentWeight($ShipmentWeight)
    {
        $this->ShipmentWeight = $ShipmentWeight;
    }

    /**
     * @return string
     */
    public function getExpectedSendingDate()
    {
        return $this->ExpectedSendingDate;
    }

    /**
     * @param string $ExpectedSendingDate
     */
    public function setExpectedSendingDate($ExpectedSendingDate)
    {
        $this->ExpectedSendingDate = $ExpectedSendingDate;
    }

    /**
     * @return string
     */
    public function getExpectedSendingTime()
    {
        return $this->ExpectedSendingTime;
    }

    /**
     * @param string $ExpectedSendingTime
     */
    public function setExpectedSendingTime($ExpectedSendingTime)
    {
        $this->ExpectedSendingTime = $ExpectedSendingTime;
    }

    /**
     * @return Sender
     */
    public function getSender()
    {
        return $this->Sender;
    }

    /**
     * @param Sender $Sender
     */
    public function setSender($Sender)
    {
        $this->Sender = $Sender->toArray();
    }

    /**
     * @return Recipient
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }

    /**
     * @param Recipient $Recipient
     */
    public function setRecipient($Recipient)
    {
        $this->Recipient = $Recipient->toArray();
    }

    /**
     * @return ProductAndServices
     */
    public function getProductAndServices()
    {
        return $this->ProductAndServices;
    }

    /**
     * @param ProductAndServices $ProductAndServices
     */
    public function setProductAndServices($ProductAndServices)
    {
        $this->ProductAndServices = $ProductAndServices->toArray();
    }

    /**
     * @return Parcel[]
     */
    public function getParcels()
    {
        return $this->Parcels;
    }

    /**
     * @param Parcel $Parcel
     */
    public function setParcels($Parcel)
    {
        $this->Parcels[] = $Parcel->toArray();
    }
}
