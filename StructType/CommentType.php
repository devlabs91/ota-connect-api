<?php

namespace OtaInterface\Otaconnect\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of comments.
 * @subpackage Structs
 */
class CommentType extends AbstractStructBase
{
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \OtaInterface\Otaconnect\StructType\Comment[]
     */
    public $Comment;
    /**
     * Constructor method for CommentType
     * @uses CommentType::setComment()
     * @param \OtaInterface\Otaconnect\StructType\Comment[] $comment
     */
    public function __construct(array $comment = array())
    {
        $this
            ->setComment($comment);
    }
    /**
     * Get Comment value
     * @return \OtaInterface\Otaconnect\StructType\Comment[]|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Comment[] $comment
     * @return \OtaInterface\Otaconnect\StructType\CommentType
     */
    public function setComment(array $comment = array())
    {
        foreach ($comment as $commentTypeCommentItem) {
            // validation for constraint: itemType
            if (!$commentTypeCommentItem instanceof \OtaInterface\Otaconnect\StructType\Comment) {
                throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of \OtaInterface\Otaconnect\StructType\Comment, "%s" given', is_object($commentTypeCommentItem) ? get_class($commentTypeCommentItem) : gettype($commentTypeCommentItem)), __LINE__);
            }
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Add item to Comment value
     * @throws \InvalidArgumentException
     * @param \OtaInterface\Otaconnect\StructType\Comment $item
     * @return \OtaInterface\Otaconnect\StructType\CommentType
     */
    public function addToComment(\OtaInterface\Otaconnect\StructType\Comment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \OtaInterface\Otaconnect\StructType\Comment) {
            throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of \OtaInterface\Otaconnect\StructType\Comment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Comment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \OtaInterface\Otaconnect\StructType\CommentType
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
