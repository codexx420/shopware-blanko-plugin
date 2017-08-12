<?php
namespace OneBlanko;
use \Shopware\Components;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use Shopware\Components\Plugin\Context\UpdateContext;

/**
 * Class OneBlanko
 * @package SwagSloganOfTheDay
 */
class OneBlanko extends Components\Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            //'Enlight_Controller_Front_RouteStartup' => 'onRouteStartup'
        ];
    }

    /**
     * @param InstallContext $context
     * @return bool
     */
    public function install(InstallContext $context)
    {
        return true;
    }

    /**
     * @param UninstallContext $context
     * @return bool
     */
    public function uninstall(UninstallContext $context)
    {
        return true;
    }

    /**
     * @param UpdateContext $context
     * @return bool
     */
    public function update(UpdateContext $context)
    {
        return true;
    }

}