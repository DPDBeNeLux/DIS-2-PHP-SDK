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

class ParcelShopDelivery extends DataObject
{
    /**
     * @var string $ParcelShopId
     */
    protected $ParcelShopId;

    /**
     * @var ParcelShopNotification $ParcelShopNotification
     */
    protected $ParcelShopNotification;

    /**
     * @return string
     */
    public function getParcelShopId()
    {
        return $this->ParcelShopId;
    }

    /**
     * @param string $ParcelShopId
     */
    public function setParcelShopId($ParcelShopId)
    {
        $this->ParcelShopId = $ParcelShopId;
    }

    /**
     * @return ParcelShopNotification
     */
    public function getParcelShopNotification()
    {
        return $this->ParcelShopNotification;
    }

    /**
     * @param ParcelShopNotification $ParcelShopNotification
     */
    public function setParcelShopNotification($ParcelShopNotification)
    {
        $this->ParcelShopNotification = $ParcelShopNotification;
    }
}
