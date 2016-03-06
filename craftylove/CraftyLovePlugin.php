<?php
namespace Craft;

class CraftyLovePlugin extends BasePlugin
{
    public function getName()
    {
        return 'Crafty Love';
    }

    public function getVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'Levi Durfee';
    }

    public function getDeveloperUrl()
    {
        return 'https://6c657669.info';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/levidurfee/CraftyLove/master/releases.json';
    }
}
