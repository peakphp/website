<?php

namespace App\Controllers;

use Peak\Bedrock\Controller\ActionController;

/**
 * Error Controller
 */
class ErrorController extends ActionController
{
    /**
     * index Action (default controller action)
     */
    public function _index()
    {
        //$this->view->useLayout('404');
        $this->view->header()->setCode(404);
        if (isEnv('dev') && isset($this->exception)) {
            $this->view->exception_msg = $this->exception->getMessage();
        }
    }
}
