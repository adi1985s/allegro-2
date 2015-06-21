<?php

/**
 * Class Allegro_Web_Api_DoFinishItemRequest
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_DoFinishItemRequest extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $finishItemId
     */
    protected $finishItemId = null;

    /**
     * @var int $finishCancelAllBids
     */
    protected $finishCancelAllBids = null;

    /**
     * @var string $finishCancelReason
     */
    protected $finishCancelReason = null;

    /**
     * @param string $sessionHandle
     * @param int    $finishItemId
     * @param int    $finishCancelAllBids
     * @param string $finishCancelReason
     */
    public function __construct($sessionHandle, $finishItemId, $finishCancelAllBids, $finishCancelReason)
    {
        $this->sessionHandle       = $sessionHandle;
        $this->finishItemId        = $finishItemId;
        $this->finishCancelAllBids = $finishCancelAllBids;
        $this->finishCancelReason  = $finishCancelReason;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
        return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return Allegro_Web_Api_DoFinishItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
        return $this;
    }

    /**
     * @return int
     */
    public function getFinishItemId()
    {
        return $this->finishItemId;
    }

    /**
     * @param int $finishItemId
     * @return Allegro_Web_Api_DoFinishItemRequest
     */
    public function setFinishItemId($finishItemId)
    {
        $this->finishItemId = $finishItemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFinishCancelAllBids()
    {
        return $this->finishCancelAllBids;
    }

    /**
     * @param int $finishCancelAllBids
     * @return Allegro_Web_Api_DoFinishItemRequest
     */
    public function setFinishCancelAllBids($finishCancelAllBids)
    {
        $this->finishCancelAllBids = $finishCancelAllBids;
        return $this;
    }

    /**
     * @return string
     */
    public function getFinishCancelReason()
    {
        return $this->finishCancelReason;
    }

    /**
     * @param string $finishCancelReason
     * @return Allegro_Web_Api_DoFinishItemRequest
     */
    public function setFinishCancelReason($finishCancelReason)
    {
        $this->finishCancelReason = $finishCancelReason;
        return $this;
    }
}
