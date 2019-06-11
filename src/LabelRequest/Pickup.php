<?php

namespace DPDBenelux\SDK\LabelRequest;

use DPDBenelux\SDK\DataObject;

class Pickup extends DataObject
{
    /**
     * @var string
     */
    protected $Date;

    /**
     * @var string
     */
    protected $TimeFrom1;

    /**
     * @var string
     */
    protected $TimeTo1;

    /**
     * @var string
     */
    protected $TimeFrom2;

    /**
     * @var string
     */
    protected $TimeTo2;

    /**
     * @var PickupAddress
     */
    protected $Address;

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     * @return Pickup
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeFrom1()
    {
        return $this->TimeFrom1;
    }

    /**
     * @param string $TimeFrom1
     * @return Pickup
     */
    public function setTimeFrom1($TimeFrom1)
    {
        $this->TimeFrom1 = $TimeFrom1;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeTo1()
    {
        return $this->TimeTo1;
    }

    /**
     * @param string $TimeTo1
     * @return Pickup
     */
    public function setTimeTo1($TimeTo1)
    {
        $this->TimeTo1 = $TimeTo1;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeFrom2()
    {
        return $this->TimeFrom2;
    }

    /**
     * @param string $TimeFrom2
     * @return Pickup
     */
    public function setTimeFrom2($TimeFrom2)
    {
        $this->TimeFrom2 = $TimeFrom2;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimeTo2()
    {
        return $this->TimeTo2;
    }

    /**
     * @param string $TimeTo2
     * @return Pickup
     */
    public function setTimeTo2($TimeTo2)
    {
        $this->TimeTo2 = $TimeTo2;
        return $this;
    }

    /**
     * @return PickupAddress
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param PickupAddress $Address
     * @return Pickup
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
        return $this;
    }
}
