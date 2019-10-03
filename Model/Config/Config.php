<?php
/**
 * @package     LeviathanStudios\StickyHeader
 * @version     1.0.0
 * @author      Greg Crane <gmc31886@gmail.com>
 */
declare(strict_types=1);

namespace LeviathanStudios\StickyHeader\Model\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Config class used to retrieve admin configuration values.
 */
class Config
{
    /**
     * @var ScopeConfigInterface $scopeConfig
     */
    private $scopeConfig;

    /** @var string */
    const XML_PATH_STICKY_ENABLED = 'leviathan_sticky/sticky_header/enabled';

    /** @var string */
    const XML_PATH_STICKY_SELECTOR = 'leviathan_sticky/sticky_header/header_selector';

    /** @var string */
    const XML_PATH_STICKY_TRANSPARENT = 'leviathan_sticky/sticky_header/transparent';

    /** @var string */
    const XML_PATH_STICKY_MOBILE = 'leviathan_sticky/sticky_header/mobile';

    /** @var string */
    const STICKY_DEFAULT_SELECTOR = '.page-header';

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Return the admin configuration for the enabled field.
     *
     * @param string $scope
     * @param null   $store
     * @return mixed
     */
    public function getEnabled($scope = ScopeInterface::SCOPE_STORE, $store = null)
    {
        return $this->scopeConfig->getValue(static::XML_PATH_STICKY_ENABLED, $scope, $store);
    }

    /**
     * Return the admin configuration for the _____ field.
     *
     * @param string $scope
     * @param null   $store
     * @return mixed
     */
    public function getSomeField($scope = ScopeInterface::SCOPE_STORE, $store = null)
    {
        return $this->scopeConfig->getValue('SOME_CONFIG_PATH_HERE', $scope, $store);
    }

    /**
     * Return the admin configuration for the selector field.
     *
     * @param string $scope
     * @param null   $store
     * @return mixed
     */
    public function getSelector($scope = ScopeInterface::SCOPE_STORE, $store = null)
    {
        return $this->scopeConfig->getValue(static::XML_PATH_STICKY_SELECTOR, $scope, $store);
    }

    /**
     * Return the admin configuration for the transparent field.
     *
     * @param string $scope
     * @param null   $store
     * @return mixed
     */
    public function getTransparent($scope = ScopeInterface::SCOPE_STORE, $store = null)
    {
        return $this->scopeConfig->getValue(static::XML_PATH_STICKY_TRANSPARENT, $scope, $store);
    }

    /**
     * Return the admin configuration for the mobile field.
     *
     * @param string $scope
     * @param null   $store
     * @return mixed
     */
    public function getMobile($scope = ScopeInterface::SCOPE_STORE, $store = null)
    {
        return $this->scopeConfig->getValue(static::XML_PATH_STICKY_MOBILE, $scope, $store);
    }

    /**
     * Return the admin configuration for some value
     *
     * @param string $scope
     * @param null   $store
     * @return mixed
     */
    public function getSomeValue($scope = ScopeInterface::SCOPE_STORE, $store = null)
    {
        return $this->scopeConfig->getValue('core config path', $scope, $store);
    }
}
