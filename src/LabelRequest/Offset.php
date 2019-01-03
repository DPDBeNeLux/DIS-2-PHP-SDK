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

class Offset extends DataObject
{
    /**
     * @var string $Horizontal
     */
    protected $Horizontal;

    /**
     * @var string $Vertical
     */
    protected $Vertical;

    /**
     * @return string
     */
    public function getHorizontal()
    {
        return $this->Horizontal;
    }

    /**
     * @param string $Horizontal
     * @return $this
     */
    public function setHorizontal($Horizontal)
    {
        $this->Horizontal = $Horizontal;
        return $this;
    }

    /**
     * @return string
     */
    public function getVertical()
    {
        return $this->Vertical;
    }

    /**
     * @param string $Vertical
     * @return $this
     */
    public function setVertical($Vertical)
    {
        $this->Vertical = $Vertical;
        return $this;
    }
}
