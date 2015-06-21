<?php

/**
 * Class Allegro_Web_Api_FutureItemStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_FutureItemStruct extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $itemTitle
     */
    protected $itemTitle = null;

    /**
     * @var string $itemThumbnailUrl
     */
    protected $itemThumbnailUrl = null;

    /**
     * @var Allegro_Web_Api_ArrayOfItempricestruct $itemPrice
     */
    protected $itemPrice = null;

    /**
     * @var int $itemStartQuantity
     */
    protected $itemStartQuantity = null;

    /**
     * @var int $itemQuantityType
     */
    protected $itemQuantityType = null;

    /**
     * @var int $itemStartTime
     */
    protected $itemStartTime = null;

    /**
     * @var int $itemCategoryId
     */
    protected $itemCategoryId = null;

    /**
     * @var string $itemNote
     */
    protected $itemNote = null;

    /**
     * @var int $itemSpecialInfo
     */
    protected $itemSpecialInfo = null;

    /**
     * @var int $itemShopInfo
     */
    protected $itemShopInfo = null;

    /**
     * @var int $itemProductInfo
     */
    protected $itemProductInfo = null;

    /**
     * @var int $itemPayuInfo
     */
    protected $itemPayuInfo = null;

    /**
     * @var int $itemStatus
     */
    protected $itemStatus = null;

    /**
     * @param int                                    $itemId
     * @param string                                 $itemTitle
     * @param string                                 $itemThumbnailUrl
     * @param Allegro_Web_Api_ArrayOfItempricestruct $itemPrice
     * @param int                                    $itemStartQuantity
     * @param int                                    $itemQuantityType
     * @param int                                    $itemStartTime
     * @param int                                    $itemCategoryId
     * @param string                                 $itemNote
     * @param int                                    $itemSpecialInfo
     * @param int                                    $itemShopInfo
     * @param int                                    $itemProductInfo
     * @param int                                    $itemPayuInfo
     * @param int                                    $itemStatus
     */
    public function __construct($itemId, $itemTitle, $itemThumbnailUrl, $itemPrice, $itemStartQuantity, $itemQuantityType, $itemStartTime, $itemCategoryId, $itemNote, $itemSpecialInfo, $itemShopInfo, $itemProductInfo, $itemPayuInfo, $itemStatus)
    {
        $this->itemId            = $itemId;
        $this->itemTitle         = $itemTitle;
        $this->itemThumbnailUrl  = $itemThumbnailUrl;
        $this->itemPrice         = $itemPrice;
        $this->itemStartQuantity = $itemStartQuantity;
        $this->itemQuantityType  = $itemQuantityType;
        $this->itemStartTime     = $itemStartTime;
        $this->itemCategoryId    = $itemCategoryId;
        $this->itemNote          = $itemNote;
        $this->itemSpecialInfo   = $itemSpecialInfo;
        $this->itemShopInfo      = $itemShopInfo;
        $this->itemProductInfo   = $itemProductInfo;
        $this->itemPayuInfo      = $itemPayuInfo;
        $this->itemStatus        = $itemStatus;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * @param string $itemTitle
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemThumbnailUrl()
    {
        return $this->itemThumbnailUrl;
    }

    /**
     * @param string $itemThumbnailUrl
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemThumbnailUrl($itemThumbnailUrl)
    {
        $this->itemThumbnailUrl = $itemThumbnailUrl;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_ArrayOfItempricestruct
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @param Allegro_Web_Api_ArrayOfItempricestruct $itemPrice
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemStartQuantity()
    {
        return $this->itemStartQuantity;
    }

    /**
     * @param int $itemStartQuantity
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemStartQuantity($itemStartQuantity)
    {
        $this->itemStartQuantity = $itemStartQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemQuantityType()
    {
        return $this->itemQuantityType;
    }

    /**
     * @param int $itemQuantityType
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemQuantityType($itemQuantityType)
    {
        $this->itemQuantityType = $itemQuantityType;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemStartTime()
    {
        return $this->itemStartTime;
    }

    /**
     * @param int $itemStartTime
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemStartTime($itemStartTime)
    {
        $this->itemStartTime = $itemStartTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemCategoryId()
    {
        return $this->itemCategoryId;
    }

    /**
     * @param int $itemCategoryId
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemCategoryId($itemCategoryId)
    {
        $this->itemCategoryId = $itemCategoryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemNote()
    {
        return $this->itemNote;
    }

    /**
     * @param string $itemNote
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemNote($itemNote)
    {
        $this->itemNote = $itemNote;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemSpecialInfo()
    {
        return $this->itemSpecialInfo;
    }

    /**
     * @param int $itemSpecialInfo
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemSpecialInfo($itemSpecialInfo)
    {
        $this->itemSpecialInfo = $itemSpecialInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemShopInfo()
    {
        return $this->itemShopInfo;
    }

    /**
     * @param int $itemShopInfo
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemShopInfo($itemShopInfo)
    {
        $this->itemShopInfo = $itemShopInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemProductInfo()
    {
        return $this->itemProductInfo;
    }

    /**
     * @param int $itemProductInfo
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemProductInfo($itemProductInfo)
    {
        $this->itemProductInfo = $itemProductInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemPayuInfo()
    {
        return $this->itemPayuInfo;
    }

    /**
     * @param int $itemPayuInfo
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemPayuInfo($itemPayuInfo)
    {
        $this->itemPayuInfo = $itemPayuInfo;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemStatus()
    {
        return $this->itemStatus;
    }

    /**
     * @param int $itemStatus
     * @return Allegro_Web_Api_FutureItemStruct
     */
    public function setItemStatus($itemStatus)
    {
        $this->itemStatus = $itemStatus;
        return $this;
    }
}
