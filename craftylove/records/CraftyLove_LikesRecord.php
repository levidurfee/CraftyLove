<?php
namespace Craft;


/**
* Sets up the table needed to record likes.
*
* Creates a table with entryId (unique) and totalLikes. 
*
* @author Levi Durfee <junk@ween.io>
* @copyright Copyright (c) 2016, Levi Durfee
* @license https://raw.githubusercontent.com/levidurfee/CraftyLove/master/LICENSE
* @link https://6c657669.info
* @package craft.craftylove.plugin
* @since 1.0.0
*/
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
