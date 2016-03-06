<?php
namespace Craft;

/**
* The backbone of the plugin. The service.
*
* add likes and get current likes for a unique id
*
* @author Levi Durfee <junk@ween.io>
* @copyright Copyright (c) 2016, Levi Durfee
* @license https://raw.githubusercontent.com/levidurfee/CraftyLove/master/LICENSE
* @link https://6c657669.info
* @package craft.craftylove.plugin
* @since 1.0.0
*/
class CraftyLove_LikesService extends BaseApplicationComponent
{
    protected $q;

    public function __construct()
    {
        $this->q = craft()->db->createCommand();
    }

    /**
    * Add a like
    *
    * First need to get current total likes, if any exist. Then +1 to add another
    * like.
    *
    * @param int
    *
    * @return null
    */
    public function addLike($id)
    {
        // get current likes
        $likes = $this->getLikesForEntry($id);
        // +1 the likes!
        $totalLikes = $likes + 1;
        // Run query insert or update existing record if id exists
        $this->q->insertOrUpdate('craftylove_likes', array('entryId' => $id), array('totalLikes' => $totalLikes));
    }

    /**
    * Get the current likes for an id
    *
    * Run a query to get the current likes for a unique id, if any.
    *
    * @param int
    *
    * @return int
    */
    public function getLikesForEntry($id)
    {
        if(is_array($id)) {
            $id = $id['id'];
        }
        $data = craft()->db->createCommand()->select('totalLikes')->from('craftylove_likes')->where(array('entryId' => $id))->queryAll();
        if(!is_object($data))
        {
            if(isset($data[0]['totalLikes'])) {
                return $data[0]['totalLikes'];
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }
}
