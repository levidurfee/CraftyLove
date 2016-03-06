<?php
namespace Craft;

/**
* Function that can be used in the twig templates.
*
* Get the likes for an entry, by calling the service.
*
* @author Levi Durfee <junk@ween.io>
* @copyright Copyright (c) 2016, Levi Durfee
* @license https://raw.githubusercontent.com/levidurfee/CraftyLove/master/LICENSE
* @link https://6c657669.info
* @package craft.crafylove.plugin
* @since 1.0.0
*/
class CraftyLoveVariable
{
    public function getLikes($id)
    {
        $data = craft()->craftyLove_likes->getLikesForEntry($id);
        return $data;
    }
}
