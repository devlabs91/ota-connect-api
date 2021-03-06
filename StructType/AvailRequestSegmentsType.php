<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailRequestSegmentsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of AvailRequestSegment. Each segment includes a collection of criteria that requests a bookable entity, which may include designated rate plans, room types, amenities or services, and the request can be used for guest
 * rooms or other inventory items for which availability is sought. Each segment would be presumed to have a unique date range for each request.
 * @subpackage Structs
 */
class AvailRequestSegmentsType extends AbstractStructBase
{
    /**
     * The AvailRequestSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\AvailRequestSegment[]
     */
    public $AvailRequestSegment;
    /**
     * Constructor method for AvailRequestSegmentsType
     * @uses AvailRequestSegmentsType::setAvailRequestSegment()
     * @param \OtaInterface\Otaconnect\StructType\AvailRequestSegment[] $availRequestSegment
     */
    public function __construct(array $availRequestSegment = array())
    {
        $this
            ->setAvailRequestSegment($availRequestSegment);
    }
    /**
     * Get AvailRequestSegment value
     * @return \OtaInterface\Otaconnect\StructType\AvailRequestSegment[]|null
     */
    public function getAvailRequestSegment()
    {
        return $this->AvailRequestSegment;
    }
    /**
     * Set AvailRequestSegment value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AvailRequestSegment[] $availRequestSegment
     * @return \OtaInterface\Otaconnect\StructType\AvailRequestSegmentsType
     */
    public function setAvailRequestSegment(array $availRequestSegment = array())
    {
        foreach ($availRequestSegment as $availRequestSegmentsTypeAvailRequestSegmentItem) {
            // validation for constraint: itemType
            if (!$availRequestSegmentsTypeAvailRequestSegmentItem instanceof \OtaInterface\Otaconnect\StructType\AvailRequestSegment) {
                throw new \InvalidArgumentException(sprintf('The AvailRequestSegment property can only contain items of \OtaInterface\Otaconnect\StructType\AvailRequestSegment, "%s" given', is_object($availRequestSegmentsTypeAvailRequestSegmentItem) ? get_class($availRequestSegmentsTypeAvailRequestSegmentItem) : gettype($availRequestSegmentsTypeAvailRequestSegmentItem)), __LINE__);
            }
        }
        $this->AvailRequestSegment = $availRequestSegment;
        return $this;
    }
    /**
     * Add item to AvailRequestSegment value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AvailRequestSegment $item
     * @return \OtaInterface\Otaconnect\StructType\AvailRequestSegmentsType
     */
    public function addToAvailRequestSegment(\OtaInterface\Otaconnect\StructType\AvailRequestSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\AvailRequestSegment) {
            throw new \InvalidArgumentException(sprintf('The AvailRequestSegment property can only contain items of \OtaInterface\Otaconnect\StructType\AvailRequestSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailRequestSegment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AvailRequestSegmentsType
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
