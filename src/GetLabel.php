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

class GetLabel extends DataObject
{
    /**
     * @var bool
     */
    protected $GenerateLabel;

    /**
     * @var \DPDBenelux\SDK\LabelRequest\PrintOptions $PrintOptions
     */
    protected $PrintOptions;

    /**
     * @var \DPDBenelux\SDK\LabelRequest\Shipment[] $Shipments
     */
    protected $Shipments = array();

    /**
     * @return bool
     */
    public function isGenerateLabel()
    {
        return $this->GenerateLabel;
    }

    /**
     * @param bool $GenerateLabel
     */
    public function setGenerateLabel($GenerateLabel)
    {
        $this->GenerateLabel = $GenerateLabel;
    }

    /**
     * @return \DPDBenelux\SDK\LabelRequest\PrintOptions
     */
    public function getPrintOptions()
    {
        return $this->PrintOptions;
    }

    /**
     * @param \DPDBenelux\SDK\LabelRequest\PrintOptions $PrintOptions
     */
    public function setPrintOptions($PrintOptions)
    {
        $this->PrintOptions = $PrintOptions;
    }

    /**
     * @return \DPDBenelux\SDK\LabelRequest\Shipment[]
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     * @param \DPDBenelux\SDK\LabelRequest\Shipment $Shipment
     */
    public function setShipments($Shipment)
    {
        $this->Shipments[] = $Shipment->toArray();
    }
}
