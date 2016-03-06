<?php
namespace Craft;

class CraftyLove_LikesRecord extends BaseRecord
{
    public function getTableName()
    {
        return 'craftylove_likes';
    }

    protected function defineAttributes()
    {
        return array(
            'entryId'    => AttributeType::Number,
            'totalLikes' => AttributeType::Number
        );
    }

    public function defineIndexes()
    {
        return array(
            array('columns' => array('entryId'), 'unique' => true),
        );
    }
}
