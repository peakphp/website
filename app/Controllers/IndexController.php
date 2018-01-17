<?php

namespace App\Controllers;

use Peak\Bedrock\Controller\ActionController;

/**
 * Index Controller
 */
class IndexController extends ActionController
{
    /**
     * preAction() - Executed before controller handle any action (Optionnal)
     */
    public function preAction()
    {
    }

    /**
     * index Action (default controller action)
     */
    public function _index()
    {
        $this->view->message = 'Hello';
    }

    /**
     * postAction() - Executed after controller handle any action (Optionnal)
     */
    public function postAction()
    {
    }
}
