<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AllianceConsortiumType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information about alliance partnerships and consortiums of members grouped together to obtain trading partner agreements for travel service and privileges. | Identification of the alliance or partnership in which the
 * business entity is a member. | Provides the effective and expiry dates for the alliance partnership.
 * @subpackage Structs
 */
class AllianceConsortiumType extends AbstractStructBase
{
    /**
     * The AllianceMember
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \OtaInterface\Otaconnect\StructType\AllianceMember[]
     */
    public $AllianceMember;
    /**
     * Constructor method for AllianceConsortiumType
     * @uses AllianceConsortiumType::setAllianceMember()
     * @param \OtaInterface\Otaconnect\StructType\AllianceMember[] $allianceMember
     */
    public function __construct(array $allianceMember = array())
    {
        $this
            ->setAllianceMember($allianceMember);
    }
    /**
     * Get AllianceMember value
     * @return \OtaInterface\Otaconnect\StructType\AllianceMember[]|null
     */
    public function getAllianceMember()
    {
        return $this->AllianceMember;
    }
    /**
     * Set AllianceMember value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AllianceMember[] $allianceMember
     * @return \OtaInterface\Otaconnect\StructType\AllianceConsortiumType
     */
    public function setAllianceMember(array $allianceMember = array())
    {
        foreach ($allianceMember as $allianceConsortiumTypeAllianceMemberItem) {
            // validation for constraint: itemType
            if (!$allianceConsortiumTypeAllianceMemberItem instanceof \OtaInterface\Otaconnect\StructType\AllianceMember) {
                throw new \InvalidArgumentException(sprintf('The AllianceMember property can only contain items of \OtaInterface\Otaconnect\StructType\AllianceMember, "%s" given', is_object($allianceConsortiumTypeAllianceMemberItem) ? get_class($allianceConsortiumTypeAllianceMemberItem) : gettype($allianceConsortiumTypeAllianceMemberItem)), __LINE__);
            }
        }
        $this->AllianceMember = $allianceMember;
        return $this;
    }
    /**
     * Add item to AllianceMember value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AllianceMember $item
     * @return \OtaInterface\Otaconnect\StructType\AllianceConsortiumType
     */
    public function addToAllianceMember(\OtaInterface\Otaconnect\StructType\AllianceMember $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\AllianceMember) {
            throw new \InvalidArgumentException(sprintf('The AllianceMember property can only contain items of \OtaInterface\Otaconnect\StructType\AllianceMember, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AllianceMember[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AllianceConsortiumType
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
