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

class ProductAndServices extends DataObject
{
    /**
     * @var string $Product
     */
    protected $Product;

    /**
     * @var bool $HomeDelivery
     */
    protected $HomeDelivery;

    /**
     * @var bool $SaturdayDelivery
     */
    protected $SaturdayDelivery;

    /**
     * @var bool $Tyres
     */
    protected $Tyres;

    /**
     * @var ParcelShopDelivery $ParcelShopDelivery
     */
    protected $ParcelShopDelivery;

    /**
     * @var Predict $Predict
     */
    protected $Predict;

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * @param string $Product
     */
    public function setProduct($Product)
    {
        $this->Product = $Product;
    }

    /**
     * @return bool
     */
    public function isHomeDelivery()
    {
        return $this->HomeDelivery;
    }

    /**
     * @param bool $HomeDelivery
     */
    public function setHomeDelivery($HomeDelivery)
    {
        $this->HomeDelivery = $HomeDelivery;
    }

    /**
     * @return bool
     */
    public function isSaturdayDelivery()
    {
        return $this->SaturdayDelivery;
    }

    /**
     * @param bool $SaturdayDelivery
     */
    public function setSaturdayDelivery($SaturdayDelivery)
    {
        $this->SaturdayDelivery = $SaturdayDelivery;
    }

    /**
     * @return bool
     */
    public function isTyres()
    {
        return $this->Tyres;
    }

    /**
     * @param bool $Tyres
     */
    public function setTyres($Tyres)
    {
        $this->Tyres = $Tyres;
    }

    /**
     * @return ParcelShopDelivery
     */
    public function getParcelShopDelivery()
    {
        return $this->ParcelShopDelivery;
    }

    /**
     * @param ParcelShopDelivery $ParcelShopDelivery
     */
    public function setParcelShopDelivery($ParcelShopDelivery)
    {
        $this->ParcelShopDelivery = $ParcelShopDelivery->toArray();
    }

    /**
     * @return Predict
     */
    public function getPredict()
    {
        return $this->Predict;
    }

    /**
     * @param Predict $Predict
     */
    public function setPredict($Predict)
    {
        $this->Predict = $Predict->toArray();
    }
}
