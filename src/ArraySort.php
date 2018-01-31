<?php
declare(strict_types=1);
namespace Crafterr\ArraySort;

/**
*  ArraySort
*
*  ArraySort class consist one method arrangeElements
*
*  @author Adam Pietras
*/
class ArraySort {

    /**
     * sample array to put order
     * @var array
     */
    private $array = [];

    /**
     * ArraySort constructor.
     * @param array $array
     * @throws \Exception
     */
    public function __construct(array $array)
    {
        if (empty($array)) {
            throw new \Exception("Array is empty");
        }
        $this->array = $array;
    }

    /**
     * Method return numeric array with ordered items
     * @param $array
     * @return array
     */
    public function arrangeElements():array
    {

        $flat = [];
        foreach ($this->getArray() as $value)
        {
            //check if value is array
            if (is_array($value))
            {
                $this->setArray($value);
                //recursive call method
                $tmp = $this->arrangeElements();

                //merge arrays
                $flat = array_merge($flat,$tmp);
            }
            else
            {
                $flat[] = $value;
            }
        }
        return $flat;
    }

    /**
     * Method get array
     * @return array
     */
    public function getArray():array
    {
        return $this->array;
    }

    /**
     * Set Array
     * @param array $array
     */
    public function setArray(array $array)
    {
        $this->array = $array;
    }


}