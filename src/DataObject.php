<?php

namespace DPDBenelux\SDK;

class DataObject
{
    /**
     * @param DataObject $object
     * @return array
     */
    public function toArray(DataObject $object = null)
    {
        if (is_null($object)) {
            $object = $this;
        }

        $data = [];

        $variables = get_object_vars($object);

        foreach ($variables as $key => $value) {
            if (is_object($value)) {
                $data[$key] = $object->toArray($value);
            } elseif (!is_null($value)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }

    /**
     * @param array $parameters
     */
    public function setData($parameters)
    {
        foreach ($parameters as $key => $param) {
            if (property_exists($this, $key)) {
                $this->$key = $param;
            }
        }
    }
}
