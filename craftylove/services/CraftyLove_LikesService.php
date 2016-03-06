<?php
namespace Craft;

class CraftyLove_LikesService extends BaseApplicationComponent
{
    protected $q;

    public function __construct()
    {
        $this->q = craft()->db->createCommand();
    }

    public function addLike($id)
    {
        // get current likes
        $likes = $this->getLikesForEntry($id);
        $totalLikes = $likes + 1;
        $this->q->insertOrUpdate('craftylove_likes', array('entryId' => $id), array('totalLikes' => $totalLikes));
    }

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
