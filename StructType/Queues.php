<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Queues StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container for queue information.
 * @subpackage Structs
 */
class Queues extends AbstractStructBase
{
    /**
     * The Queue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * @var \OtaInterface\Otaconnect\StructType\Queue[]
     */
    public $Queue;
    /**
     * Constructor method for Queues
     * @uses Queues::setQueue()
     * @param \OtaInterface\Otaconnect\StructType\Queue[] $queue
     */
    public function __construct(array $queue = array())
    {
        $this
            ->setQueue($queue);
    }
    /**
     * Get Queue value
     * @return \OtaInterface\Otaconnect\StructType\Queue[]|null
     */
    public function getQueue()
    {
        return $this->Queue;
    }
    /**
     * Set Queue value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Queue[] $queue
     * @return \OtaInterface\Otaconnect\StructType\Queues
     */
    public function setQueue(array $queue = array())
    {
        foreach ($queue as $queuesQueueItem) {
            // validation for constraint: itemType
            if (!$queuesQueueItem instanceof \OtaInterface\Otaconnect\StructType\Queue) {
                throw new \InvalidArgumentException(sprintf('The Queue property can only contain items of \OtaInterface\Otaconnect\StructType\Queue, "%s" given', is_object($queuesQueueItem) ? get_class($queuesQueueItem) : gettype($queuesQueueItem)), __LINE__);
            }
        }
        $this->Queue = $queue;
        return $this;
    }
    /**
     * Add item to Queue value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Queue $item
     * @return \OtaInterface\Otaconnect\StructType\Queues
     */
    public function addToQueue(\OtaInterface\Otaconnect\StructType\Queue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Queue) {
            throw new \InvalidArgumentException(sprintf('The Queue property can only contain items of \OtaInterface\Otaconnect\StructType\Queue, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Queue[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\Queues
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
