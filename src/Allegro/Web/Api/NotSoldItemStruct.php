<?php

/**
 * Class Allegro_Web_Api_NotSoldItemStruct
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_NotSoldItemStruct extends Allegro_Web_Api_Abstract
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
     * @var int $itemEndTime
     */
    protected $itemEndTime = null;

    /**
     * @var int $itemBiddersCounter
     */
    protected $itemBiddersCounter = null;

    /**
     * @var Allegro_Web_Api_UserInfoStruct $itemHighestBidder
     */
    protected $itemHighestBidder = null;

    /**
     * @var int $itemCategoryId
     */
    protected $itemCategoryId = null;

    /**
     * @var int $itemWatchersCounter
     */
    protected $itemWatchersCounter = null;

    /**
     * @var int $itemViewsCounter
     */
    protected $itemViewsCounter = null;

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
     * @param int $itemId
     * @param string $itemTitle
     * @param string $itemThumbnailUrl
     * @param Allegro_Web_Api_ArrayOfItempricestruct $itemPrice
     * @param int $itemStartQuantity
     * @param int $itemQuantityType
     * @param int $itemStartTime
     * @param int $itemEndTime
     * @param int $itemBiddersCounter
     * @param Allegro_Web_Api_UserInfoStruct $itemHighestBidder
     * @param int $itemCategoryId
     * @param int $itemWatchersCounter
     * @param int $itemViewsCounter
     * @param string $itemNote
     * @param int $itemSpecialInfo
     * @param int $itemShopInfo
     * @param int $itemProductInfo
     * @param int $itemPayuInfo
     */
    public function __construct($itemId, $itemTitle, $itemThumbnailUrl, $itemPrice, $itemStartQuantity, $itemQuantityType, $itemStartTime, $itemEndTime, $itemBiddersCounter, $itemHighestBidder, $itemCategoryId, $itemWatchersCounter, $itemViewsCounter, $itemNote, $itemSpecialInfo, $itemShopInfo, $itemProductInfo, $itemPayuInfo)
    {
        $this->itemId = $itemId;
        $this->itemTitle = $itemTitle;
        $this->itemThumbnailUrl = $itemThumbnailUrl;
        $this->itemPrice = $itemPrice;
        $this->itemStartQuantity = $itemStartQuantity;
        $this->itemQuantityType = $itemQuantityType;
        $this->itemStartTime = $itemStartTime;
        $this->itemEndTime = $itemEndTime;
        $this->itemBiddersCounter = $itemBiddersCounter;
        $this->itemHighestBidder = $itemHighestBidder;
        $this->itemCategoryId = $itemCategoryId;
        $this->itemWatchersCounter = $itemWatchersCounter;
        $this->itemViewsCounter = $itemViewsCounter;
        $this->itemNote = $itemNote;
        $this->itemSpecialInfo = $itemSpecialInfo;
        $this->itemShopInfo = $itemShopInfo;
        $this->itemProductInfo = $itemProductInfo;
        $this->itemPayuInfo = $itemPayuInfo;
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
     * @return Allegro_Web_Api_NotSoldItemStruct
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
     * @return Allegro_Web_Api_NotSoldItemStruct
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
     * @return Allegro_Web_Api_NotSoldItemStruct
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
     * @return Allegro_Web_Api_NotSoldItemStruct
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
     * @return Allegro_Web_Api_NotSoldItemStruct
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
     * @return Allegro_Web_Api_NotSoldItemStruct
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
     * @return Allegro_Web_Api_NotSoldItemStruct
     */
    public function setItemStartTime($itemStartTime)
    {
        $this->itemStartTime = $itemStartTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemEndTime()
    {
        return $this->itemEndTime;
    }

    /**
     * @param int $itemEndTime
     * @return Allegro_Web_Api_NotSoldItemStruct
     */
    public function setItemEndTime($itemEndTime)
    {
        $this->itemEndTime = $itemEndTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemBiddersCounter()
    {
        return $this->itemBiddersCounter;
    }

    /**
     * @param int $itemBiddersCounter
     * @return Allegro_Web_Api_NotSoldItemStruct
     */
    public function setItemBiddersCounter($itemBiddersCounter)
    {
        $this->itemBiddersCounter = $itemBiddersCounter;
        return $this;
    }

    /**
     * @return Allegro_Web_Api_UserInfoStruct
     */
    public function getItemHighestBidder()
    {
        return $this->itemHighestBidder;
    }

    /**
     * @param Allegro_Web_Api_UserInfoStruct $itemHighestBidder
     * @return Allegro_Web_Api_NotSoldItemStruct
     */
    public function setItemHighestBidder($itemHighestBidder)
    {
        $this->itemHighestBidder = $itemHighestBidder;
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
     * @return Allegro_Web_Api_NotSoldItemStruct
     */
    public function setItemCategoryId($itemCategoryId)
    {
        $this->itemCategoryId = $itemCategoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemWatchersCounter()
    {
        return $this->itemWatchersCounter;
    }

    /**
     * @param int $itemWatchersCounter
     * @return Allegro_Web_Api_NotSoldItemStruct
     */
    public function setItemWatchersCounter($itemWatchersCounter)
    {
        $this->itemWatchersCounter = $itemWatchersCounter;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemViewsCounter()
    {
        return $this->itemViewsCounter;
    }

    /**
     * @param int $itemViewsCounter
     * @return Allegro_Web_Api_NotSoldItemStruct
     */
    public function setItemViewsCounter($itemViewsCounter)
    {
        $this->itemViewsCounter = $itemViewsCounter;
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
     * @return Allegro_Web_Api_NotSoldItemStruct
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
     * @return Allegro_Web_Api_NotSoldItemStruct
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
     * @return Allegro_Web_Api_NotSoldItemStruct
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
     * @return Allegro_Web_Api_NotSoldItemStruct
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
     * @return Allegro_Web_Api_NotSoldItemStruct
     */
    public function setItemPayuInfo($itemPayuInfo)
    {
        $this->itemPayuInfo = $itemPayuInfo;
        return $this;
    }
}
