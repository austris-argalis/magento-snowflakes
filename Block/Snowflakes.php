<?php
/**
 * @author austris
 * @copyright Copyright (c) 2018
 */

namespace Davay\Snowflakes\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Template;

class Snowflakes extends Template
{
    const XML_CONFIG_PATH = 'general/magic_snowflakes';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
        $this->scopeConfig = $context->getScopeConfig();
    }

    /**
     * @return bool
     */
    public function snowflakesEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(self::XML_CONFIG_PATH . '/enabled');
    }

    /**
     * @return string
     */
    public function getJsConfiguration(): string
    {
        return json_encode($this->scopeConfig->getValue(self::XML_CONFIG_PATH), JSON_NUMERIC_CHECK);
    }
}
