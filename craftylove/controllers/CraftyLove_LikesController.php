<?php
namespace Craft;

class CraftyLove_LikesController extends BaseController
{
    protected $allowAnonymous = true;

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
