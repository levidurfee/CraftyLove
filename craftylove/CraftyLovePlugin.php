<?php
namespace Craft;

/**
 * Basics of the plugin
 *
 * Returns name, version, developer, developerUrl, and releaseFeedUrl
 *
 * @author Levi Durfee <junk@ween.io>
 * @copyright Copyright (c) 2016, Levi Durfee
 * @license https://raw.githubusercontent.com/levidurfee/CraftyLove/master/LICENSE
 * @link https://6c657669.info
 * @package craft.crafylove.plugin
 * @since 1.0.0
 */
class CraftyLovePlugin extends BasePlugin
{
    /**
    * @return string
    */
    public function getName()
    {
        return Craft::t('Crafty Love');
    }

    /**
    * @return string
    */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
    * @return string
    */
    public function getDeveloper()
    {
        return 'Levi Durfee';
    }

    /**
    * @return string
    */
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
