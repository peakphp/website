<?php

namespace App;

use Peak\Bedrock\Application;
use Peak\Bedrock\Controller\FrontController;
use Peak\Bedrock\View;

/**
 * Application Front Controller
 */
class Front extends FrontController
{

    public function preDispatch()
    {
    }

    public function postDispatch()
    {
        $v = Application::get(View::class);

        $v->ctrl = strtolower($this->controller->getTitle());
        $v->action = strtolower($this->controller->getActionTitle());
        $v->page_class = $v->ctrl.'-'.$v->action;
        $v->version = config('version');
    }
        
    public function postRender()
    {
        if (isEnv('dev')) {
            $this->controller->view->debugbar()->show();
        }
    }
}