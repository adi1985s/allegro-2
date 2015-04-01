<?php

/**
 * Class Allegro_Web_Api_SysStatusType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SysStatusType extends Allegro_Web_Api_Abstract
{
    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var string $programVersion
     */
    protected $programVersion = null;

    /**
     * @var string $catsVersion
     */
    protected $catsVersion = null;

    /**
     * @var string $apiVersion
     */
    protected $apiVersion = null;

    /**
     * @var string $attribVersion
     */
    protected $attribVersion = null;

    /**
     * @var string $formSellVersion
     */
    protected $formSellVersion = null;

    /**
     * @var string $siteVersion
     */
    protected $siteVersion = null;

    /**
     * @var int $verKey
     */
    protected $verKey = null;

    /**
     * @param int $countryId
     * @param string $programVersion
     * @param string $catsVersion
     * @param string $apiVersion
     * @param string $attribVersion
     * @param string $formSellVersion
     * @param string $siteVersion
     * @param int $verKey
     */
    public function __construct($countryId, $programVersion, $catsVersion, $apiVersion, $attribVersion, $formSellVersion, $siteVersion, $verKey)
    {
        $this->countryId = $countryId;
        $this->programVersion = $programVersion;
        $this->catsVersion = $catsVersion;
        $this->apiVersion = $apiVersion;
        $this->attribVersion = $attribVersion;
        $this->formSellVersion = $formSellVersion;
        $this->siteVersion = $siteVersion;
        $this->verKey = $verKey;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return Allegro_Web_Api_SysStatusType
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProgramVersion()
    {
        return $this->programVersion;
    }

    /**
     * @param string $programVersion
     * @return Allegro_Web_Api_SysStatusType
     */
    public function setProgramVersion($programVersion)
    {
        $this->programVersion = $programVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getCatsVersion()
    {
        return $this->catsVersion;
    }

    /**
     * @param string $catsVersion
     * @return Allegro_Web_Api_SysStatusType
     */
    public function setCatsVersion($catsVersion)
    {
        $this->catsVersion = $catsVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * @param string $apiVersion
     * @return Allegro_Web_Api_SysStatusType
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttribVersion()
    {
        return $this->attribVersion;
    }

    /**
     * @param string $attribVersion
     * @return Allegro_Web_Api_SysStatusType
     */
    public function setAttribVersion($attribVersion)
    {
        $this->attribVersion = $attribVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormSellVersion()
    {
        return $this->formSellVersion;
    }

    /**
     * @param string $formSellVersion
     * @return Allegro_Web_Api_SysStatusType
     */
    public function setFormSellVersion($formSellVersion)
    {
        $this->formSellVersion = $formSellVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteVersion()
    {
        return $this->siteVersion;
    }

    /**
     * @param string $siteVersion
     * @return Allegro_Web_Api_SysStatusType
     */
    public function setSiteVersion($siteVersion)
    {
        $this->siteVersion = $siteVersion;
        return $this;
    }

    /**
     * @return int
     */
    public function getVerKey()
    {
        return $this->verKey;
    }

    /**
     * @param int $verKey
     * @return Allegro_Web_Api_SysStatusType
     */
    public function setVerKey($verKey)
    {
        $this->verKey = $verKey;
        return $this;
    }
}
