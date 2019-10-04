<?php
/**
 * @copyright   Copyright © Leviathan Studios, Licensed under MIT
 * @author      Grey Crane <gmc31886@gmail.com>
 */
declare(strict_types=1);

namespace LeviathanStudios\StickyHeader\ViewModel\Block;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use LeviathanStudios\StickyHeader\Model\Config\Config;

/**
 * View model responsible for obtaining the config settings for the stick header.
 */
class StickyHeader implements ArgumentInterface
{
    /**
     * @var Config $config
     */
    private $config;

    /**
     * @param Config $config
     */
    public function __construct(
        Config $config
    ) {
        $this->config = $config;
    }

    /**
     * Return an array of the config settings for the sticky header.
     *
     * This adds in some ternary statements to change 1 and 0 values to boolean values
     * on a few of the fields. This adds in a selector value if none are present.
     *
     * @return array
     */
    public function getConfig(): array
    {
        // in case no selector is returned.
        if (!$selector = $this->config->getSelector()) {
            $selector = Config::STICKY_DEFAULT_SELECTOR;
        }
        // append a class selector (.) if none are present.
        if (strpos($selector, '.') === false && strpos($selector, '#') === false) {
            $selector = '.' . $selector;
        }

        return [
            'enabled'     => $this->config->getEnabled() ? 'true' : 'false',
            'selector'    => $selector,
            'transparent' => $this->config->getTransparent() ? 'true' : 'false',
            'mobile'      => $this->config->getMobile() ? 'true' : 'false',
        ];
    }
}
