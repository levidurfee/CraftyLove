<?php
namespace Craft;

/**
* Handles the form POST when adding a new like
*
* Allows anyone to submit the form and add a new like for any unique id. It
* checks the post key 'id' to see if it is set. If it is, it then uses the
* service to add the like.
*
* @author Levi Durfee <junk@ween.io>
* @copyright Copyright (c) 2016, Levi Durfee
* @license https://raw.githubusercontent.com/levidurfee/CraftyLove/master/LICENSE
* @link https://6c657669.info
* @package craft.crafylove.plugin
* @since 1.0.0
*/
class CraftyLove_LikesController extends BaseController
{
    protected $allowAnonymous = true;

    /**
    * @return null
    */
    public function actionAddNewLike()
    {
        $this->requirePostRequest();
        if(isset($_POST['id']))
        {
            $id = $_POST['id'];
        } else {
            return false;
        }
        craft()->craftyLove_likes->addLike($id);
        $this->redirectToPostedUrl();
    }
}
