<?php
namespace Craft;

class CraftyLoveVariable
{
    public function getLikes($id)
    {
        $data = craft()->craftyLove_likes->getLikesForEntry($id);
        return $data;
    }
}
