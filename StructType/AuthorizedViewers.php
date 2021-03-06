<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthorizedViewers StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container for authorized viewers.
 * @subpackage Structs
 */
class AuthorizedViewers extends AbstractStructBase
{
    /**
     * The AuthorizedViewer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \OtaInterface\Otaconnect\StructType\AuthorizedViewer[]
     */
    public $AuthorizedViewer;
    /**
     * Constructor method for AuthorizedViewers
     * @uses AuthorizedViewers::setAuthorizedViewer()
     * @param \OtaInterface\Otaconnect\StructType\AuthorizedViewer[] $authorizedViewer
     */
    public function __construct(array $authorizedViewer = array())
    {
        $this
            ->setAuthorizedViewer($authorizedViewer);
    }
    /**
     * Get AuthorizedViewer value
     * @return \OtaInterface\Otaconnect\StructType\AuthorizedViewer[]|null
     */
    public function getAuthorizedViewer()
    {
        return $this->AuthorizedViewer;
    }
    /**
     * Set AuthorizedViewer value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AuthorizedViewer[] $authorizedViewer
     * @return \OtaInterface\Otaconnect\StructType\AuthorizedViewers
     */
    public function setAuthorizedViewer(array $authorizedViewer = array())
    {
        foreach ($authorizedViewer as $authorizedViewersAuthorizedViewerItem) {
            // validation for constraint: itemType
            if (!$authorizedViewersAuthorizedViewerItem instanceof \OtaInterface\Otaconnect\StructType\AuthorizedViewer) {
                throw new \InvalidArgumentException(sprintf('The AuthorizedViewer property can only contain items of \OtaInterface\Otaconnect\StructType\AuthorizedViewer, "%s" given', is_object($authorizedViewersAuthorizedViewerItem) ? get_class($authorizedViewersAuthorizedViewerItem) : gettype($authorizedViewersAuthorizedViewerItem)), __LINE__);
            }
        }
        $this->AuthorizedViewer = $authorizedViewer;
        return $this;
    }
    /**
     * Add item to AuthorizedViewer value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\AuthorizedViewer $item
     * @return \OtaInterface\Otaconnect\StructType\AuthorizedViewers
     */
    public function addToAuthorizedViewer(\OtaInterface\Otaconnect\StructType\AuthorizedViewer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\AuthorizedViewer) {
            throw new \InvalidArgumentException(sprintf('The AuthorizedViewer property can only contain items of \OtaInterface\Otaconnect\StructType\AuthorizedViewer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AuthorizedViewer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\AuthorizedViewers
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
