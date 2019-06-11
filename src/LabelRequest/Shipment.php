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
     * @var string $SendingDepot
     */
    protected $SendingDepot;

    /**
     * @var string $Volume
     */
    protected $Volume;

    /**
     * @var int $Weight
     */
    protected $Weight;

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
